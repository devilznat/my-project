<?php
session_start();
require('../../db/connect.php');

$emailsend = "contact@theimastermind.com";
$showemail= $_SESSION["emailuj"];
$showname = $_SESSION["firstnameuj"];
$showlastname = $_SESSION["lastnameuj"];

$showfileresume = $_SESSION["filenameresumeuj"];
$showphone = $_SESSION["phoneuj"];


$idjob = $_SESSION["jobuj"];
$sqljob = mysql_query("SELECT * FROM jobs_value WHERE language_code = 'en' AND id = '$idjob' " );
$loadjob = mysql_fetch_array($sqljob);
$showjobid = "<a href=\"http://theimastermind.com/page/en/job-view?id=".$loadjob[id]."\">".$loadjob["title"]."</a>\n";

$showappliedposition = "  No Position ";
$showcurrentposition = " No Position ";
$showresumefile = "<a href=\"http://theimastermind.com/uploadfile/resume/upload_resume/\n".$showfileresume."\"> Open a file resume</a>\n";
// $showresumefile = $showfileresume;
	
	$body1 = file_get_contents('email-resume-toback.html');
	$body1 = str_replace('%showfristname%', $showname, $body1); 
	$body1 = str_replace('%showlastname%', $showlastname, $body1); 
	$body1 = str_replace('%showemail%', $showemail, $body1);
	$body1 = str_replace('%showphone%', $showphone, $body1);
	$body1 = str_replace('%showappliedposition%', $showappliedposition, $body1);
	$body1 = str_replace('%showcurrentposition%', $showcurrentposition, $body1);
	$body1 = str_replace('%showjobid%', $showjobid, $body1);
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

$mail->Subject = 'You Recieve a new resume - TheiMastermind';
$mail->Body = $body1;
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    // echo "<script>window.location = 'regcom.php'</script>";
    
} else {
    echo 'Message has been sent';
    echo "<script>window.location = '../en/job-list.php'</script>";
}

?>