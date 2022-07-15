<!DOCTYPE html>
<html lang="en">

	<head>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
	<link rel="stylesheet" href="style1.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>View Recipe</title>
	</head>
	
	<body>
	<header>
	
		<div class = "main">
		<ul>
		<li class="active"><a href= "http://localhost/tutorial/homepage.php">Homepage</a></li>
		 <li><a href= "http://localhost/tutorial/cont.php">Contact us</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.php">Log out</a></li>
		 </ul>
		</div>
		
		
		<br><br>
		
		<h1> VIEW RECIPE </h1>
		
			
		<div class="container1">
			<ul>
			
		
				<li> <div class="title1"><a href= "http://localhost/tutorial/v1.php">View Recipe</a><div> </li>
				
				<li> <div class="title1"><a href="http://localhost/tutorial/s.php">Search Recipe</a><div> </li>
				
			</ul>
<br><br><br><br>
				<center>
				
				            <a href="http://localhost/tutorial/homepage.php"><input type="button" class="btn" value="CANCEL"></a>
							
							
				</center>		
				

    </div>					
	<style>
	 *{
			margin: 0;
			padding: 0;
			font-family: verdana;
			}
			
			header{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(88.jpg);
			height: 100vh;
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
			
			.container1{
			width: 30%;
			overflow: hidden;
			margin: 10px auto;
			padding: 10px 0px;
			left: 10;
			}
			
			.container1 ul{
			padding: 0px;
			margin: 0px;
			}
			
			.container1 ul li{
			list-style: none;
			float: left;
			width: 100%;
			height: 80px;
			background: #000;
			margin: 40px 30px 0px 20px;
			box-sizing: border-box;
			align: center;
			border: none;
			}
			
			.container1 ul li a{
			text-decoration: none;
			color: #000;
			padding: 5px 20px;
			border: 0px;
			transition: 0.6s ease;
			}
		
			.container1 ul li .title1:hover{
			 background:  #cc33ff;
			 color: black;
			 border: none;
			}
			 
			.container1 ul li .title1{
			width: 70%;
			height: 80px;
			color: black;
			line-height: 50px;
			background:   #80ffff;
			font-size: 20px;
			text-align: center;
			border: none;

			}
	
			
			@media screen and (max-width: 1250px){
			.container ul li{
				width: 40%;
				margin: 40px;
				}
				
			@media screen and (max-width: 750px){
			.container ul li{
				width: 100%;
				margin: 0px;
				}
			
			.container1 ul li{
			float: none;
			width: 90%;
			margin: 40px auto;
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
	</header>
	</body>

</html>
