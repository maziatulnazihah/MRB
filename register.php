<html>
<head>

Welcome to MY RECIPE BOOK !!!

<?php


	session_start();
	
	//connect to database
	$db= mysqli_connect("localhost","root","", "authetication");
	
	if(isset($_POST['Register.btn'])){
		$s_username=mysql_real_escape_string($_POST['username']);
		$s_password=mysql_real_escape_string($_POST['password']);
		$password2=mysql_real_escape_string($_POST['password2']);
		$email=mysql_real_escape_string($_POST['email']);
		$s_birthDate=mysql_real_escape_string($_POST['birthDate']);
		$s_gender=mysql_real_escape_string($_POST['gender']);
		
		
		
		if($password == $password2){
			//create user
			$password=md5($s_password);
			$sql = "INSERT INTO users(username, password, email, birthDate, gender) VALUES ('$s_username','$s_password','$Email','$birthDate','$gender')";
			
			mysqli_query($db,$sql);
			$_SESSION['message']="You are now logged in";
			$_SESSION['username']=$s_username;
			
			
			header("location:register.php");
			
		}
		 else{
			$_SESSION['message']="The two password do not match"; 
		 }
	}
?>
</html>
</head>	