<?php
if(!class_exists('PHPMailer')) 
{
    require('D:/wamp64/www/B-for-Bark/PHPMailer_5.2.0/class.phpmailer.php');
	require('D:/wamp64/www/B-for-Bark/PHPMailer_5.2.0/class.smtp.php');
}

require_once("mail_configuration.php");

$mail = new PHPMailer();

$emailBody = "<p><h3>Dear " . $user["Name"] . ",<h3></p><br><br><p>Your password is<br>". $user["Password"] . "<br><br></p>Regards,<br> B for BARK<br>Thanks";

$mail->IsSMTP();
$mail->SMTPDebug = 0;
$mail->SMTPAuth = TRUE;
$mail->SMTPSecure = "tls";
$mail->Port     = PORT;  
$mail->Username = MAIL_USERNAME;
$mail->Password = MAIL_PASSWORD;
$mail->Host     = MAIL_HOST;
$mail->Mailer   = MAILER;
$mail->SetFrom(SERDER_EMAIL, SENDER_NAME);
$mail->AddReplyTo(SERDER_EMAIL, SENDER_NAME);
$mail->ReturnPath=SERDER_EMAIL;	
$mail->AddAddress($user["Email"]);
$mail->Subject = "Forgot Password Recovery";		
$mail->MsgHTML($emailBody);
$mail->IsHTML(true);

if(!$mail->Send()) 
{
	$error_message = '<p style="color:red;">ERROR : Problem in Sending Password Recovery Email</p>';
} 
else
 {
	$success_message = '<p style="color:blue;">Please check your email to reset password!</p>';
}

?>
