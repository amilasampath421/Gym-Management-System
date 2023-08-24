<?php

$card_type = filter_input(INPUT_POST, 'card_type');
$card_no = filter_input(INPUT_POST, 'card_no');
$month = filter_input(INPUT_POST, 'month');
$year = filter_input(INPUT_POST, 'year');
$cvn = filter_input(INPUT_POST, 'cvn');
				


	if(!empty($card_type)) {
	if(!empty($card_no)) {
	if(!empty($month)) {
	if(!empty($year)) {
	if(!empty($cvn)) {
		
		$host = "localhost";
		$dbusername = "root";
		$dbpassword = "";
		$dbname = "gym_management_system";
		
		
		$oconn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
		
		
		if(mysqli_connect_error()) {
			die('Connect Error ('.mysqli_connect_errno().')'.mysqli_connect_errno());
			
		}
		else{
			$sql = "INSERT INTO payment (card_type,card_no,month,year,cvn) values ('$card_type','$card_no','$month','$year','$cvn')";
			if ($oconn->query($sql)) {
				echo "New Record is Inserted Sucessfully";
				header("Location: home.php");
				die;
			}
			else{
				echo "Error: ". $sql . "<br>". $oconn->error;
				
			}
			$oconn->close(); 
			
		}
	}
	else{
		echo "1 ";
		die();
	}
	
}
else{
	echo "2 ";
		die();
	
}
}
else{
	echo "3 ";
		die();
	
}
}
else{
	echo "4 ";
		die();
	
}
}
else{
	echo "5 ";
		die();
	
}

?>
