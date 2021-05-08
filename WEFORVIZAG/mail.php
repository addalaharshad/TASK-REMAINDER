<?php

$to = "harshadips12@gmail.com";
$subject ="response from website";
$message ="i am very happy to introce Remaindo";
$headers ="From: Remaindo";

if(mail($to, $subject, $message, $headers)){
	echo "mail send successfully";
}
else{
	echo "not send";
}
?>