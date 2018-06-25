<?php
session_start();
require('../../db/connect.php');






$showname = $_GET["name"];
$emailsend =$_GET["email"];

$_SESSION["nameft"] = $_GET["name"];
$_SESSION["phoneft"] = $_GET["phone"];
$_SESSION["countryft"] = $_GET["country"];
$_SESSION["posittionft"] = $_GET["position"];
$_SESSION["messageft"] = $_GET["message"];
$_SESSION["emailft"] = $_GET["email"];


	
	$body1 = file_get_contents('email-findtalents.html');
	$body1 = str_replace('%showname%', $showname, $body1); 
	
	


require '../phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

require('../../db/connectmailserver.php');



$mail->setFrom("contact@theimastermind.com", "TheiMastermind");
$mail->addReplyTo('contact@theimastermind.com', 'TheiMastermind');
$mail->From       = 'contact@theimastermind.com';
$mail->FromName   = 'TheiMastermind';
$mail->addAddress($emailsend, $showname);
$mail->Subject  = 'Thank you for your Message. Do Not Reply';


$mail->isHTML(true);                                  // Set email format to HTML


$mail->Body = $body1;
$mail->AltBody = '';

// $message = "ทางเราได้รับข้อมูลของคุณแล้ว และจะทำการพิจารณาและตอบกลับโดยเร็วที่สุด<br /><br />";
// $message .= "We have now received your message.  
// Your message is being verified. We will contact you back shortly.<br /><br />";
// $message .= "หมายเหตุ : อีเมล์นี้เป็นอีเมล์อัตโนมัติจาก TheiMastermind ไม่ต้องตอบกลับ<br /><br />";


// $mail->msgHTML($message);

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo "<script>window.location = 'sendmail-findtalents-toback.php'</script>";
}

?>