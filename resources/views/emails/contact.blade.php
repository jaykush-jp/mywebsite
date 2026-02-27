<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
</head>

<body style="margin:0; padding:0; background-color:#eef2f7; font-family:Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:20px 10px;">
        <tr>
            <td align="center">

                <!-- Main Card -->
                <table width="100%" cellpadding="0" cellspacing="0"
                    style="max-width:600px; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.08);">

                    <!-- Logo Section -->
                    {{-- <tr>
                        <td align="center" style="padding:20px 20px 10px 20px;">
                            <img src="{{ $message->embed(public_path('assets/frontend/images/logo.webp')) }}" alt="Company Logo" width="140"
                                style="display:block;">
                        </td>
                    </tr> --}}

                    <!-- Gradient Header (Change Brand Colors Here) -->
                    <tr>
                        <td
                            style="background:linear-gradient(135deg,#0d6efd,#20c997); padding:25px; text-align:center; color:#ffffff;">
                            <h2 style="margin:0; font-size:22px; font-weight:600;">
                                📩 New Contact Message
                            </h2>
                            <p style="margin:6px 0 0 0; font-size:14px; opacity:0.9;">
                                A new inquiry has been submitted through your website.
                            </p>
                        </td>
                    </tr>

                    <!-- Content Section -->
                    <tr>
                        <td style="padding:30px 25px; color:#333333; font-size:15px;">

                            <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse:collapse;">

                                <tr>
                                    <td
                                        style="padding:12px; font-weight:bold; width:110px; background:#f8f9fa; border-radius:6px 0 0 6px;">
                                        Name
                                    </td>
                                    <td style="padding:12px; background:#f8f9fa; border-radius:0 6px 6px 0;">
                                        {{ $details['name'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2" height="12"></td>
                                </tr>

                                <tr>
                                    <td
                                        style="padding:12px; font-weight:bold; background:#f8f9fa; border-radius:6px 0 0 6px;">
                                        Email
                                    </td>
                                    <td style="padding:12px; background:#f8f9fa; border-radius:0 6px 6px 0;">
                                        {{ $details['email'] }}
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2" height="12"></td>
                                </tr>

                                <tr>
                                    <td
                                        style="padding:12px; font-weight:bold; vertical-align:top; background:#f8f9fa; border-radius:6px 0 0 6px;">
                                        Message
                                    </td>
                                    <td
                                        style="padding:12px; background:#f8f9fa; border-radius:0 6px 6px 0; line-height:1.6;">
                                        {{ $details['message'] }}
                                    </td>
                                </tr>

                            </table>

                            <!-- Reply Button -->
                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-top:30px;">
                                <tr>
                                    <td align="center">
                                        <a href="mailto:{{ $details['email'] }}?subject=Re: Your Inquiry"
                                            style="background:linear-gradient(135deg,#0d6efd,#20c997);
                                  color:#ffffff;
                                  padding:12px 28px;
                                  text-decoration:none;
                                  border-radius:30px;
                                  font-weight:bold;
                                  display:inline-block;
                                  font-size:14px;">
                                            Reply to {{ $details['name'] }}
                                        </a>
                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td style="background:#f8f9fa; padding:18px; text-align:center; font-size:13px; color:#6c757d;">
                            © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
                        </td>
                    </tr>

                </table>
                <!-- End Card -->

            </td>
        </tr>
    </table>

</body>

</html>
