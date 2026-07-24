<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Website Enquiry</title>
    <style>
        body { font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; background-color: #f4f6f8; color: #333333; margin: 0; padding: 0; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; }
        table { border-collapse: collapse; mso-table-lspace: 0pt; mso-table-rspace: 0pt; }
        img { border: 0; height: auto; line-height: 100%; outline: none; text-decoration: none; }
        .wrapper { width: 100%; table-layout: fixed; background-color: #f4f6f8; padding: 40px 20px; }
        .container { max-width: 600px; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 10px rgba(0,0,0,0.05); }
        .header { background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%); padding: 32px; text-align: center; }
        .header h2 { color: #ffffff; margin: 0; font-size: 24px; font-weight: 700; letter-spacing: -0.5px; }
        .header p { color: #e0f2fe; margin: 8px 0 0 0; font-size: 14px; }
        .content { padding: 32px; }
        .section-title { font-size: 12px; font-weight: 700; text-transform: uppercase; color: #64748b; letter-spacing: 1px; margin: 24px 0 12px 0; border-bottom: 1px solid #e2e8f0; padding-bottom: 6px; }
        .section-title:first-of-type { margin-top: 0; }
        .data-row { width: 100%; margin-bottom: 12px; }
        .label { font-size: 13px; font-weight: 600; color: #475569; width: 35%; padding: 8px 0; vertical-align: top; }
        .value { font-size: 14px; color: #0f172a; width: 65%; padding: 8px 0 8px 12px; vertical-align: top; }
        .link { color: #2563eb; text-decoration: none; font-weight: 500; }
        .badge { display: inline-block; background-color: #eff6ff; color: #1e40af; font-size: 12px; font-weight: 600; padding: 4px 10px; border-radius: 9999px; margin-right: 4px; margin-bottom: 4px; }
        .message-box { background-color: #f8fafc; border-left: 4px solid #3b82f6; padding: 16px; border-radius: 0 6px 6px 0; font-size: 14px; line-height: 1.6; color: #334155; font-style: italic; margin-top: 8px; }
        .footer { background-color: #f8fafc; padding: 20px; text-align: center; border-top: 1px solid #e2e8f0; font-size: 12px; color: #94a3b8; }
    </style>
</head>
<body>
    <center class="wrapper">
        <table class="container" width="100%" cellpadding="0" cellspacing="0" border="0">
            <!-- Header Banner -->
            <tr>
                <td class="header">
                    <h2>New Enquiry Received</h2>
                    <p>A user submitted a new lead entry via the website portal.</p>
                </td>
            </tr>

            <!-- Form Breakdown Context -->
            <tr>
                <td class="content">
                    
                    <!-- Profile Attributes Group -->
                    <div class="section-title">Contact Profile</div>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="label">Full Name</td>
                            <td class="value" style="font-weight: 600;">{{ $enquiry->name }}</td>
                        </tr>
                        <tr>
                            <td class="label">Email Address</td>
                            <td class="value"><a href="mailto:{{ $enquiry->email }}" class="link">{{ $enquiry->email }}</a></td>
                        </tr>
                        <tr>
                            <td class="label">Phone Number</td>
                            <td class="value"><a href="tel:{{ $enquiry->phone }}" class="link">{{ $enquiry->phone }}</a></td>
                        </tr>
                    </table>

                    <!-- Geographic Details Group -->
                    <div class="section-title">Location Metrics</div>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="label">Country</td>
                            <td class="value">{{ $enquiry->country }}</td>
                        </tr>
                        <tr>
                            <td class="label">City / Location</td>
                            <td class="value">{{ $enquiry->location ?: 'N/A' }}</td>
                        </tr>
                    </table>

                    <!-- Commercial Intent Classification -->
                    <div class="section-title">Business Scope</div>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="label">Business Type</td>
                            <td class="value">{{ $enquiry->business_type }}</td>
                        </tr>
                        <tr>
                            <td class="label">Lead Source</td>
                            <td class="value">{{ $enquiry->source ?: 'Organic Website Submission' }}</td>
                        </tr>
                        <tr>
                            <td class="label">Product Scope</td>
                            <td class="value">
                                @if(is_array($enquiry->product_categories))
                                    @foreach($enquiry->product_categories as $cat)
                                        <span class="badge">{{ $cat }}</span>
                                    @endforeach
                                @else
                                    <span class="badge">{{ $enquiry->product_categories }}</span>
                                @endif
                            </td>
                        </tr>
                    </table>

                    <!-- Detailed Submission Message Description -->
                    <div class="section-title">Requirement Specifications</div>
                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                        <tr>
                            <td class="label">Subject Line</td>
                            <td class="value" style="font-weight: 600; color: #1e293b;">{{ $enquiry->subject }}</td>
                        </tr>
                    </table>
                    <div class="message-box">
                        {!! nl2br(e($enquiry->message)) !!}
                    </div>

                </td>
            </tr>

            <!-- System Information Footer Line -->
            <tr>
                <td class="footer">
                    This email is automated. Please log into the admin CRM panel to directly execute follow-up tasks.
                </td>
            </tr>
        </table>
    </center>
</body>
</html>
