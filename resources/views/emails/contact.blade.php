<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>New Contact Form Submission</title>
</head>

<body style="font-family: Arial, sans-serif; background: #f9f9f9; padding: 20px;">
    <div style="max-width: 600px; background: #fff; margin: auto; padding: 20px; border-radius: 8px;">
        <div style="text-align: center; margin-bottom: 20px;">
            <img src="{{ asset('assets/images/logo-golden.png') }}" alt="Logo" width="100">
        </div>

        <h2 style="text-align:center;">Contact Form Details</h2>
        <p><strong>First Name:</strong> {{ $data['firstName'] }}</p>
        <p><strong>Last Name:</strong> {{ $data['lastName'] }}</p>
        <p><strong>Email:</strong> {{ $data['email'] }}</p>
        <p><strong>Phone:</strong> {{ $data['phone'] }}</p>
        <p><strong>Investment Amount:</strong> ${{ $data['investment'] }}</p>
        @if(!empty($data['details']))
            <p><strong>Additional Details:</strong> {{ $data['details'] }}</p>
        @endif
    </div>
</body>

</html>