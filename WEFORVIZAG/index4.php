<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <form action="send_sms.php" method="post">
    	<label>mobile no</label>
    	<input type="number" name="mno" placeholder="mobile no">

    	<label>message</label>
    	<textarea name="msg"></textarea>

    	<input type="submit" name="ok" value="send">
    </form>
</body>
</html>