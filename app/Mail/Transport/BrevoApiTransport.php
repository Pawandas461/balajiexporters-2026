<?php

namespace App\Mail\Transport;

use Illuminate\Support\Facades\Http;
use Symfony\Component\Mailer\Envelope;
use Symfony\Component\Mailer\SentMessage;
use Symfony\Component\Mailer\Transport\AbstractTransport;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\MessageConverter;

class BrevoApiTransport extends AbstractTransport
{
    public function __construct(protected string $apiKey)
    {
        parent::__construct();
    }

    protected function doSend(SentMessage $message): void
    {
        $email = MessageConverter::toEmail($message->getOriginalMessage());

        $payload = [
            'sender' => $this->formatAddress($email->getFrom()[0]),
            'to' => array_map(fn ($address) => $this->formatAddress($address), $email->getTo()),
            'subject' => $email->getSubject(),
        ];

        if ($email->getHtmlBody()) {
            $payload['htmlContent'] = $email->getHtmlBody();
        }

        if ($email->getTextBody()) {
            $payload['textContent'] = $email->getTextBody();
        }

        if ($replyTo = $email->getReplyTo()) {
            $payload['replyTo'] = $this->formatAddress($replyTo[0]);
        }

        $response = Http::withHeaders([
            'api-key' => $this->apiKey,
            'Accept' => 'application/json',
        ])->post('https://api.brevo.com/v3/smtp/email', $payload);

        if ($response->failed()) {
            throw new \RuntimeException(
                'Brevo API mail send failed: ' . $response->status() . ' ' . $response->body()
            );
        }
    }

    protected function formatAddress($address): array
    {
        $formatted = ['email' => $address->getAddress()];

        if ($address->getName()) {
            $formatted['name'] = $address->getName();
        }

        return $formatted;
    }

    public function __toString(): string
    {
        return 'brevo-api';
    }
}
