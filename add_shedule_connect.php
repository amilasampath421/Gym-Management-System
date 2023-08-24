<?php
include('connection.php');

if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$M=$_POST['M'];
	$Tu=$_POST['Tu'];
	$W=$_POST['W'];
	$Thu=$_POST['Thu'];
	$F=$_POST['F'];
	$Sa=$_POST['Sa'];
	$Su=$_POST['Su'];

	$sql="INSERT INTO schedule(Name,Monday,Tuesday,Wednesday,Thursday,Friday,Saturday,Sunday) VALUES('$name','$M','$Tu','$W','$Thu','$F','$Sa','$Su')";
	$res=mysqli_query($con,$sql);
	header('location:add_shedule.php');
}

	

?>
