<!doctype html>
<html>
<head> 
	<title>Signup page</title>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->

<style>
.leftpane{
    width: 20%;
    height: 150px;
    min-height: 820px;
    float: left;
    background-color: rgba(0, 0, 0, .5);
    border-collapse: collapse;
	margin-top: -100px;
}

.middlepane{
   width: 700px;
   height: available;
   min-height: 60px;
   float: left;
   background-color: rgba(0, 0, 0, .5);
   border-collapse: collapse;
   text-align: center;
   margin: 0 auto;
   color: #fff;
}

.toppane{
    width: available;
    height: available;
    border-collapse: collapse;
    background-color: rgba(0, 0, 0, .5);
	margin-left: 300px;
}
.leftmiddlepane{
	width: 15%;
    height: 150px;
    min-height: 820px;
    float: left;
    background-color: rosybrown;
    border-collapse: collapse;
    visibility: hidden;
}

input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=date] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=radio] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
lable{
	width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
}
input[type=button] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 16px;
  box-sizing: border-box;
  border-radius:30px;
}
input[type=submit] {
  width: 20%;
  padding: 12px 20px;
  margin: 8px 16px;
  box-sizing: border-box;
  border-radius:30px;
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
.toppane
{
    background-color: rgba(0, 0, 0, .5);
    height: 70px;
    width: available;
    list-style: none;
    
}
.toppane ul li
{
    line-height: 70px;
    margin: 0 5px ;
}
{
    padding:0;
    margin: 0;
    text-decoration: none;
    list-style: none;
    box-sizing: border-box;
}
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
.toppane ul
{
    float: right;
    margin-right: 20px;
    display: inline-flex;
}
.toppane ul li a
{
    color: white;
    font-size: 20px;
    font-weight: bold;
    padding: 20px;
    text-transform: uppercase;
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
.image{
	 
	 width:100px;
	 
	 }
	 
	 .select{
			   
		display: flex;
		flex-direction:row;
		flex-wrap:wrap;
	 
	 }
	 
	 .year{
		margin-left:30px;
	 }
	 
	 a{
	 color:black;
	 }
</style>

</head >
<body style="background-image:url('photos/pexels-leon-ardho-1552252.jpg');background-size: cover;background-attachment: fixed;">

<div class="container">
            <div class="toppane">
			<nav>
                <ul>
					<li ><img src="photos/Screenshot 2023-04-20 212349.png" alt="header image" class="img"></li>
                    <li><a href="login.php" class="<?php if($page == 'UserHotelsPage.php'): echo 'active';endif; ?>">Login</a></li>
                    <li><a href="home.php" class="<?php if($page == 'UserFestivalsPage.php'): echo 'active';endif; ?>">Home</a></li>
                    <li><a href="" class="<?php if($page == 'UserShopPage.php'): echo 'active';endif; ?>">Menu</a></li>
                    <li><a href="" class="<?php if($page == 'UserNewsPage.php'): echo 'active';endif; ?>">Logout</a></li>
                    
                </ul>
            </nav>
			</div>
            
            <div class="leftpane">
			<ul>
					<li style="background-image:url('photos/images (3).png');widith:150px;height:140px;">
                    <li><a href="dashboard.php" class="<?php if($page == ''): echo 'active';endif; ?>">Dashbord</a></li>
                    <li><a href="member.php" class="<?php if($page == ''): echo 'active';endif; ?>">Members</a></li>
                    <li><a href="signup.php" class="<?php if($page == ''): echo 'active';endif; ?>">New Registration</a></li>
                    <li><a href="payment.php" class="<?php if($page == ''): echo 'active';endif; ?>">Payment</a></li>
                    <li><a href="" class="<?php if($page == ''): echo 'active';endif; ?>">Profile</a></li>
                    <li><a href="" class="<?php if($page == ''): echo 'active';endif; ?>">Health Status</a></li>
                    <li><a href="" class="<?php if($page == ''): echo 'active';endif; ?>">Exercise Routine</a></li>
                    <li><a href="" class="<?php if($page == ''): echo 'active';endif; ?>">Plan</a></li>
            </ul>
			</div>
			<div class="leftmiddlepane">Test Page</div>
	
		
	<div class="middlepane">
	<section>
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
	
	
	
	</section>
	</div>
	</div>


</body>
</html>