<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mrb";
//$r_id =$_POST['r_id'];
$categories =$_POST['categories'];
$title = $_POST['title'];
$ingredients =$_POST['ingredients'];
$duration =$_POST['duration'];
$steps = $_POST['steps'];
$serving =$_POST['serving'];
//$photo = $_POST['file'];
$origin =$_POST['origin'] ;

// Create connection
$conn = mysqli_connect("localhost", "root", "", "mrb");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//else echo "Success";
//insert
if(isset($_POST['insert'])){

$photo = $_FILES['file']['name'];
$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);

  // Select file type
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

  // Valid file extensions
$extensions_arr = array("jpg","jpeg","png","gif");
 // Check extension
  if( in_array($imageFileType,$extensions_arr) ){
 
     // Insert record
	 $sql = "INSERT INTO mcr(categories, title, ingredients, duration, steps, serving, photo, origin) VALUES ('$categories','$title','$ingredients','$duration','$steps','$serving','$photo','$origin')";

$result=mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)>0){

$result=mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn)>0){

			echo "Record Added successfully !";
			header ("Location:http://localhost/tutorial/v1.php");
			}
			else
			{
			echo"Error adding record:".mysqli_error($conn);
			}

			}

  
			// Upload file
			move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$photo);


}
}


?>