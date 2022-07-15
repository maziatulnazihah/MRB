<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrb";	
$c_id = $_GET['ID'];


// Create connection
$conn = mysqli_connect("localhost", "root", "", "mrb");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//sql to delete a record
$sql = "DELETE FROM tips WHERE c_id = $c_id";

if(mysqli_query($conn,$sql)){
	echo "Record deleted successfully !";
	header ("Location:http://localhost/tutorial/ct.php");
	
}else{
	echo"Error deleting record:".mysqli_error($conn);
}
?>

