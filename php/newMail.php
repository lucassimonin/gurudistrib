<?php

require '../vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

if($_SERVER['REQUEST_METHOD'] == "POST") {
	$mail = new PHPMailer();  // Cree un nouvel objet PHPMailer
	$mail->isSMTP();
	$mail->SMTPDebug = 0;  // debogage: 1 = Erreurs et messages, 2 = messages seulement
	$mail->SMTPAuth = true;  // Authentification SMTP active
	$mail->SMTPSecure = 'ssl'; // Gmail REQUIERT Le transfert securise
	$mail->Host = 'smtp.gmail.com';
	$mail->Port = 465;
	$mail->Username = 'momar.gurubeer@gmail.com';
	$mail->Password = 'MDPstewart7';
	$mail->From = $_POST['email'];
	$mail->FromName = $_POST['firstname'];
	$mail->Subject = $_POST['subject'];
	$mail->Body = $_POST['body'] . "\n" . $_POST['email'];
	$mail->AddAddress('momar.diop1@gmail.com');

	if(!$mail->send()) {
		echo 'Message could not be sent.';
		echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
		echo 'Message has been sent';
	}
}
?>
