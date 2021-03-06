		<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="style2.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">


<title>Create Recipe</title>
			<style>
			
			body{
			background-image:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url(268.jpg);
			height: 160vh;
			background-size: 1500px 1250px;
			background-position: center;
			font-family: verdana;
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
			
			
			.pc-tab> input,
			.pc-tab section > div {
				display: none;
			}
			
			#tab1:checked ~ section .tab1,
			#tab2:checked ~ section .tab2,
			#tab3:checked ~ section .tab3{
				display: block;
			}
			
			*, *: after, *:before{
				box-sizing: border-box;
			}
			
			body{
				background-color: #ecf0f1;
				font-family: verdana;
				}
				
			
			h1{
				text-align: center;
				font-size: 50px;
				color: #fff;
				font-weight: bold;
				}
			
			h2{
				text-align: left;
				font-size: 35px;
				color: black;
				font-weight: bold;
				font-family: verdana;
				}
				
			.pc-tab{
			 width: 100%;
			 max-width: 700px;
			 margin: 0 auto; 
			 }
			 
			 .pc-tab ul{
			 list-style-type: none;
			 margin: 0;
			 padding: 0;
			 color: #fff;
			 }
			 
			 .pc-tab ul li label{
			 float: left;
			 padding: 7px 23px;
			 border-radius: 15px 50px 30px 5px;
			 border: 1px solid #ddd;
			 border-bottom: 0;
			 background-color: #ffe6e6;
			 color: #000000; 
			 border: none;
			 }
			 
			 .pc-tab ul li label: hover{
			 background-color: #000000;
			 }
			 
			 .pc-tab ul li label: active{
			 background-color: #ffe6e6;
			 }
			 
			 .pc-tab ul li: not(:last-child) label{
			 border-right-width: 0;
			 }
			 
			 .pc-tab ul li label{
			 position: left;
			 }
			 .pc-tab section{
			 clear: both;
			 }
			 
			 .pc-tab section div{
			 padding: 80px;
			 width: 100%;
			 background-color: #ffe6e6;
			 line-height: 1.5em;
			 letter-spacing: 0.5px;
			 color: #000;
			 border: none;
			 background: rgb(255, 255, 255,0.8);
			 }
			 
			 .pc-tab section div h2{
			 margin: 0;
			 letter-spacing: 1px;
			 color: #000;
			 }
			 
			 #tab1:checked ~ nav .tab1 label,
			 #tab2:checked ~ nav .tab2 label,
			 #tab3:checked ~ nav .tab3 label{
				background-color: #fff;
				color: #111;
				position: relative;
			}
			
			#tab1:checked ~ nav .tab1 label:after,
			#tab2:checked ~ nav .tab2 label:after,
			#tab3:checked ~ nav .tab3 label:after{
			content: "";
			display: block;
			height: 2px;
			width: 100%;
			background-color: #fff;
			left: 0;
			bottom: -1px;
			}
			
			.button{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);
			}
			
			.button1{
			position: absolute;
			top: 60%;
			left: 50%;
			transform: translate(-50%,-50%);}
			
			.btn{
			border: none;
			background: #708090;
			padding: 5px 13px;
			color:#000;
			transition: 0.6s ease;
			text-decoration: none;
			}
			
			.btn:hover{
			background-color:#FE51B9;
			color:#000;
			}
			
			input[type="file"]{
			display: none;
			}
			
			
			.pc-tab section div table label{
			color: white;
			height: 30px;
			width: 250px;
			background-color: #FFA500;
			position: absolute;
			top:0;
			bottom: 0;
			left: 0;
			right: 0;
			font-size: 15px;
			display:flex;
			justify-content: center;
			align-items: center;
			font-family: verdana;
			}
			
			h3{
			font-size: 12px;
            font-style: italic;
			color: blue;
			}
			
			
			</style>
</head>

<body>

<div class = "main">
<ul>
<li class="active"><a href= "http://localhost/tutorial/homepage.php">Homepage</a></li>
		 <li><a href= "http://localhost/tutorial/cont.php">Contact us</a></li>
		  <li><a href= "http://localhost/tutorial/login%20new.php">Log out</a></li>
</ul>
</div>

<br><br><br>

<form action="mainphp.php" method="POST"  enctype='multipart/form-data'>


<div class="pc-tab">
<input checked="checked" id="tab1" type="radio" name="pct"/>

<nav>
<ul>
<li class="tab1">
<label for="tab1">Create Recipe</label>
</li>
</ul>
</nav>
<section>
<div class="tab1">


<p>
<font color="black">
<br>

<center>
<table>
<tr>
<td>Categories: </td>
<td>
<select input="input-field" name="categories" placeholder="Category">
 <option value="breakfast">1-breakfast</option>
 <option value="lunch">2-lunch</option>
 <option value="dinner">3-dinner</option>
 <option value="tea time">4-tea time</option>
 <option value="dessert">5-dessert</option>
 <option value="cookies">6-cookies</option>
 <option value="healthy food">7-healthy food</option>
 <option value="drink&juices">8-drinks and juices</option>

   </select>
</td>

</tr>

<tr>
<td>Origin: </td>
<td>
<select input="input-field" name="origin" placeholder="Category">
			 <option value="Malaysian">1-Malaysian</option>
			 <option value="Chinese">2-Chinese</option>
			 <option value="Indian">3-Indian</option>
			 <option value="Korean">4-Korean</option>
			 <option value="Japanese">5-Japanese</option>
			 <option value="Arabian">6-Arabian</option>
			 <option value="Vietnamese">7-Vietnamese</option>
			 <option value="Western">8-Western</option>

			   </select>
			</td>

			</tr>
   </select>
</td>
</tr>

<tr>
<td>Title of Recipe: </td>
<td>
<textarea cols="40" rows="1"input type="text" name="title" placeholder="Title"></textarea><br>
</td>

</tr>
<tr>
<td>Ingredients:</td>
<td>
<textarea cols="50" rows="5"input type="text"
placeholder="ingredients" name="ingredients"></textarea><br>
</td>
</tr>

<tr>
<td>Duration:</td>
<td>
<textarea cols="40" rows="1" input type="text" name="duration" placeholder="Duration" name="duration"></textarea>
</td>
</tr>

<tr>
<td>Steps:</td>
<td>
<textarea cols="50" rows="5"input type="text" name="steps"
placeholder="steps" name="steps"></textarea><br>
</td>
</tr>

<tr>
<td>Serving Size: </td>
<td>
<input type="number" name="serving" placeholder="Serving Size"><br>
</td>
</tr>
<tr>
<center><input type="file" id="file" name="file" accept="image/*">
<label for="file">
<i class="material-icons">
add_photo_alternate
</i> &nbsp;

Choose a photo
</center></label>

<br>

<h3><center>*please choose image from your file</center></h3>

<br>




</font>
</table>
</p>
</center>

<center>
				<input type="submit" class="btn" name="insert" value="SAVE">
				<a href="http://localhost/tutorial/v1.php"><input type="button" class="btn" value="NEXT"></a>
		
				<a href="http://localhost/tutorial/homepage.php"><input type="button" class="btn" value="CANCEL"></a>


<center>
</form>
</body>
</html>


