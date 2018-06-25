<?php
session_start();
require('../../db/connect.php');



$emailsend="contact@theimastermind.com";
$showname= $_SESSION["firstnamecu"];
$showlastname = $_SESSION["lastnamecu"];
$showphone = $_SESSION["phonecu"];
$showcompany = $_SESSION["companycu"];
$showsubject = $_SESSION["subjectcu"];
$showmessage = $_SESSION["messagecu"]; 
$showemail = $_SESSION["emailcu"];

	$body1 = file_get_contents('../email-templates/email-contactus-toback.html');
	$body1 = str_replace('%showfristname%', $showname, $body1); 
	$body1 = str_replace('%showlastname%', $showlastname, $body1); 
	$body1 = str_replace('%showphone%', $showphone, $body1); 
	$body1 = str_replace('%showcompany%', $showcompany, $body1); 
	$body1 = str_replace('%showsubject%', $showsubject, $body1); 
	$body1 = str_replace('%showmessage%', $showmessage, $body1); 
	$body1 = str_replace('%showemail%', $showemail, $body1);
	


require '../phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

require('../../db/connectmailserver.php');


$mail->setFrom('contact@theimastermind.com', 'TheiMastermind');
$mail->addAddress($emailsend, 'User');     // Add a recipient
													           // Name is optional
$mail->addReplyTo('contact@theimastermind.com', 'TheiMastermind');



$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'You have a new Message from Contact Us - TheiMastermind';
$mail->Body = $body1;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo "<script>window.location = 'contact-us.php'</script>";
}

unset($_SESSION["emailcu"]);
unset($_SESSION["firstnamecu"]);
unset($_SESSION["lastnamecu"]);
unset($_SESSION["phonecu"]);
unset($_SESSION["companycu"]);
unset($_SESSION["subjectcu"]);
unset($_SESSION["messagecu"]);
?>