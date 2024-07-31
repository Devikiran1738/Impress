<?php

// Capture user data (the hidden message)
$message = $_POST['message'];

// Email configuration (replace with your details)
$to = "kiranreddy1738@gmail.com";
$subject = "Success! Message from Ask Her Out page";
$body = "The user has seen the 'Hehehehe' message.";

// Library for sending email (replace with chosen library)
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->isSMTP(); // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Set the mail server
$mail->Port = 587;                   // Set the SMTP port
$mail->SMTPAuth = true;                    // Enable SMTP authentication
$mail->Username = 'naakalaposhana@gmail.com';   // Replace with your Gmail address
$mail->Password = 'NaaKalaposhana@1234';         // Replace with your Gmail password
$mail->SMTPSecure = 'tls';                 // Enable TLS encryption

// Set email details
$mail->setFrom('naakalaposhana@gmail.com', 'Ask Her Out Page');
$mail->addAddress($to);
$mail->isHTML(false);  // Set email format to plain text

$mail->Subject = $subject;
$mail->Body = $body;

if(!$mail->send()) {
  echo 'Message could not be sent.';
  echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  echo 'Message has been sent';
}

?>
