<?php

require_once('PHPMailer/_lib/class.phpmailer.php');




function smtpMailer($to, $from, $from_name, $subject, $body) {
	$mail = new PHPMailer();  // Cree un nouvel objet PHPMailer
	$mail->IsSMTP(); // active SMTP
	$mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
	$mail->SMTPAuth = true;  // Authentification SMTP active
	$mail->SMTPSecure = 'ssl'; // Gmail REQUIERT Le transfert securise
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = 'momar.gurubeer@gmail.com';
	$mail->Password = 'MDPstewart7';
	$mail->From = $from;
	$mail->FromName = $from_name;
$mail->Subject = $subject;
$mail->Body = $body;
$mail->AddAddress($to);
if(!$mail->Send()) {
		return 'Mail error: '.$mail->ErrorInfo;
	} else {
	return true;
	}
}

?>
