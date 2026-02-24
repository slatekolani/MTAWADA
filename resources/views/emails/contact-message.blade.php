<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #1B5E20, #2E7D32); padding: 40px 30px; text-align: center; color: white; }
        .header h1 { margin: 0 0 10px; font-size: 26px; }
        .header p { margin: 0; opacity: 0.9; font-size: 14px; }
        .body { padding: 35px 30px; }
        .label { font-size: 12px; color: #999; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px; }
        .value { font-size: 16px; color: #333; margin-bottom: 20px; font-weight: 500; }
        .message-box { background: #F8FAFC; border-left: 4px solid #1B5E20; padding: 20px; border-radius: 8px; margin-bottom: 25px; white-space: pre-wrap; line-height: 1.6; color: #444; }
        .divider { border: none; border-top: 1px solid #eee; margin: 25px 0; }
        .footer { background: #f9f9f9; padding: 20px 30px; text-align: center; color: #999; font-size: 13px; border-top: 1px solid #eee; }
        .badge { display: inline-block; background: #E8F5E9; color: #1B5E20; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: 600; text-transform: capitalize; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Contact Message</h1>
            <p>MTAWADA has received a new message from the website</p>
        </div>
        <div class="body">
            <div class="label">Inquiry Type</div>
            <div class="value"><span class="badge">{{ str_replace('-', ' ', $data['inquiry_type']) }}</span></div>

            <div class="label">Sender Name</div>
            <div class="value">{{ $data['first_name'] }} {{ $data['last_name'] }}</div>

            <div class="label">Email Address</div>
            <div class="value">{{ $data['email'] }}</div>

            @if (!empty($data['phone']))
            <div class="label">Phone Number</div>
            <div class="value">{{ $data['phone'] }}</div>
            @endif

            <hr class="divider">

            <div class="label">Message</div>
            <div class="message-box">{{ $data['message'] }}</div>

            <hr class="divider">
            <p style="color: #666; font-size: 14px; line-height: 1.6;">
                Please reply to this message by contacting <strong>{{ $data['first_name'] }}</strong>
                at <strong>{{ $data['email'] }}</strong>
                @if(!empty($data['phone'])) or <strong>{{ $data['phone'] }}</strong>@endif.
            </p>
        </div>
        <div class="footer">
            <p>This email was sent automatically from the MTAWADA website contact form.</p>
            <p>MTAWADA — P.O. Box 3560 NHC, Ubungo-Dar es Salaam | info@mtawada.or.tz</p>
        </div>
    </div>
</body>
</html>
