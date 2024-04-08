<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

// kjuuytxlguafqjmp

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'pixelflames.developer@gmail.com';
$mail->Password = 'qptfscnvaxqyiywc';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->setFrom('pixelflames.developer@gmail.com');

$mail->addAddress('abhijith@pixelflames.com');

$mail->isHTML(true);
$mail->Subject = 'Ucelo enquiry form submission.';
$mail->Body = 'Name:' . $_POST["name"] . '  <br> ';
$mail->Body .= 'Email:' . $_POST["email"] . '  <br> ';
$mail->Body .= 'Phone:' . $_POST["phone"] . '<br>   ';
$mail->Body .= 'Message:' . $_POST["comments"] . '';
try {
  $mail->send();
} catch (Exception $e) {
  echo $e->getMessage();
  exit(); //Boring error messages from anything else!
}
