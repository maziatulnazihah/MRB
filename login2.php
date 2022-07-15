<?php
$conn = mysqli_connect("localhost","root","","CodeFlix");

if(isset($_POST["submit"]))
{
	$uname = $_POST["uname"];
	$pass = $_POST["pass"];
	
	$sql = mysqli_query($conn."SELECT count(*) as total from Login where username = '".$uname."' and password = '".$pass."'") or die(mysqli_error($conn));
	
	$rw = mysqli_fetch_array($sql);
	
	if($rw['total']>0){
		
		echo"<script>alert('username and password are correct')</script>";
	}else{
		echo"<script>alert('username and password are incorrect')</script>";
	}
}

?>