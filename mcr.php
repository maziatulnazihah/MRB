<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mcr";
$id = "";
$title = "";
$ingredients = "";
$duration = "";
$categories = "";
$origin = "";
$steps = "";

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
	$data[4] = $_POST['categories'];
	$data[5] = $_POST['origin'];
	$data[6] = $_POST['steps'];
	return $data;
}


	//insert
	if(isset($_POST['insert']))
	{
		$info = getData();
		$insert_query = "INSERT INTO `recipe`(`title`, `ingredients`, `duration`, `categories`, `origin`, `steps`) VALUES ('$info[1]','$info[2]','$info[3]','$info[4]'),'$info[5]','$info[6]')";
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
		$delete_query = "DELETE FROM `recipe` WHERE 0 id = '$info[0]'";
		try{
			$delete_result = mysqli_query($conn, $delete_query);
			if($delete_result){
				if(mysqli_affected_rows($conn)>0);
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
		$update_query = "UPDATE `recipe` SET  title ='$info[1]',ingredients ='$info[2]',duration ='$info[3]',categories ='$info[4]',origin ='$info[5]', steps ='$info[6]'WHERE id = '$info[0]'";
		
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

?>