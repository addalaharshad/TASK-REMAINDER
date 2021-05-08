<?php
if(isset($_POST['ok']))
{
	$mobileno=$_POST['mno'];
	$msg=$_POST['msg'];

	
	$username = "harshadips12@gmail.com";
	$hash = "103e387414d0db86c488f7dc6720c7f462b0c06bbbd82cb0a1225bda00bb4455";

	
	$test = "0";

	
	$sender = "TXTLCL"; 
	$numbers = "$mobileno"; 
	$message = "$msg";
	
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); 
	curl_close($ch);
}
?>