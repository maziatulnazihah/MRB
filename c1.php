<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel = "stylesheet" href = "">
		<title>Calorie</title>
	</head>
	
	<body>
	<style>
			*{
			margin: 0;
			padding: 0;
			font-family: verdana;
			}
			
			header{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(263.jpg);
			height: 190vh;
			background-size: 1600px 1250px;
			background-position: center;
			}
			
			ul{
			float: left;
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
			background-color:#FF085D;
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
			
			.box{
			position: relative;
			max-width: 600px;
			padding: 50px;
			background: rgba(255,255,255,.8);
			box-shadow: 0 5px 15px rgba(0,0,0,.5);
			
		}

		.box h2{
			margin: 0 0 20 px;
			padding: 0;
			font-size: 48px;
			text-transform: uppercase; 
			color: #000;
		}

		.box p{
			margin: 0 0 20px;
			padding: 0;
			font-size: 18px;
			color: #000;
		}
		
		.btn{
			border: none;
			background: #000;
			padding: 5px 13px;
			color:#fff;
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
		<br>
		<ul>
		<li class="active"><a href= "http://localhost/tutorial/homepage.php">Homepage</a></li>
		 <li><a href= "http://localhost/tutorial/cont.php">Contact us</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.php">Log out</a></li>
		 </ul>
		</div>
		
		<br><br><br><br><br><br>
		<center>
		<div class="box">
				<h2>Calorie</h2>
				<br><br>
				<table border= "1px">
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "mrb";
				//$username = $_session['username'];
				
				//create connection
				$conn = mysqli_connect("localhost", "root", "", "mrb");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				
				$sql = "SELECT * FROM serving";
				$result = mysqli_query($conn,$sql);
				
				echo "<tr><th>food name</th><th>serving size</th><th>calories</th><th>sugar</th><th>total fat</th><th>Action</th></tr>	";
				if(mysqli_num_rows($result)>0){
					//output each row
					while($row = mysqli_fetch_assoc($result)){
						 echo "<tr><td>" . $row["foodN"]."</td><td>". $row["s_size"]."</td><td>" .$row["calories"]. "</td><td>" .$row["sugars"]. "</t><td>". $row["t_fat"]."</td><td>";
						 echo"<a href=\"c2.php?ID=".$row["s_id"]."\">DELETE</a><br>";
						  echo"<a href=\"cform.php?ID=".$row["s_id"]."\">EDIT</a></td></tr>";
						} 
						
				}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>
				
					
				</table>
				
				<br><br>
			<br><br>
			
				<a href="http://localhost/tutorial/calorie.php"><input type="button" class="btn" value="BACK"></a>
				<a href="http://localhost/tutorial/homepage.php"><input type="button" class="btn" value="CANCEL"></a>
		</div>
		
		</center>
		</header>
		
	</body>
