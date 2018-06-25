<?php
session_start();
require('../../db/connect.php');

$getidresume = $_GET["idresume"];
$_SESSION["idresume"] = $getidresume;

$getname = $_GET["name"];
$getlastname = $_GET["lastname"];
$getemail = $_GET["email"];
$getphone = $_GET["phone"];
$getapp = $_GET["app"];
$getcurrent = $_GET["current1"];
$getjobid = $_GET["jobid"];

$_SESSION["name"] = $getname;
$_SESSION["lastname"] = $getlastname;
$_SESSION["email"] = $getemail;
$_SESSION["phone"] = $getphone;
$_SESSION["app"] = $getapp;
$_SESSION["current1"] = $getcurrent;
$_SESSION["jobid"] = $getjobid;
	
	$body1 = file_get_contents('email-resume.html');
	$body1 = str_replace('%showfristname%', $getname, $body1); 
	$body1 = str_replace('%showlastname%', $getlastname, $body1); 
	


require '../phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

require('../../db/connectmailserver.php');


$mail->setFrom('contact@theimastermind.com', 'TheiMastermind');
$mail->addAddress($getemail, 'User');     // Add a recipient
													           // Name is optional
$mail->addReplyTo('contact@theimastermind.com', 'TheiMastermind');



$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Thank you for your Message. - TheiMastermind';
$mail->Body = $body1;
$mail->AltBody = 'We have now received your message.  Your message is being verified. We will contact you back shortly. ';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo $getcurrent;
    echo "<script>window.location = 'sendmail-createresume-toback.php'</script>";
}

?>