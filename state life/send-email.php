<?php
// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input data to prevent email injection
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    
    // Your email address (replace with your Gmail)
    $to = "umairamjadmughal07@gmail.com";
    
    // Subject of the email
    $subject = "New Contact Form Message from $name";
    
    // Email body content
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    // Additional headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message. Please try again later.";
    }
}
?>
