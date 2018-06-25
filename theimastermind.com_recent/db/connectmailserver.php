<?

// $mail->isSMTP();                                      // Set mailer to use SMTP
// $mail->Host = '150.95.24.83';  // Specify main and backup SMTP servers
// $mail->SMTPAuth = true;                               // Enable SMTP authentication
// $mail->Username = 'contact@theimastermind.com';                 // SMTP username
// $mail->Password = 'Test1234';                           // SMTP password
// $mail->SMTPSecure = 'TLS';                            // Enable TLS encryption, `ssl` also accepted
// $mail->Port = 25;                                    // TCP port to connect to


$mail->isSMTP();
$mail->CharSet = "utf-8";
// $mail->SMTPDebug  = 2;
$mail->Host       = "mail.theimastermind.com";
$mail->Port       = 587;
// $mail->SMTPSecure = "tls";

$mail->SMTPSecure = false;
$mail->SMTPAutoTLS = false;

$mail->SMTPAuth   = true;
$mail->Username   = "contact@theimastermind.com";
$mail->Password   = "Test1234";

// $mail->isSMTP();
// $mail->SMTPDebug  = 2;
// $mail->Host       = "mail.theimastermind.com";
// $mail->Port       = "25";
// $mail->SMTPSecure = "tls";
// $mail->SMTPAuth   = true;
// $mail->Username   = "contact@theimastermind.com";
// $mail->Password   = "Test1234";


?>