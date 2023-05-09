<?php
// Load PHPMailer
require 'phpmailer/PHPMailerAutoload.php';

// Instantiate a new PHPMailer object
$mail = new PHPMailer;

// Configure SMTP settings
$mail->isSMTP();
$mail->Host = 'smtp.example.com';
$mail->SMTPAuth = true;
$mail->Username = 'your_username';
$mail->Password = 'your_password';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

// Set email content
$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress('arianneghislaine@gmail.com');
$mail->Subject = 'New message from website contact form';
$mail->Body = $_POST['message'];

// Send email and check for errors
if (!$mail->send()) {
    echo 'Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
?>
