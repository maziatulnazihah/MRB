<head>
Welcome
<?php

echo $_POST ["username"];

?>
<br>
<?php

$servername = "localhost";
$s_username = "admin";
$s_password = "mai123";
$db_name ="recipe book";

$conn = new mysqli($servername, $s_username, $s_password, $db_name);
if ($conn -> connect_error){
	die ("connection failed:" . $conn ->connect_error);
}

echo ("Connection Successful.");

$username = $_POST ["username"];
$password = $_POST ["password"];

$sql="SELECT username, password from  manage user info where username='$username' and password= '$password'";
$result = $conn -> query ($sql);
$row_count=$result->num_rows;

if ($row_count>0){
	//while
	$row=$result-> fetch_assoc();
	echo "<br> Email: ".$row["email"]. "<br>";
}
else{
	echo "No Data";
	
}



?>
</html>
</head>