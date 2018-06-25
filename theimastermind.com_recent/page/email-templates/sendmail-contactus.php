<?php
session_start();
require('../../db/connect.php');



$emailsend=$_GET["email"];
$showname= $_GET["firstname"];
$showlastname = $_GET["lastname"];

$_SESSION["firstnamecu"] = $_GET["firstname"];
$_SESSION["lastnamecu"] = $_GET["lastname"];
$_SESSION["emailcu"] = $_GET["email"];
$_SESSION["phonecu"] = $_GET["phone"];
$_SESSION["companycu"] = $_GET["comname"];
$_SESSION["subjectcu"] = $_GET["subject"];
$_SESSION["messagecu"] = $_GET["message"];


	
	$body1 = file_get_contents('email-contactus.html');
	$body1 = str_replace('%showfristname%', $showname, $body1); 
	$body1 = str_replace('%showlastname%', $showlastname, $body1); 
	


require '../phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

require('../../db/connectmailserver.php');



$mail->setFrom("contact@theimastermind.com", "TheiMastermind");

// $mail->addAddress($emailsend, 'User');     // Add a recipient
// 												           // Name is optional

// $mail->addReplyTo('contact@theimastermind.com', 'TheiMastermind');


$mail->addReplyTo('contact@theimastermind.com', 'TheiMastermind');
$mail->From       = 'contact@theimastermind.com';
$mail->FromName   = 'TheiMastermind';
$mail->addAddress($emailsend, $showname);
$mail->Subject  = 'Thank you for your Message. Do Not Reply';


$mail->isHTML(true);                                  // Set email format to HTML

// $mail->Subject = 'Thank you for your Message. - Not Reply';


// $body2 = 'ทางเราได้รับข้อมูลของคุณแล้ว และจะทำการพิจารณาและตอบกลับโดยเร็วที่สุด We have now received your message.  
// Your message is being verified. We will contact you back shortly.';


$mail->Body = $body1;
$mail->AltBody = 'We have now received your message.  Your message is being verified. We will contact you back shortly. ';


// $message = "ทางเราได้รับข้อมูลของคุณแล้ว และจะทำการพิจารณาและตอบกลับโดยเร็วที่สุด<br /><br />";
// $message .= "We have now received your message.  
// Your message is being verified. We will contact you back shortly.<br /><br />";
// $message .= "หมายเหตุ : อีเมล์นี้เป็นอีเมล์อัตโนมัติจาก TheiMastermind ไม่ต้องตอบกลับ<br /><br />";


// $mail->msgHTML($message);



// $body = <<<'EOT'
// TheiMastermind 2016 All Rights Reserved.
// EOT;


// $mail->WordWrap = 80;
// $mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images

// $mail->addAttachment('img/image007.jpg','image007.jpg');  // optional name
// $mail->addAttachment('../PHPMailer/examples/images/phpmailer.png', 'phpmailer.png');  // optional name

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo "<script>window.location = 'sendmail-contactus-toback.php'</script>";
}

?>