<html>
<body>
Welcome
<?php

echo $_POST["username"];
?>

<br>

<?php
$servername = "localhost";
$s_username = "mnazihah";
$s_password = "mai123";
$db_name = "recipe";

$conn = new mysqli($servername, $s_username, $s_password, $db_name);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
	
}

echo ("Your connection are successful!");

$username= $_POST["username"];
$password=$_POST["password"];  


$sql="SELECT username, pasword, emailAdd FROM recipe where username = '$username' and pasword = '$pasword'";
$result = $conn->query ($sql);
$row_count=$result->num_rows;


if ($row_count>0){
	$row=$result->fetch_assoc();
	echo "<br> Email: ". $row["emailAdd"]."<br>";
}

else  {
	echo "No Data";
}





?>
</body>
</html>