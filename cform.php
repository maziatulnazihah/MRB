<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "mrb";	
				$s_id = $_GET['ID'];




				// Create connection
				$conn = mysqli_connect("localhost", "root", "", "mrb");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}

				//sql to update a record
				$sql = "SELECT * FROM serving WHERE s_id = $s_id";
				$result = mysqli_query($conn,$sql);

				if(mysqli_num_rows($result)> 0){
					//output data of each rows
					$row = mysqli_fetch_assoc($result);
					
				}else{
					echo"0 result";
				}

				?>

<!DOCTYPE html>

<html>
	<head>
	<title>Calorie</title>
	<link rel="stylesheet" href="style1.css">
	</head>
	<body>
		<style>header{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(262.jpg);
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
					
			<div class = "main">
		<ul>
		<li class="active"><a href= "http://localhost/tutorial/homepage.php">Homepage</a></li>
		 <li><a href= "http://localhost/tutorial/cont.php">Contact us</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.php">Log out</a></li>
		 </ul>
		</div>
		
		<br><br><br>
		<form action="c3.php?ID=<?php echo $s_id;?>" method="POST">
			<div class="login-box">
					<h1><center>Food Calorie</center></h1>
		
		
			<table>
			
					<tr>
					<td>Food Name: </td>
					<td>
					<textarea cols="20" rows="1"input type="text" placeholder="food name"name="foodN"><?php echo $row ['foodN'];?></textarea><br>
					</td>

					</tr>
					<tr>
					<td>Serving(s):</td>
					<td>
					<textarea cols="20" rows="1"input type="number"
					placeholder="serving(s)" name="s_size"><?php echo $row ['s_size'];?></textarea><br>
					</td>
					</tr>

					<tr>
					<td>Calories:</td>
					<td>
					<textarea cols="20" rows="1" input type="number" placeholder="gram" name="calories"><?php echo $row ['calories'];?></textarea>
					</td>
					</tr>

					<tr>
					<td>Sugars:</td>
					<td>
					<textarea cols="20" rows="1"input type="number"
					placeholder="grams" name="sugars"><?php echo $row ['sugars'];?></textarea><br>
					</td>
					</tr>

					<tr>
					<td>Total Fat:</td>
					<td>
					<textarea cols="20" rows="1"input type="number"
					placeholder="grams" name="t_fat"><?php echo $row ['t_fat'];?></textarea><br>
					</td>
					</tr>
					<tr>
			<table>
			
			<br>
		
			<center>

								<input type="submit" class="btn" name="insert" value="SAVE">
								<a href="http://localhost/tutorial/c1.php"><input type="button" class="btn" value="CANCEL"></a>
							
							
				</center>
			</body>
