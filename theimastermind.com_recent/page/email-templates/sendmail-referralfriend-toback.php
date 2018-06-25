<?php
session_start();
require('../../db/connect.php');



$emailsend="contact@theimastermind.com";
$showfristname= $_SESSION["firstnamerf"];
$showlastname= $_SESSION["lastnamerf"];
$showphone = $_SESSION["phonerf"];
$showcompany = $_SESSION["companyrf"];

$showmessage = $_SESSION["messagerf"];
$showjobrefer = $_SESSION["namejobrf"];
$showemail =$_SESSION["emailrf"];

$idjob = $_SESSION["jobidrf"];


$sqljob = mysql_query("SELECT * FROM jobs_value WHERE language_code = 'en' AND job_id = '$idjob' " );
$loadjob = mysql_fetch_array($sqljob);

$showjobid = "<a href=\"http://theimastermind.com/page/en/job-view?id=".$loadjob[id]."\">".$_SESSION["jobidrf"]."</a>\n";

	
	$body1 = file_get_contents('email-referralfriend-toback.html');
	$body1 = str_replace('%showfristname%', $showfristname, $body1); 
	$body1 = str_replace('%showlastname%', $showlastname, $body1); 
	$body1 = str_replace('%showphone%', $showphone, $body1);
	$body1 = str_replace('%showcompany%', $showcompany, $body1);
	$body1 = str_replace('%showjobid%', $showjobid, $body1);
	$body1 = str_replace('%showmessage%', $showmessage, $body1);
	$body1 = str_replace('%showjobrefer%', $showjobrefer, $body1);
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

$mail->Subject = 'Thank you for your Message. - TheiMastermind';
$mail->Body = $body1;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo "<script>window.location = '../en/referral-friend.php'</script>";
}

?>