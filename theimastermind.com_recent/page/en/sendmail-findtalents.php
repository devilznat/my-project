<?php
session_start();
require('../../db/connect.php');



$emailsend=$_SESSION["emailft"];
$showname= $_SESSION["nameft"];



	
	$body1 = file_get_contents('../email-templates/email-contactus.html');
	$body1 = str_replace('%showname%', $showname, $body1); 
	
	


require '../phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

require('../../db/connectmailserver.php');


$mail->setFrom('contact@theimastermind.com', 'TheiMastermind');
$mail->addAddress($emailsend, 'User');     // Add a recipient
													           // Name is optional
$mail->addReplyTo('contact@theimastermind.com', 'TheiMastermind');
$mail->From       = 'contact@theimastermind.com';
$mail->FromName   = 'TheiMastermind';



$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Welcome to theimastermind.com';
$mail->Body = $body1;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo "<script>window.location = 'sendmail-findtalents.php'</script>";
}

?>