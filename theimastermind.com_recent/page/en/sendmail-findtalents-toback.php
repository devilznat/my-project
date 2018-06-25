<?php
session_start();
require('../../db/connect.php');



$emailsend="contact@theimastermind.com";
$showname = $_SESSION["nameft"];
$showphone = $_SESSION["phoneft"];
$showcountry = $_SESSION["countryft"];
$showposittion = $_SESSION["posittionft"];
$showmessage = $_SESSION["messageft"];
$showemail = $_SESSION["emailft"];



	
	$body1 = file_get_contents('../email-templates/email-findtalents-toback.html');
	$body1 = str_replace('%showname%', $showname, $body1); 
	$body1 = str_replace('%showphone%', $showphone, $body1); 
	$body1 = str_replace('%showcountry%', $showcountry, $body1); 
	$body1 = str_replace('%showposittion%', $showposittion, $body1); 
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

$mail->Subject = 'Welcome to TheiMastermind.com';
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

unset($_SESSION["nameft"]);
unset($_SESSION["phoneft"]);
unset($_SESSION["countryft"]);
unset($_SESSION["posittionft"]);
unset($_SESSION["messageft"]);
unset($_SESSION["emailft"]);


?>