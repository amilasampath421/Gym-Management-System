<?php
session_start();
include("connection.php");
$user_id = $_GET['user_id'];

?>
<!doctype html>
<html>
<head> 
	<title>Signup page</title>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->

<style>



body
{
    font-family:Calibri;
}
header
{
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.power{
    font-size:70px;
    color:white;
    text-align:left;
    margin-top:30px;
    padding-right:300PX;
    font-family:Monaco;
    font-weight: bold;
}
.topleftpane{
    color:white; 
    width: available;
    height: 100px;
    border-collapse: collapse;
    background-color: rgba(0, 0, 0, .5);
}
td{
    padding-right:5PX;
}
a{
    color:white; 
    font-size:20px;
    padding-left:50PX;
}
.clogo{
    width: 80px;
    padding-right: 200PX;
}
.logo{
    width: 100px;
}
.footer table{
    
}
#location{
    width:40px;
    margin-bottom:-35px;
    margin-left:-40px;
    margin-top:0px;
}
#address{
    color:white;
    font-size:25px;
    margin-bottom:-50px;
    margin-left:40px;
    margin-top:0px;
    
}
#tp{
    color:white;
    font-size:25px;
    margin-bottom:-50px;
    margin-left:40px;
    margin-top:0px;
}
#email{
    color:white;
    font-size:25px;
    margin-bottom:-50px;
    margin-left:40px;
    margin-top:0px;
}
#about{
    color: #f4511e;
    font-size:25px;
    margin-bottom:-50px;
    margin-left:500px;
    margin-top:0px;
}
#des{
    color:white;
    font-size:18px;
    margin-bottom:-50px;
    margin-left:500px;
    margin-top:0;
}
    .footer table{
    width:100%;
    height:200px;
    background-color: rgba(0, 0, 0, .5);
    position:relative;
    /*padding-top:50px;*/
    padding-left:100px;
    /*padding-right:100px;*/
    padding-bottom:50px;
    margin-top: 50%;
    padding-right: 100px;
}
#location{
    width:40px;
    margin-bottom:-35px;
    margin-left:-40px;
    margin-top:0px;
}
#address{
    color:white;
    font-size:25px;
    margin-bottom:-50px;
    margin-left:40px;
    margin-top:0px;
    
}
#tp{
    color:white;
    font-size:25px;
    margin-bottom:-50px;
    margin-left:40px;
    margin-top:0px;
}
#email{
    color:white;
    font-size:25px;
    margin-bottom:-50px;
    margin-left:40px;
    margin-top:0px;
}
#about{
    color: #f4511e;
    font-size:25px;
    margin-bottom:-50px;
    margin-left:500px;
    margin-top:0px;
}
#des{
    color:white;
    font-size:18px;
    margin-bottom:-50px;
    margin-left:500px;
    margin-top:0;
}

.leftpane ul li a
{
    color: white;
    font-size: 20px;
    font-weight: bold;
    padding: 20px;
    text-transform: uppercase;
}
img{
	width:700px;
}
.leftpane ul
{
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.leftpane ul li
{
	font-size: 20px;
    font-weight: bold;
    padding: 20px;
    text-transform: uppercase;
}
.leftpane{
    width: 15%;
    height: available;
    float: left;
    background-color: rgba(0, 0, 0, .5);
    border-collapse: collapse;
	margin-top: 20px;
}
#menu{
    padding:20px;
    padding-bottom:30px;
}
/* Dropdown Button */
.dropbtn {
  background-color: #f4511e;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  margin-top:30px;
  min-width: 160px;
}

/* The container <div> - needed to position the dropdown content */
.dropdown {
  position: relative;
  display: inline-block;
}

/* Dropdown Content (Hidden by Default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgba(0, 0, 0, .5);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Links inside the dropdown */
.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  margin-bottom:40px;
  margin-left:25px;
}

/* Change color of dropdown links on hover */
.dropdown-content a:hover {background-color: #ddd;}

/* Show the dropdown menu on hover */
.dropdown:hover .dropdown-content {display: block;}

/* Change the background color of the dropdown button when the dropdown content is shown */
.dropdown:hover .dropbtn {background-color: #f4511e;}

#uname{

}
.userlogo{
    width:50px;
    color:red;
    margin-left:100px;
  
}
.webbody{
    width:50%;
    height:available;
    margin-left:450px;

    
}
#webbody{
    color:#f4511e;
    font-size:60px;
    margin-left:180px;
}
#hello{
    font-size:70px;
    margin-bottom:-40px;
    align:center;
    margin-top:120px;
}
#button{
    height:40px;
    margin-top:5px;
    background-color:#f4511e;
    border-radius:20px;
    color:white;
    width:80px;
}
.new{
	position: absolute;
    margin-top: 20%;
}		

</style>


</head >
<body style="background-image:url('photos/pexels-leon-ardho-1552252.jpg');background-size: cover;background-attachment: fixed;">
<div class="topleftpane">
    <nav>
    <table>
        <tr>
            <td><img src="photos/gym.png" alt="" class="logo"></td>
            <td class="power">PowerHouse</td>
            <td><img src="photos/Vavuniversity.png" alt="" class="clogo"></td>
            <td><img src="photos/man.png" alt="" class="userlogo"></td>
            <td><p id="uname">Hi, <?php 
                        $query = "select name_with_initials from users where id='$user_id'";
                        $result = mysqli_query($con,$query);
                        $row= mysqli_fetch_assoc($result);
                        echo $row['name_with_initials'];

            
            ?></p?</td>
            <td><button onclick="window.location.href = 'logout.php';"id="button">Logout</td>

           
        </tr>
    </table>
</nav>
<div class="dropdown">
<button class="dropbtn">Menu</button>
<div class="dropdown-content">
<?php
 $_GET['user_id']=$user_id;
?>
            
            <a href="profile.php?user_id=<?php echo $user_id?>" class="<?php if($page == ''): echo 'active';endif; ?>">Profile</a>
           
            <a href="booking.php?user_id=<?php echo $user_id?>" class="<?php if($page == ''): echo 'active';endif; ?>">Booking</a>
            
            <a href="search_booking.php?user_id=<?php echo $user_id ?>" class="<?php if($page == ''): echo 'active';endif; ?>">View Booking</a>

            <a href="" class="<?php if($page == ''): echo 'active';endif; ?>">Shedule</a>

            <a href="payment.php?user_id=<?php echo $user_id?>" class="<?php if($page == ''): echo 'active';endif; ?>">Payment</a>
            </div>
			</div>
			
            <div class="new">
	<form  method="post" action="live.php?user_id<?php echo $user_id ?>">

	<input type="text" name="booking_item" class="text">
	<input type="submit" value="search">
	</form>
	</div>
	<?php
include('new.php');
?>

    <div class="footer">
        <table cellsspace="10px">
            <tr>
                <td>
                    <img src="photos/222.png" alt="location" id="location">
                </td>
                <td>
                <p id="address">Pampaimadu,Vavuniya,Sri Lanka.</p>
                </td>
                <td>
                    <h1 id="about">About The Power House</h1>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="photos/12.png" alt="location" id="location">
                </td>
                <td>
                    <p id="tp">+94 24 222 7569</p>
                </td>
                <td>
                    <p id="des">University gyms are fitness facilities on college <br> campuses that offer exercise equipment, classes, <br>and recreational activities for students, <br>faculty, and staff.</p>
                </td>
            </tr>
            <tr>
                <td>
                    <img src="photos/defgdeg3.png" alt="location" id="location">
                </td>
                <td>
                    <p id="email">powerhouse@gmail.com</p>
                </td>
            </tr>
        </table>
    </div>
    
</body>
</html>
