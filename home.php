<!doctype html>
<html>
<head> 
	<title>Signup page</title>
<!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">-->

<style>

.middlepane{
   width: 1500PX;
   height: available;
   min-height: 60px;
   float: left;
   background-color: rgba(0, 0, 0, .5);
   border-collapse: collapse;
   text-align: center;
   margin: 0 auto;
   color: #fff;
   margin-bottom:100px;
   margin-top:20px;
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

.mission{
    width:400px;
    height:400px;
    border-collapse: collapse;
    margin-right:20px;
    margin-left:220px;
    margin-top:20px;
    margin-bottom:20px;
    background-color:rgba(67, 64, 85, 0.4);
}
.vission{
    width:400px;
    height:400px;
    border-collapse: collapse;
    margin-right:20px;
    margin-left:220px;
    margin-top:20px;
    margin-bottom:20px;
    background-color:rgba(67, 64, 85, 0.4);
}
p{
    text-align:left;
    font-size:30px;
    margin-right:5px;
    margin-left:5px;
    margin-top:5px;
    margin-bottom:5px;
}
h1{
    font-size:50px;
    color:#f28a04;
}
.power{
    font-size:70px;
    color:white;
    text-align:left;
    margin-top:30px;
    padding-right:250PX;
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
    padding-left:30PX;
}
.clogo{
    width: 80px;
    padding-right: 180PX;
}
.logo{
    width: 100px;
}
.be{
    color:#f28a04; 
    margin-bottom:-25px;
    font-weight: bold;
    font-size:30px;
}
.tr{
    color:white; 
    font-weight: bold;
    font-size:30px;

}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 10px;
  padding: 20px;
  width: 230px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
.middle{
    margin-left:500px;
    margin-right:250px;
    margin-top:300px;
    margin-bottom:250px;

}
.footer table{
    width:100%;
    height:200px;
    background-color: rgba(0, 0, 0, .5);
    position:relative;
    margin-top:-100px;
    /*padding-top:50px;*/
    padding-left:100px;
    /*padding-right:100px;*/
    padding-bottom:50px;
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
.homedes{
    color:white;
    font-size:18px;
    position: absolute;
    margin-top:60px;
    margin-left:350px;
}
.desuni{
    font-size:80px;
    font-weight: bold;
    color: #f4511e;

}
.desun{
    font-size:50px;
    margin-left:100px;
}

</style>

</head >
<body style="background-image:url('photos/pexels-leon-ardho-1552252.jpg');background-size: cover;background-attachment: fixed;">
<div class="topleftpane">
    <nav>
    <table>
        <tr>
            <td><a href="home.php"><img src="photos/gym.png" alt="" class="logo"></a></td>
            <td class="power">PowerHouse</td>
            <td><img src="photos/Vavuniversity.png" alt="" class="clogo"></td>

            <td class="bar"><a href="home.php" class="<?php if($page == 'UserFestivalsPage.php'): echo 'active';endif; ?>"style="text-decoration:none;">HOME</a></td>
            <td class="bar"><a href="login.php" class="<?php if($page == 'UserHotelsPage.php'): echo 'active';endif; ?>"style="text-decoration:none;">LOGIN</a></td>
            <td class="bar"><a href="aboutus.php" class="<?php if($page == 'UserShopPage.php'): echo 'active';endif; ?>"style="text-decoration:none;">ABOUT US</a></td>
            <td class="bar"><a href="admin_login.php" class="<?php if($page == 'UserShopPage.php'): echo 'active';endif; ?>"style="text-decoration:none;">ADMIN</a></td>
        </tr>
    </table>
</nav>
<div class="homedes">
        <p class=desuni>University Of Vauniya </p>
        <p class=desun>Gym Management System</p>
    </div>


</div>
		<div class="middle">
            <table>
                <tr>
                    <td>
                            <P class="be">BE STRONG</P><BR>
                            <P class="tr">TRANING HARD</P>
                    </td>
                           
                    <td>
                            <button class="button" style="vertical-align:middle"><span><a href="login.php"style="text-decoration:none;">GET STARTED</a></span></button>
                    </td>
                </tr>
            </table>
        </div>
	<div class="middlepane">
    <table>
        <tr>
            <td><div class="mission"><h1>OUR MISSION </h1> <br> <br> <p>"To enhance the quality of life in the communities, we serve through our fitness philosophy,facilities,programs and products and to instill in the lives of people everywhere the value of helth and fitness."</p></div></td>
            <td><div class="vission"><h1>OUR VISION</h1> <br> <br> <p>Recognized for a unique and inspiring experience,success is achieved in a positive atmosphere designed for superior helth,movement,and fun.</p></div></td>
        </tr>
    </table>
	</div>

    
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