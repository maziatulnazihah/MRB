<?php

//first get the post variables on the page
$name=$_POST['name'];
$roll_no=$_POST['roll_no'];
$age=$_POST['age'];
$class=$_POST['class'];
$gender=$_POST['gender'];

$con=mysql_connect("localhost","root","");

if(!$con){
	die('could not connect:'.mysql_error());
	
}

mysql_select_db("demo",$con);

$query="INSERT INTO details(student_name, roll_no, age, class, gender) VALUES('$name', '$roll_no', '$age', '$class','$gender')";
if(!mysql_query($query,$con)){
	die('Error in inserting records'.mysql_error);
}else{
	echo"Data Inserted";
}


?>