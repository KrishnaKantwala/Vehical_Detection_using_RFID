<?php
require 'phpmailer/class.phpmailer.php';
$mail = new PHPMailer(); // create a new object
$mail->IsSMTP(); // enable SMTP
$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
$mail->SMTPAuth = true; // authentication enabled
$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "yashldce@gmail.com";
$mail->Password = "9662097402";
$mail->SetFrom("yashldce@gmail.com");
$mail->Subject = "Test";
$mail->Body = "hello gabli howz u";
$mail->AddAddress("payalsavaliya001@gmail.com");

 if(!$mail->Send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
 } else {
    echo "Message has been sent";
 }
?>