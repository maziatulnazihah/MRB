<!DOCTYPE html>
<html lang="en">

	<head
	<link rel="stylesheet" href="style1.css">
	<title>Meal Categories</title>
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
		
		
		<h1> MEAL CATEGORIES</h1>
		
		<div class="container">

			<div class="box">
				<div class="imgBox">
					<img src="rc.jpg">
			</div>
			<div class="details">
				<div class="content">
				<a href ="http://localhost/tutorial/bf.php">
				<h2>Breakfast</h2></a>
				<p>this categories content hundreds of recipe for breakfast</p>
				
				</div>
			</div>
		</div>
			
			<div class="box">
				<div class="imgBox">
					<img src="lun1.jpg">
			</div>
			<div class="details">
				<div class="content">
				<a href ="http://localhost/tutorial/ln.php">
				<h2>Lunch</h2></a>
				<p>this categories content hundreds of recipe for lunch</p>
				
				</div>
		    </div>
		</div>
			
			<div class="box">
			<div class="imgBox">
					<img src="din2.jpg">
			</div>
			<div class="details">
				<div class="content">
				<a href="http://localhost/tutorial/din.php">
				<h2>Dinner</h2></a>
				<p>this categories content hundreds of recipe for Dinner</p>
				</div>
			</div>
			
			</div>
			
			<div class="box">
			<div class="imgBox">
					<img src="tea1.jpg">
			</div>
			<div class="details">
				<div class="content">
				<a href="http://localhost/tutorial/tt.php">
				<h2>Tea Time</h2></a>
				<p>this categories content hundreds of recipe for tea time</p>
				</div>
			</div>
			
			</div>
			
			<div class="box">
			<div class="imgBox">
					<img src="cake2.jpg">
			</div>
			<div class="details">
				<div class="content">
				<a href="http://localhost/tutorial/des.php">
				<h2>Dessert</h2></a>
				<p>this categories content hundreds of recipe for desserts</p>
				</div>
			</div>
			</div>
			
			<div class="box">
			<div class="imgBox">
					<img src="cok.jpg">
			</div>
			<div class="details">
				<div class="content">
				<a href="http://localhost/tutorial/cok.php">
				<h2>Cookies</h2></a>
				<p>this categories content hundreds of recipe for Cookies</p>
				</div>
			</div>
			</div>
			
			<div class="box">
			<div class="imgBox">
					<img src="hf.jpg">
			</div>
			<div class="details">
				<div class="content">
				<a href="http://localhost/tutorial/hf.php">
				<h2>Healthy Food</h2></a>
				<p>this categories content hundreds of recipe for Healthy Food</p>
				</div>
			</div>
			</div>
			
			<div class="box">
			<div class="imgBox">
					<img src="j1.jpg">
			</div>
			<div class="details">
				<div class="content">
				<a href="http://localhost/tutorial/daj.php">
				<h2>Drinks And Juices</h2></a>
				<p>this categories content hundreds of recipe for Drinks And Juices</p>
				</div>
			</div>
		  </div>
		</div>
			
		</div>	
		</div>
		
			<style>
		
			 *{
			margin: 0;
			padding: 0;
			font-family: verdana;
			}
			
			header{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.8)),url(26.jpg);
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
			
			.container{
			width: 1280px;
			margin: 70px auto 0;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			}
			
			.container .box{
			position: relative;
			width: 300px;
			height: 300px;
			background: #ff0;
			margin: 10px;
			box-sizing: border-box;
			display: inline-block;
			}
			
			.container .box .imgBox{
			position: relative;
			overflow: hidden;
			}
			
			.container .box .imgBox img{
			max-width: 100%;
			transition: transform 2s;
			}
			
			.container .box:hover .imgBox img{
			transform: scale(1.2);
			}
			
			.container .box .details{
			position: absolute;
			top: 10px;
			left: 10px;
			bottom: 10px;
			right: 10px;
			background: rgba(0,0,0,.8);
			transform: scaleY(0);
			transition: transform .5s;
			}
			
			.container .box:hover .details{
			transform: scaleY(1);
			}
			
			.container .box .details .content{
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			text-align: center;
			padding: 15px;
			color: #fff;
			}
			
			.container .box .details .content h2{
			margin: 0;
			padding: 0;
			font-size: 20px;
			color: #ff0;
			}
			
			.container .box .details .content p{
			margin: 10px 0 0;
			padding: 0;
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
				<a href="http://localhost/tutorial/mr.php"><input type="button" class="btn" value="BACK"></a>
		
				<a href="http://localhost/tutorial/homepage.php"><input type="button" class="btn" value="CANCEL"></a>
		
		
		</center>
		</header>
		
	</body>
</html>