<!DOCTYPE html>
<html>
	<head>
	<title>Homepage</title>
	<link rel="stylesheet" href="style1.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	</head>
	<body>
	<header>
	<style>
	
	
	     body{
		
			height: 100vh;
			align-items: center;
			justify-content: center;
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(57.jpg);
			
	}

			*{
			margin: 0;
			padding: 0;
			font-family: verdana;
			}
	
			
			.main ul{
			float: right;
			list-style-type:none;
			}
			
			.main ul li{
			display: inline-block;
			}
			
			.main ul li a{
			text-decoration: none;
			color: #fff;
			padding: 5px 20px;
			border: 1px solid #fff;
			transition: 0.6s ease;
			}
			
			.main ul li a:hover{
			background-color:#fff;
			color:#000;
			}
			
			.main u li.active a{
			background-color:#fff;
			color:#000;
			}
			
			.main{
			max-width: 1200px;
			margin: auto;
			}
			
			.tittle{
			position: absolute;
			top: 30%;
			left: 19%;
			right:70%
			bottom: 70%
			}
			
			.tittle h1{
			color:#fff;
			font-size:58px;
			font-weight: bold;
			}
			
			.button{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			}
			
	
			.btn{
			border: 1px solid #fff;
			padding: 10px 30px;
			color:#fff;
			text-decoration: none;
			transition: 0.6s ease;
			}
			
			.btn:hover{
			background-color:#fff;
			color:#000;
			}
			
			*{
	margin: 0;
	padding: 0;
	list-style: none;
	text-decoration: none;
}

.sidebar{
	position: fixed;
	left: -250px;
	width: 250px;
	height: 100%;
	background: rgba(0,0,0,0.5);
	transition: all .5s ease;
	
}

.sidebar header{
	font-size: 22px;
	color: white;
	text-align: center;
	line-height: 70px;
	background: #FFA500;
	user-select: none;
}

.sidebar ul a{
	display: block;
	height: 100%;
	width: 100%;
	line-height: 65px;
	font-size: 16px;
	color: white;
	padding-left: 40px;
	box-sizing: border-box;
	border-top: 1px solid rgba (255,255,255,.1);
	border-bottom:1px solid white; 
	transition: .4s;
}

ul li: hover a{
	padding-left: 50px;
}

.sidebar ul a i{
	margin-right: 16px;
}

#check{
	display: none;
}

label #btn, label #cancel{
	position: absolute;
	cursor: pointer;
	background: #FFA500;
	border-radius: 3px;
}

label #btn{
	left: 40px;
	top: 25px;
	font-size: 35px;
	color: white;
	padding: 6px 12px;
	transition: all .5s;
}
label #cancel{
	z-index: 1111;
	left: -195px;
	top: 17px;
	font-size: 30px;
	color:  rgba(0,0,0,0.5);
	padding: 4px 9px;
	transition: all .5s ease;
}

#check:checked~.sidebar{
	left: 0;
}

#check:checked~ label #btn{
	left: 250px;
	opacity: 0;
	pointer-events: none;
}

#check:checked~ label #cancel{
left: 195px;
}

h1{
			text-align: center;
			font-size: 70px;
			color: #fff;
			font-weight: bold;
			}
	</style>
	<br>
	<div class = "main">
		<ul>
		 <li class="active"><a href= "http://localhost/tutorial/about.php">About</a></li>
		 <li><a href= "http://localhost/tutorial/cont.php">Contact us</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.php">Log out</a></li>
		 </ul>
		</div>
		
	
		<div class="button">
			<br><br>
			<h1>MY RECIPE BOOK</h1>
			
			<br>
			<center>
				<a href="http://localhost/tutorial/main.php" class="btn">CREATE RECIPE</a>
				
				<a href="http://localhost/tutorial/mvr.php" class="btn">VIEW RECIPE</a>
				
				<a href="http://localhost/tutorial/mr.php" class="btn">MENU</a>
			</center>
				<br><br><br>
				<center>
				<a href="http://localhost/tutorial/ct1.php" class="btn">COOKING TIPS</a>
				</center></br>
		</div>
		
		<input type="checkbox" id="check">
		<label for="check">
			<i class="fas fa-bars" id="btn"></i>
			<i class="fas fa-times" id="cancel"></i>
		</label>
		
		<div class="sidebar">
			<header>My App</header>
				<ul>
				
					<li><a href="#"><i class="fas fa-qrcode"></i>Dashboard</a></li></li>
					
					<li><a href="#"><i class="fas fa-link"></i>Shortcuts</a></li>
					
					<li><a href="#"><i class="fas fa-stream"></i>Overview</a></li>
					
					<li><a href="#"><i class="fas fa-calendar-week"></i>Events</a></li>
					
					<li><a href="#"><i class="far fa-question-circle"></i>About</a></li>
					
					<li><a href="#"><i class="fas fa-sliders-h"></i>Services</a></li>
					
					<li><a href="#"><i class="far fa-envelope"></i>Contact</a></li>
				</ul>
			
		</div>
		
		
	    
	</headers>
	</body>
</html>
	
		


	
		

