<?php

if (isset($_POST['submit'])) {
	$firstName = $_POST['name1'];
	$lastName = $_POST['name2'];
	$subject = $_POST['subject'];
	$phone = $_POST['phone'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = "Valeria_Felder@outlook.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have received a form submission from ".$firstName." ".$lastName.".\n\n".$message;

	mail($mailTo, "Website Form Submission", $txt, $headers);

	header("Location: index.html?mailsend");
}

?>