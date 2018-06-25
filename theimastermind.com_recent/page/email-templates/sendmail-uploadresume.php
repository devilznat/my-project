<?php
session_start();
require('../../db/connect.php');

$emailsend = $_SESSION["emailunj"];
$showname = $_SESSION["firstnameunj"];
$showlastname = $_SESSION["lastnameunj"];

	
	$body1 = file_get_contents('email-resume.html');
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
$mail->AltBody = 'We have now received your message.  Your message is being verified. We will contact you back shortly. ';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    // print_r($_SESSION);
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo "<script>window.location = 'sendmail-uploadresume-toback.php'</script>";
}

?>