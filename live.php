<?php


$user_id = $_GET['user_id'];

  include("connection.php");
  include('header.php');

	  
	  $booking_item=filter_input(INPUT_POST,'booking_item');

	  if(!empty($booking_item)){
	  
	  $q="SELECT * FROM booking where booking_Item like '{$booking_item}%'";
	  
	  $r = mysqli_query($con,$q);
	  
	  if(mysqli_num_rows($r) > 0){
		?>
		<style>
				.div1{
					padding-left: 20%;
   					padding-top: 35px;
				}

			</style>
		<?php
		while($row = mysqli_fetch_assoc($r)){
			 ?>
			
				  
			<div class="div1">
			
				
				<div class="div2">Item name : <?php echo $row['booking_item'];?></div>
				<div class="div2">Time : <?php echo $row['time'];?></div>
				<div class="div2">Date : <?php echo $row['date'];?></div><br>
				
				</form>
			</div>
			
		   <?php
		} 

		 
		 
		  
	  }else{
		  echo "no data";
	  }
	  
	}
	include('footer.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<style>
	.div2{
	position: revert;
    top: 50%;
    left: 70%;
    transform: translate(-50%,-50%);
    width: 250px;
    padding: 20px;
    background: rgba(0,0,0,.8);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgba(0,0,0,.8);
    border-radius: 10px;
    margin: 10px;
	}
	.div1{
    margin-left: 400px;
	margin-top: 30px;
	}
	</style>
</body>
</html>
