<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
    <h2>Contact Form Submission</h2>
    
    <p><strong>Name:</strong> {{ $formData['name'] }}</p>
    <p><strong>Email:</strong> {{ $formData['email'] }}</p>
    <p><strong>Phone Number:</strong> {{ $formData['phone'] }}</p>
    <p><strong>Subject:</strong> {{ $formData['subject'] }}</p>
    
    <h3>Message:</h3>
    <p>{{ $formData['message'] }}</p>
</body>
</html>
