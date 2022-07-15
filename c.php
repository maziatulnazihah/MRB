<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mrb";	
			
			if(isset($_POST['s_id']) || isset($_POST['s_size']) || isset($_POST['calories']) || isset($_POST['sugars']) || isset($_POST['t_fat'])) {
		
		
			$s_id = $_POST['s_id'];
			$s_size = $_POST['s_size'];
			$calories = $_POST['calories'];
			$sugars = $_POST['sugars'];
			$t_fat = $_POST['t_fat'];
			$foodN= $_POST['foodN'];
			
			}


			// Create connection
			$conn = mysqli_connect("localhost", "root", "", "mrb");
			// Check connection
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}
			else{ 
			echo "Success";
			}
			//insert
			if(isset($_POST['insert'])){

			$sql = "INSERT INTO serving(s_size, calories, sugars, t_fat, foodN) VALUES ('$s_size','$calories','$sugars','$t_fat','$foodN')";

			$result=mysqli_query($conn, $sql);

			if(mysqli_affected_rows($conn)>0){

			echo "<script type='text/javascript'>alert('New Record successfully inserted !');</script>";
			header ("Location:http://localhost/tutorial/c1.php");
			}

			else
			{
			echo "<script type='text/javascript'>alert('Data are not inserted !');</script>";
			}
			}


			mysqli_close($conn);

?>