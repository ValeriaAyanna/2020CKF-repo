<?php

	if($_POST["submit"]) {
		$recipient="valeria_felder@outlook.com";
		$subject="Website Contact Form Submission";
		$firstname=$_POST["firstname"];
		$lastname=$_POST["lastname"];

		$senderEmail=$_POST["senderEmail"];

		$message=$_POST["contactMessage"];

			$mailBody="Name:
			$sender\nEmail:
			$senderEmail\n\n$contactMessage";

			mail($recipient,$subject, $mailBody, "From: $firstname " " $lastname <$senderEmail>");

			$thankYou="<p>Thank you! Your message has been sent. </p>";
	}

?>