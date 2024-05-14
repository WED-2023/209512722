<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Assuming your email is being sent to 'laufermen@gmail.com'
    $to = 'laufermen@gmail.com';
    $subject = 'Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo 'Email sent successfully.';
    } else {
        echo 'Error: Unable to send email.';
    }
}
?>
