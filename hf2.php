<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel = "stylesheet" href = "">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
		<title>Edit</title>
	</head>
	<body>
	<style>
		 *{
			margin: 0;
			padding: 0;
			font-family: verdana;
			}
			
			header{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(218.jpg);
			height: auto;
			background-size: auto;
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
			max-width: auto;
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
			max-width: 700px;
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
				<h2>Recipe</h2>
				<br><br>
				<table border= "1px">
				<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "mrb";
				//$username = $_session['username'];
				$r_id = $_GET['ID'];
				
				//create connection
				$conn = mysqli_connect("localhost", "root", "", "mrb");
				// Check connection
				if (!$conn) {
					die("Connection failed: " . mysqli_connect_error());
				}
				$sql = "SELECT * FROM mcr WHERE categories = 'healthy food'";
				
				$sql = "SELECT * FROM mcr WHERE r_id = $r_id"; 
				//$sql = "SELECT * FROM mcr";
				$result = mysqli_query($conn,$sql);
				
				echo "<tr><th>IMAGE</th><th>TITLE</th><th>DURATION</th><th>SERVING</th><th>ACTION</th></tr>	";


			if(mysqli_num_rows($result)>0){
					//output each row
					while($row = mysqli_fetch_assoc($result)){
						$image = $row['photo'];
                        $image_src = "image/".$image;
							 echo "<tr><td><img src=".$image_src." width='80' height='80' ></td>";
							 echo "<td>" . $row["title"]."</td><td>" .$row["duration"]. "</td><td>". $row["serving"]."</td><td>";
							  echo"<a href=\"delete.php?ID=".$row["r_id"]."\">DELETE</a><br>";
							  echo"<a href=\"updateform.php?ID=".$row["r_id"]."\">UPDATE</a></br>";
							  
						} 	
				}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>
				
					
				</table>
				<br><br>
				<a href="http://localhost/tutorial/hf.php"><input type="button" class="btn" value="BACK"></a>
				<a href="http://localhost/tutorial/Meals.php"><input type="button" class="btn" value="CANCEL"></a>
		</div>
		
		</center>
		
		</header>
		
	</body>
</html>