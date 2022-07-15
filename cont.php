<!DOCTYPE html>

<html>
	<head>
	<title>Contact Us</title>
	<link rel="stylesheet" href="style1.css">
	</head>
	<body>
		<style>header{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(45.jpg);
			height: 160vh;
			background-size: 1500px 1250px;
			background-position: center;
			}
			
			ul{
			float:left;
			list-style-type:none;
			}
			
			ul li{
			display: inline-block;
			}
			
			ul li a{
			text-decoration: none;
			color: #fff;
			padding: 5px 20px;
			border: 1px solid #fff;
			transition: 0.6s ease;
			}
			
			ul li a:hover{
			background-color:#fff;
			color:#000;
			}
			
			u li.active a{
			background-color:#fff;
			color:#000;
			}
			
			.main{
			max-width: 1200px;
			margin: auto;
			}
			
			h1{
				text-align: center;
				font-size: 50px;
				color: #fff;
				font-weight: bold;
			}
			
			h3{
			text-align: center;
				font-size: 30px;
				color: #fff;
				}
				
		.login-box{
		width: 350px;
		background: rgb(1,1,1,0.5);
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%,-50%);
		box-sizing: border-box;
		color:White;
		
		
		}
		.login-box h1{
		float: center;
		font-size: 40px;
		font-weight: bold;
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
			border: none;
			background: #fff;
			padding: 5px 13px;
			color:#000;
			transition: 0.6s ease;
			text-decoration: none;
			}
			
		.btn:hover{
			background-color:#FE51B9;
			color:#000;
			}
			
			</style>
			
					<header>
					
			<div class = "main">
		<ul>
		<li class="active"><a href= "http://localhost/tutorial/homepage.php">Homepage</a></li>
		<li class="active"><a href= "http://localhost/tutorial/about.php">About</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.php">Log out</a></li>
		 </ul>
		</div>
		
		<br><br><br>
		<form action ="cont1.php" method = "POST">
		
			<div class="login-box">
			<h1><center>Contact Us</center></h1>
			<table>
			
				<tr>
						<td>Name:</td>
						<td>
							<input type="text"name="name"
							placeholder="Your Name">
						</td>
					
					
					</tr>
		
	

			
					<tr>
						<td>Email:</td>
						<td>
							<input type="text"name="email"
							placeholder="example@example.com">
						</td>
					
					
					</tr>
					
					<tr>
						<td>Message:</td>
						<td>
						<textarea cols="27" rows="8"input type="text"
						placeholder="Message" name="message"></textarea><br>
						</td>
					</tr>
						
			<table>
			<br>
			<center>
				<input type="submit" class="btn" name="insert" value="SAVE">
				<a href="http://localhost/tutorial/homepage.php"><input type="button" class="btn" value="CANCEL"></a>
			</center>
			<br><br>
			</body>
		</form>
	<html>
		