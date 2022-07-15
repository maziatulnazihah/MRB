<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel = "stylesheet" href = "">
		<title>About</title>
	</head>
	<body>
	<style>
		 *{
			margin: 0;
			padding: 0;
			font-family: verdana;
			}
			
			header{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(97.jpg);
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
			position: center;
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
		<li class="active"><a href= "http://localhost/tutorial/homepage.html">Homepage</a></li>
		 <li><a href= "http://localhost/tutorial/cont.php">Contact us</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.html">Log out</a></li>
		 </ul>
		</div>
		
		<br><br><br><br><br><br>
		<center>
		<div class="box">
				<h2>About Us</h2>
				<br><br>
				<center>
				<p>
				My recipe book can help to organize the menu more wisely and more systematic. By using My recipe book, you can create recipe, view recipe, edit recipe and delete recipe. It also have another functions such as search recipe and add cooking tips. My Recipe Book will help you enhancing your cooking skills to be better by using the recipes in this website. Instead of using cooking books, why not you try something effortless and you can start used it today !
				</p>
			    </center>
				
				<center>
				<br>
				<a href="http://localhost/tutorial/homepage.php"><input type="button" class="btn" value="CANCEL"></a>
		
		
		</center>
		</div>
		</center>
		</header>
		
		
	</body>
</html>