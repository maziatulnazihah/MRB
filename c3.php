<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrb";
$s_id = $_GET['ID'];
$foodN = $_POST['foodN'];
$s_size = $_POST['s_size'];
$calories = $_POST['calories'];
$sugars = $_POST['sugars'];
$t_fat = $_POST['t_fat'];
 //echo $title;
 //echo $foodN;
 
// Create connection
$conn = mysqli_connect("localhost", "root", "", "mrb");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//sql to update a record
$sql = "UPDATE serving SET s_size= $s_size, calories= $calories, sugars = $sugars, t_fat= $t_fat, foodN= '$foodN' WHERE s_id = $s_id";

if(mysqli_query($conn,$sql)){
echo "<script type='text/javascript'>alert('New Record successfully inserted !');</script>";
header ("Location:http://localhost/tutorial/c1.php");


}else{
echo"Error updating record:".mysqli_error($conn);
}
?>
