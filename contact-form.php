<?php
	if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$subject= $_POST['subject'];
	$mailFrom= $_POST['mail'];
	$message = $_POST['message'];
	
	$mailTo = 'b2stdv@gmail.com';
	$headers = "From: ".$mailFrom;
	$txt = "You have recevied an e-mail from ".$name."\n\n".$message;

	
	mail($mailTo, $subject, $txt, $headers);
	header("Location: index.php?mailsnd");
}

