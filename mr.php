<!DOCTYPE html>
<html lang="en">

	<head
	<link rel="stylesheet" href="style1.css">
	<title>Manage Recipe</title>
	</head>
	
	<body>
	<header>
	
		<div class = "main">
		<br>
		<ul>
		<li class="active"><a href= "http://localhost/tutorial/homepage.php">Homepage</a></li>
		 <li><a href= "http://localhost/tutorial/cont.php">Contact us</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.php">Log out</a></li>
		 </ul>
		</div>
		
		
		<br><br><br>
		
		
		<h1> MANAGE RECIPE </h1>
		
			
		<div class="container1">
			<ul>
			
		<br><br>
				<li> <div class="title1"><a href= "http://localhost/tutorial/meals.php">Meal Categories</a><div> </li>
				
				<li> <div class="title1"><a href="http://localhost/tutorial/origin.php">Origin Food</a><div> </li>
			    
				<li> <div class="title1"><a href= "http://localhost/tutorial/calorie.php">Calories</a><div> </li>
				
				
			</ul>
		</div>
		
		<style>
		
			 *{
			margin: 0;
			padding: 0;
			font-family: verdana;
			}
			
			header{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(30.png);
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
			 background: #ffff00;
			 color: black;
			 border: none;
			}
			 
			.container1 ul li .title1{
			width: 70%;
			height: 80px;
			color: black;
			line-height: 50px;
			background:  #ff6600;
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
			position: center;
		}
			
			.btn:hover{
			background-color:#FE51B9;
			color:#000;
		}
		
		</style>
	
	
		<center>
				<br><br>
		
				<a href="http://localhost/tutorial/homepage.php"><input type="button" class="btn" value="CANCEL"></a>
		
		
		</center>
		</header>
		
	</body>
</html>