<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		if(mail("momar.diop1@gmail.com", "Demande de contact!", "User: " . $_POST["firstname"] . " Email: " . $_POST["email"], $headers))
                     echo "Votre message a bien été envoyé. Nous vous recontacterons dès que possible ! ";
                else
                   