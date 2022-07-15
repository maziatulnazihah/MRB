<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrb";	
$r_id = $_GET['ID'];


// Create connection
$conn = mysqli_connect("localhost", "root", "", "mrb");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//sql to delete a record
$sql = "DELETE FROM mcr WHERE r_id = $r_id";

if(mysqli_query($conn,$sql)){
	echo "Record deleted successfully !";
	header ("Location:http://localhost/tutorial/v1.php");
	
}else{
	echo"Error deleting record:".mysqli_error($conn);
}

?>