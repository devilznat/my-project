<?php
//require_once('class.phpmailer.php');
require '../PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->CharSet="UTF-8";
$mail->Host = 'ssl://smtp.gmail.com:465:1';
//$mail->Port = 465;
$mail->Username = 'eakkawat4419@gmail.com';
$mail->Password = 'wanwongwang4419!!';
$mail->SMTPAuth = true;

$mail->From = 'eakkawat4419@gmail.com';
$mail->FromName = 'eakkawat';
$mail->AddAddress('test@cybercare.co.th');
$mail->AddReplyTo('eakkawat4419@hotmail.com', 'Information');

$mail->IsHTML(true);
$mail->Subject    = "PHPMailer Test Subject via Sendmail, basic";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!";
$mail->Body    = "���ͺ";

if(!$mail->Send())
{
  echo "Mailer Error: " . $mail->ErrorInfo;
}
else
{
  echo "Message sent!";
}
?>