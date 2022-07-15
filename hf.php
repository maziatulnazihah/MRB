<!DOCTYPE html>
<html lang="en">

	<head>
	<link rel="stylesheet" href="style1.css">
	<title>Healthy Food</title>
	</head>
	
	<body>
	<header>
	<style>
		
			
				 *{
			margin: 0;
			padding: 0;
			font-family: sans-serif;
			}
			
			header{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(123.jpg);
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
			height: auto;
			padding: 50px;
			background: rgba(0,0,0,.9);
			box-shadow: 0 5px 15px rgba(0,0,0,.5);
			
		}

		.box h2{
			margin: 0 0 20 px;
			padding: 0;
			font-size: 48px;
			text-transform: uppercase; 
			color: #fff;
			font-weight: bold;
		}

		.box p{
			margin: 0 0 20px;
			padding: 0;
			font-size: 18px;
			color: #fff;
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
			color:#;
		}
		
		.box table{
			color: #fff;
			border: 1px;
		}
			
		
			
	</style>
		
		<div class = "main">
		<br>
		<ul>
		<li class="active"><a href= "http://localhost/tutorial/homepage.html">Homepage</a></li>
		 <li><a href= "http://localhost/tutorial/cont.php">Contact us</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.html">Log out</a></li>
		 </ul>
		</div>
		
		<br><br><br><br><br><br>
		<center>
		<div class="box">
				<h2>HEALTHY FOOD</h2>
				<br><br>
		        <table border= "10px">
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
				
				$sql = "SELECT * FROM mcr WHERE categories = 'healthy food'"; //tukar kt categories kalau nk lunch, dinner, etc...
				$result = mysqli_query($conn,$sql);
				
				echo "<tr><th>IMAGE</th><th>TITLE</th><th>DURATION</th><th>SERVING</th><th>ACTION</th></tr>	";
				
				//echo "<tr><th>title</th><th>duration</th><th>serving</th><th>action</th></tr>	";
				
				if(mysqli_num_rows($result)>0){
					//output each row
					while($row = mysqli_fetch_assoc($result)){
						$image = $row['photo'];
                        $image_src = "image/".$image;
						echo "<tr><td><img src=".$image_src." width='80' height='80' ></td>";
						echo "<td>" . $row["title"]."</td><td>" .$row["duration"]. "</td><td>". $row["serving"]."</td><td>";
						 echo"<a href=\"hf2.php?ID=".$row["r_id"]."\">Edit</a></br>";
						 echo"<a href=\"hf1.php?ID=".$row["r_id"]."\">Read more</a></td></tr>";
						 
						 //echo "<tr><td>" . $row["title"]."</td>
						 //<td>" .$row["duration"]. "</td>
						 //<td>". $row["serving"]."</td>";
						//echo"<a href=\"updateform.php?ID=".$row["r_id"]."\">EDIT</a></td></tr>";
						 

						} 
						
				}else {
							echo "0 results";
						}
					


						mysqli_close($conn);
						
					
						?>
				
					
				</table>
		
				<br><br>
				<a href="http://localhost/tutorial/meals.php"><input type="button" class="btn" value="BACK"></a>
				<a href="http://localhost/tutorial/mr.php"><input type="button" class="btn" value="CANCEL"></a>
		</div>
		
		</center>
		
		</header>
		
	</body>
</html>
		
