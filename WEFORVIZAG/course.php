<?php  

$servername ="localhost";
$username = "root";
$password = "root";
$dbname = "weforvizag";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$cname = $_POST["coursename"];
$stid = $_POST["sid"];

$sql = "INSERT INTO category (cat_name,sid) 
VALUES ('$cname','$stid')";

if($conn->query($sql) === TRUE){
	?>
	<script>
		alert('You are Enrolled');
	</script>
	<?php
	header("Location:std.php");
}
else{
	?>
	<script>
		alert('You are not Enrolled');
	</script>
	<?php
}
?>