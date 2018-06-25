<?php
session_start();
require('../../db/connect.php');



$showname = $_GET["firstname"];
$showlastname = $_GET["lastname"];
$emailsend = $_GET["email"];


// $_GET["subject"];



$_SESSION["firstnamerf"] = $_GET["firstname"];
$_SESSION["lastnamerf"] = $_GET["lastname"];
$_SESSION["phonerf"] = $_GET["phone"];
$_SESSION["companyrf"] = $_GET["comname"];
$_SESSION["messagerf"] = $_GET["message"];
$_SESSION["namejobrf"] = $_GET["jobtitle"];
$_SESSION["emailrf"] = $_GET["email"];
$_SESSION["jobidrf"] = $_GET["jobid"];


	
	$body1 = file_get_contents('email-referralfriend.html');
	$body1 = str_replace('%showfristname%', $showname, $body1); 
	$body1 = str_replace('%showlastname%', $showlastname, $body1); 

	
	


require '../phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

require('../../db/connectmailserver.php');


$mail->setFrom('contact@theimastermind.com', 'TheiMastermind');
$mail->addAddress($emailsend, 'User');     // Add a recipient
													           // Name is optional
$mail->addReplyTo('contact@theimastermind.com', 'TheiMastermind');



$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Thank you for your Message. - TheiMastermind';
$mail->Body = $body1;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo "<script>window.location = 'sendmail-referralfriend-toback.php'</script>";
}

?>