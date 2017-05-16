<?php

require_once('sendmail.php');



	if($_SERVER['REQUEST_METHOD'] == "POST")

	{
		$result = smtpmailer('momar.diop1@gmail.com', $_POST['email'], $_POST['firstname'], $_POST['subject'], $_POST['body'] . "\n" . $_POST['email']);
                if (true !== $result)
		{
			echo $result;
		} else {
			echo "en cours d'envoi";
		}
	}
?>
