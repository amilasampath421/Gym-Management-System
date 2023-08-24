<?php
session_start();
include("connection.php");
$user_id = $_GET['user_id'];


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
<form method="POST" action="payment_connect.php">
		
		card type*<br>
		 <input type="radio" value="visa" name="card_type"> <img src="Images/visa.png" class="image">
		 <input type="radio" value="master" name="card_type"> <img src="Images/mastercard.png" class="image"> <br>
	
	
	
		card number*<br><input type="text" name="card_no"><br><br>
		
		
		 <div class="select">
		<div id="head2" style="width:15%;">
		 <p>Expiration month* </p>
    <select id='gMonth2' name="month" onchange="show_month()">
    <option selected="" disabled="" value='0'>month</option>
	<option value='Janaury'>Janaury</option>
    <option value='February'>February</option>
    <option value='March'>March</option>
    <option value='April'>April</option>
    <option value='May'>May</option>
    <option value='June'>June</option>
    <option value='July'>July</option>
    <option value='August'>August</option>
    <option value='September'>September</option>
    <option value='October'>October</option>
    <option value='November'>November</option>
    <option value='December'>December</option>
    </select> 
    </div>
	
	
	<div id="head2" style="width:15%;">
	<p>Expiration year*</p>
    <select class='year' name="year" onchange="show_year()">
    <option selected="" disabled="" value='1'>year</option>
	<option value='2023'>2023</option>
    <option value='2024'>2024</option>
    <option value='2025'>2025</option>
    <option value='2026'>2026</option>
    <option value='2027'>2027</option>
    <option value='2028'>2028</option>
    <option value='2029'>2029</option>
    <option value='2030'>2030</option>
    </select> 
    </div>
	</div>
	
	 cvn*<br><input type="text" name="cvn"><img src="Images/cvn.png" class="image"><br><br>
	
  <input type="submit">
</form>
</body>
</html>