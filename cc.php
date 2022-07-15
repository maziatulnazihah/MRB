
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
$account =$_POST['account'] ;

// Create connection
$conn = mysqli_connect("localhost", "root", "", "mrb");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//else echo "Success";
//insert
if(isset($_POST['insert'])){

$sql = "INSERT INTO mcr(categories, title, ingredients, duration, steps, serving, photo, user) VALUES ('$categories','$title','$ingredients','$duration','$steps','$serving','$photo','$account')";

$result=mysqli_query($conn, $sql);

if(mysqli_affected_rows($conn)>0){

echo "<script type='text/javascript'>alert('New Record successfully inserted !');</script>";
}
else
{
echo "<script type='text/javascript'>alert('Data are not inserted !');</script>";
}
}


//delete
if(isset($_POST['delete'])) {

$dsql = "DELETE FROM mcr WHERE r_id=42";

$dresult = mysqli_query($conn, $dsql);

if(mysqli_affected_rows($conn)>0) {

echo "<script type='text/javascript'>alert('Record deleted successfully !');</script>";
} else {

echo "<script type='text/javascript'>alert('Record are not deleted');</script>";
}
}


//update
if(isset($_POST['update'])){

$usql = "UPDATE mcr SET title='brownis'WHERE r_id =37";

$uresult = mysqli_query($conn, $usql);

if (mysqli_affected_rows($conn)>0)  {

echo "<script type='text/javascript'>alert('Record updated successfully!');</script>";

} else {
   
echo "<script type='text/javascript'>alert('Record are not updated');</script>";
}

}

//view
if(isset($_POST['view'])){


$vsql = "SELECT r_id, categories, title, ingredients, duration, steps, serving, photo, user FROM mcr";
    $vresult = mysqli_query($conn, $vsql);

if (mysqli_num_rows($vresult) < 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($vresult)) {
        echo "id: " . $row["r_id"].     "categories: " . $row["categories"].     "title: " . $row["title"]."ingredients:" .$row["ingredients"]. "duration:" .$row["duration"]. "steps:". $row["steps"]."serving:". $row["serving"]."photo:".$row["photo"]."user:". $row[""]."<br>";
    }
} else {
    echo "0 results";
}
}


mysqli_close($conn);

?>