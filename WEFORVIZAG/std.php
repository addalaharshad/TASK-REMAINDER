<table border="1">
	<tr>
		<th>id</th>
		<th>name</th>
		<th>course</th>
	</tr>

<?php

$servername ="localhost";
$username = "root";
$password = "root";
$dbname = "weforvizag";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
	die("connection failed");
}

$query="select s.id,s.name,c.cat_name from student s,category c where s.id=c.sid";
$result=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($result))
{
	?>
	<tr>
		<td><?php echo $row['id']?></td>
		<td><?php echo $row['name']?></td>
		<td><?php echo $row['cat_name']?></td>
    </tr>
    <?php
}
?>
