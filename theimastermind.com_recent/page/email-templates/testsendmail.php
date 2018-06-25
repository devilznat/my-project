<?
require_once '../phpmailer/PHPMailerAutoload.php';
 
$results_messages = array();
 
$mail = new PHPMailer(true);
$mail->CharSet = 'utf-8';
 
class phpmailerAppException extends phpmailerException {}
 
try {
$to = 'nuthakulnuthep@gmail.com';
if(!PHPMailer::validateAddress($to)) {
  throw new phpmailerAppException("Email address " . $to . " is invalid -- aborting!");
}
$mail->isSMTP();
$mail->SMTPDebug  = 2;
$mail->Host       = "mail.theimastermind.com";
$mail->Port       = "587";
$mail->SMTPSecure = "tls";
$mail->SMTPAuth   = true;
$mail->Username   = "contact@theimastermind.com";
$mail->Password   = "Test1234";
$mail->addReplyTo("contact@theimastermind.com", "theimaster");
$mail->From       = "contact@theimastermind.com";
$mail->FromName   = "theimaster";
$mail->addAddress("nuthakulnuthep@gmail.com", "contact");
$mail->Subject  = "test(PHPMailer test using SMTP)";
$body = <<<'EOT'
ddsksdjkskdjdsjkj
EOT;
$mail->WordWrap = 80;
$mail->msgHTML($body, dirname(__FILE__), true); //Create message bodies and embed images

 
try {
  $mail->send();
  $results_messages[] = "Message has been sent using SMTP";
}
catch (phpmailerException $e) {
  throw new phpmailerAppException('Unable to send to: ' . $to. ': '.$e->getMessage());
}
}
catch (phpmailerAppException $e) {
  $results_messages[] = $e->errorMessage();
}
 
if (count($results_messages) > 0) {
  echo "<h2>Run results</h2>\n";
  echo "<ul>\n";
foreach ($results_messages as $result) {
  echo "<li>$result</li>\n";
}
echo "</ul>\n";
}

?>