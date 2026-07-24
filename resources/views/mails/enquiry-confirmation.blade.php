<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Balaji Exports</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f4f6f8; color: #333333; margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table { border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        .wrapper { width: 100%; table-layout: fixed; background-color: #f4f6f8; padding: 40px 20px; }
        .container { max-width: 600px; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .header { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%); padding: 35px 32px; text-align: center; }
        .header h2 { color: #ffffff; margin: 0; font-size: 22px; font-weight: 700; letter-spacing: -0.5px; }
        .content { padding: 32px; line-height: 1.6; font-size: 15px; color: #334155; }
        .greeting { font-size: 18px; font-weight: 600; color: #0f172a; margin-bottom: 16px; }
        .section-title { font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748b; letter-spacing: 1px; margin: 32px 0 12px 0; border-bottom: 1px solid #e2e8f0; padding-bottom: 6px; }
        .summary-box { background-color: #f8fafc; border: 1px solid #e2e8f0; border-radius: 6px; padding: 20px; margin-top: 8px; }
        .summary-item { margin-bottom: 12px; }
        .summary-item:last-child { margin-bottom: 0; }
        .label { font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748b; display: block; margin-bottom: 4px; }
        .value { font-size: 14px; color: #0f172a; }
        .message-text { font-style: italic; color: #475569; border-left: 3px solid #3b82f6; padding-left: 12px; margin-top: 6px; }
        .closing { margin-top: 32px; padding-top: 16px; border-top: 1px solid #f1f5f9; font-size: 14px; color: #475569; }
        .footer { background-color: #f8fafc; padding: 20px; text-align: center; border-top: 1px solid #e2e8f0; font-size: 12px; color: #94a3b8; }
    </style>
</head>
<body>
    <center class="wrapper">
        <table class="container" width="100%" cellpadding="0" cellspacing="0" border="0">
            <!-- Header Banner -->
            <tr>
                <td class="header">
                    <h2>Thank You for Contacting Us</h2>
                </td>
            </tr>

            <!-- Content Area -->
            <tr>
                <td class="content">
                    <div class="greeting">Dear {{ $enquiry->name }},</div>
                    
                    <p>Thank you for reaching out to <strong>Balaji Exports</strong>.</p>
                    
                    <p>We have successfully received your request. Our dedicated team is currently reviewing your specifications and requirement parameters, and we will get back to you with a comprehensive response as soon as possible.</p>

                    <!-- Summary Segment -->
                    <div class="section-title">Copy of Your Submission</div>
                    
                    <div class="summary-box">
                        <div class="summary-item">
                            <span class="label">Subject</span>
                            <span class="value" style="font-weight: 600;">{{ $enquiry->subject }}</span>
                        </div>
                        <div class="summary-item" style="margin-top: 16px;">
                            <span class="label">Message</span>
                            <div class="value message-text">
                                {!! nl2br(e($enquiry->message)) !!}
                            </div>
                        </div>
                    </div>

                    <!-- Sign-off Block -->
                    <div class="closing">
                        Thank you for choosing us.<br><br>
                        <strong>Regards,</strong><br>
                        Balaji Exports
                    </div>
                </td>
            </tr>

            <!-- Minimalist Footer -->
            <tr>
                <td class="footer">
                    &copy; {{ date('Y') }} Balaji Exports. All rights reserved. <br>
                    Please do not reply directly to this automated confirmation email.
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
