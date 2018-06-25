<?php
session_start();
require('../../db/connect.php');



$emailsend= "contact@theimastermind.com";
$showname= $_SESSION["name"];
$showlastname = $_SESSION["lastname"];
$showphone = $_SESSION["phone"];
$showappliedposition = $_SESSION["app"];
$showcurrentposition = $_SESSION["current1"];
$showemail= $_SESSION["email"];

$idjob = $_SESSION["jobid"];
if ($idjob == 0) {
	$showjobid = "NO Job";
}
else {
	
	$idjob = $_SESSION["jobid"];
	$sqljob = mysql_query("SELECT * FROM jobs_value WHERE language_code = 'en' AND id = '$idjob' " );
	$loadjob = mysql_fetch_array($sqljob);
	$showjobid = "<a href=\"http://theimastermind.com/page/en/job-view?id=".$loadjob[id]."\">".$loadjob["title"]."</a>\n";

}

$showresumefile = "<a href=\"http://theimastermind.com/page/en/resume-preview?idresume=".$_SESSION[idresume]."\"> Open a file resume</a>\n";



	
	$body1 = file_get_contents('email-resume-toback.html');
	$body1 = str_replace('%showfristname%', $showname, $body1); 
	$body1 = str_replace('%showlastname%', $showlastname, $body1); 
	$body1 = str_replace('%showphone%', $showphone, $body1); 
	$body1 = str_replace('%showappliedposition%', $showappliedposition, $body1); 
	$body1 = str_replace('%showcurrentposition%', $showcurrentposition, $body1); 
	$body1 = str_replace('%showjobid%', $showjobid, $body1);
	$body1 = str_replace('%showemail%', $showemail, $body1);
	$body1 = str_replace('%showresumefile%', $showresumefile, $body1);
	


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
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo "<script>window.location = '../en/resume-preview?idresume=".$_SESSION[idresume]."'</script>";

}

unset($_SESSION["emailcu"]);
unset($_SESSION["firstnamer"]);
unset($_SESSION["lastnamer"]);
unset($_SESSION["phoner"]);
unset($_SESSION["applied_position"]);
unset($_SESSION["emailr"]);
unset($_SESSION["current_position"]);

?>