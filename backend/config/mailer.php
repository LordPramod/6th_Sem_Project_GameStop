<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require __DIR__ . '/../../vendor/autoload.php';

$mail = new PHPMailer(true);

$mail->isSMTP();
// Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';
// Specify main SMTP server
$mail->SMTPAuth = true;
// Enable SMTP authentication
$mail->Username = 'thapapramod821@gmail.com';
// SMTP username
$mail->Password = 'iepjmbqxrcqcpdzo';
// SMTP password 
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
// Enable TLS encryption
$mail->Port = 587;

$mail->isHTML(true);

return $mail;
