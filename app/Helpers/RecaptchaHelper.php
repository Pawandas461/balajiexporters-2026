<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Http;

class RecaptchaHelper
{
    public static function verifyRecaptcha($recaptchaResponse)
    {
        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => env('RECAPTCHA_SECRET_KEY'),
            'response' => $recaptchaResponse
        ]);

        $responseBody = json_decode($response->body());

        return $responseBody->success;
    }
}