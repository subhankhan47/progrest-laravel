<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Message</title>
</head>
<body>
<h1>Contact Message</h1>
<p><strong>First Name:</strong> {{ $details['first_name'] }}</p>
<p><strong>Last Name:</strong> {{ $details['last_name'] }}</p>
<p><strong>Email:</strong> {{ $details['email'] }}</p>
<p><strong>Phone Number:</strong> {{ $details['number'] }}</p>
<p><strong>Message:</strong></p>
<p>{{ $details['message'] }}</p>
</body>
</html>
