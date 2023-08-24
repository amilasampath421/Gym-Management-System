<?php
$user_id = $_GET['user_id'];
$name = filter_input(INPUT_POST, 'name');
$imageName = $_FILES['image']['name'];
$tempName = $_FILES['image']['tmp_name'];

$uploadFolder= 'photos/';

$fileUploaded = move_uploaded_file($tempName,$uploadFolder.$imageName);
				


	if(!empty($name)) {
	
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "gym_management_system";
		
		
		$oconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO item (name,image) values ('$name','$imageName')";
			if ($oconn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
				header("Location: add_item.php?user_id=$user_id");
				die;
			}
			else{
				echo "Error: ". $sql . "<br>". $oconn->error;
				
			}
			$oconn->close(); 
			
		}
	}
	else{
		echo "Password should not be empty";
		die();
	}



?>
