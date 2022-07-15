<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcr";
$id = "";
$title = "";
$ingredients = "";
$duration = "";
$steps = "";
$serving = "";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

//connect to mysql database

try{
	$conn = mysqli_connect($servername,$username,$password,$dbname);
}catch(mysqli_sql_exception $ex)
{
	echo("error in connecting");
}

//get data from the form
function getData()
{
	$data = array();
	$data[0]= $_POST['id'];
	$data[1] = $_POST['title'];
	$data[2]= $_POST['ingredients'];
	$data[3] = $_POST['duration'];
	$data[4] = $_POST['steps'];
	$data[5] = $_POST['serving'];
	return $data;
}


	//insert
	if(isset($_POST['insert']))
	{
		$info = getData();
		$insert_query = "INSERT INTO `recipe`(`title`, `ingredients`, `duration`, `steps`, `serving`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]','$info[5]')";
		try
		{
			$insert_result=mysqli_query($conn, $insert_query);
			if(mysqli_affected_rows($conn)>0)
			{
				echo("data inserted successfully");
			
			}
			else
			{
				echo("data are not inserted");
			}
		}
		catch(Exception $ex)
		{
		echo("error inserted".$ex->getMessage());
		}
	}
	
	//delete
	if(isset($_POST['delete'])){
		$info = getData();
		$delete_query = "DELETE FROM `recipe` WHERE id = '$info[0]'";
		try{
			$delete_result = mysqli_query($conn, $delete_query);
			if($delete_result){
				if(mysqli_affected_rows($conn)>8);
				if($delete_result){
					echo("data deleted");
				}else{
					echo("data not deleted");
				}
			}
		}catch(Exception $ex){
			echo("error in delete".$ex->getMessage());
		}
	}
	
	//update
	if(isset($_POST['update'])){
		$info = getData();
		$update_query = "UPDATE `recipe` SET title ='$info[1]',ingredients ='$info[2]',duration ='$info[3]',steps ='$info[4]',`serving ='$info[5]' WHERE id = '$info[0]'";
		
	
		try{
			$update_result = mysqli_query($conn, $update_query);
			if($update_result){
				echo("data updated");
			}else{
				echo("data not updated");
			}
		}catch(Exception $ex){
			echo("error in update".$ex->getMessage());
		}
	}
	
	//view
	if(isset($_POST['view'])){
		$info = getData();
		$view_query = "SELECT `title`, `ingredients`, `duration`, `steps`, `serving` FROM `recipe` WHERE id = '$info[0]'";
		
			$view_result = mysqli_query($conn, $view_query);
			if($view_result-> num_rows>0){
				while($row = $view_result->fetch_assoc()){
				echo"<tr><td>".$row["id"]."</td><td>".$row["title"]."</td><td>".$row["ingredients"]."</td><td>".$row["duration"]."</td><td>".$row["steps"]."</td><td>".$row["serving"]."</td><td>";
				}
					echo"</table>";
				
			}else{
				echo"0 result";
			}
		
		
		$conn->close();
	}

?>