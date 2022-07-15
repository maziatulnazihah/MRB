<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "mrb";

			if(isset($_POST['name']) || isset($_POST['email']) || isset($_POST['message'])) {
				
				
			$name = $_POST['name'];
			$email = $_POST['email'];
			$message = $_POST['message'];
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

						$sql = "INSERT INTO contact(name, email, message) VALUES ('$name','$email','$message')";

						$result=mysqli_query($conn, $sql);

						if(mysqli_affected_rows($conn)>0){

						echo "<script type='text/javascript'>alert('New Record successfully inserted !');</script>";
						header ("Location:http://localhost/tutorial/cont.php");
						}
						else
						{
						echo "<script type='text/javascript'>alert('Data are not inserted !');</script>";
						}
						}



			mysqli_close($conn);



?>