<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Donation Request</title>
    <style>
        body { font-family: Arial, sans-serif; background: #f4f4f4; margin: 0; padding: 20px; }
        .container { max-width: 600px; margin: 0 auto; background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); }
        .header { background: linear-gradient(135deg, #1B5E20, #2E7D32); padding: 40px 30px; text-align: center; color: white; }
        .header h1 { margin: 0 0 10px; font-size: 26px; }
        .header p { margin: 0; opacity: 0.9; font-size: 14px; }
        .body { padding: 35px 30px; }
        .label { font-size: 12px; color: #999; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 4px; }
        .value { font-size: 16px; color: #333; margin-bottom: 20px; font-weight: 500; }
        .amount-box { background: #E8F5E9; border-left: 4px solid #1B5E20; padding: 20px; border-radius: 8px; margin-bottom: 25px; }
        .amount-box .amount { font-size: 32px; font-weight: 700; color: #1B5E20; }
        .divider { border: none; border-top: 1px solid #eee; margin: 25px 0; }
        .footer { background: #f9f9f9; padding: 20px 30px; text-align: center; color: #999; font-size: 13px; border-top: 1px solid #eee; }
        .badge { display: inline-block; background: #E8F5E9; color: #1B5E20; padding: 4px 12px; border-radius: 20px; font-size: 13px; font-weight: 600; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New Donation Request</h1>
            <p>MTAWADA has received a new donation request</p>
        </div>
        <div class="body">
            <div class="amount-box">
                <div class="label">Donation Amount</div>
                <div class="amount">{{ $data['currency'] }} {{ number_format($data['amount'], 2) }}</div>
                <div style="margin-top: 8px;">
                    <span class="badge">{{ $data['donation_type'] === 'monthly' ? 'Monthly' : 'One-Time' }} Donation</span>
                </div>
            </div>

            <div class="label">Donor Name</div>
            <div class="value">{{ $data['first_name'] }} {{ $data['last_name'] }}</div>

            <div class="label">Email Address</div>
            <div class="value">{{ $data['email'] }}</div>

            <div class="label">Phone Number</div>
            <div class="value">{{ $data['phone'] }}</div>

            @if (!empty($data['country']))
            <div class="label">Country</div>
            <div class="value">{{ $data['country'] }}</div>
            @endif

            @if (!empty($data['comments']))
            <hr class="divider">
            <div class="label">Additional Comments</div>
            <div class="value" style="white-space: pre-wrap;">{{ $data['comments'] }}</div>
            @endif

            <hr class="divider">
            <p style="color: #666; font-size: 14px; line-height: 1.6;">
                Please contact the donor at <strong>{{ $data['email'] }}</strong> or <strong>{{ $data['phone'] }}</strong>
                with payment instructions as soon as possible.
            </p>
        </div>
        <div class="footer">
            <p>This email was sent automatically from the MTAWADA website donation form.</p>
            <p>MTAWADA — P.O. Box 3560 NHC, Ubungo-Dar es Salaam | info@mtawada.or.tz</p>
        </div>
    </div>
</body>
</html>
