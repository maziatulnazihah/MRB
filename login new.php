<?php include('server.php')?>
<!DOCTYPE html>
<html>
	<head>
	
		<title>My Recipe Book Login </title>
		<link rel="stylesheet" href="style1.css">
	
	
	<body>
	
	<style>
		*{
		margin: 0;
		padding: 0;
		font-family: verdana;
		}
		
		header{
		background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(48.jpg);
		height: 100vh;
		background-size: cover;
		background-position: center;
		}
		
		.login-box{
		width: 287px;
		background: rgb(1,1,1,0.5);
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		color:White;
		
		
		}
		.login-box h1{
		float: left;
		font-size: 40px;
		font-weight: bold;
		border-bottom:8px solid #010101;
		margin-bottom: 10px;
		padding: 13px 0;
		}
		
		.text h3{
		font-weight: none;
		font-size: 20px;
		color: white;
		}
		
		.textbox{
		width: 100%;
		overflow: hidden;
		padding: 10px 0;
		margin: 10px 0;
		border-bottom: 1px solid #010101;
		}
		
		.textbox i{
		width: 24px;
		float: left;
		text-align: center;
		}
		
		.textbox input{
		border: none;
		outline: none;
		background: none;
		font-size: 15px;
		width: 80px;
		float: left;
		margin: 0 10px;
		color: white;
		}
		
		.btn{
		width: 100%;
		background: black;
		border: none;
		padding: 5px;
		font-size: 18px;
		cursor: pointer;
		color:#fff;
		text-decoration: none;
		transition: 0.6s ease;
		align: center;
		}
		
		.btn:hover{
		background-color:#fff;
		color:#000;
			}
			
		</style>
		
		
		<header>
			
			
	
	<div class="login-box">
		<h1>MY RECIPE BOOK</h1>
			
	
	<font color="white">	
	<div class="text">
		<h3>Welcome, please login to your account</h3>
		
	<form method='post' action='login1.php'>
	<?php include('errors.php');?>
	
	<div class="textbox">
		<input type="text" placeholder="username" name="" value="">
	</div>
	

	<div class="textbox">
		<input type="password" placeholder="password" name="" value="">
	</div>
		
	<div class="btn">
		<center><a href= "login new.php"class="btn">Sign in</a></center>
	</div>
	
	
	
	
	 Forgot your password?
	 <a href="register form.php">
	 <font color="blue">Sign Up</font>
	 </a>
	 </header>
	 </body>
	</head>
	
	</html>