<?php
session_start();

	include("connection.php");
	include("function.php");

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$name_with_initials = $_POST['name_with_initials'];
		$full_name = $_POST['full_name'];
		$nic = $_POST['nic'];
		$address = $_POST['address'];
		$date_of_birth = $_POST['date_of_birth'];
		$weight = $_POST['weight'];
		$height = $_POST['height'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$mobile_number = $_POST['mobile_number'];
		$faculty = $_POST['faculty'];
		$password = $_POST['password'];
		
		
		if(!empty($email) && !empty($password) && !is_numeric($email))
		{
			
			$user_id = random_num(20);
			$query = "insert into users (user_id,name_with_initials,full_name,nic,address,date_of_birth,weight,height,gender,email,mobile_number,faculty,password) values ('$user_id','$name_with_initials','$full_name','$nic','$address','$date_of_birth','$weight','$height','$gender','$email','$mobile_number','$faculty','$password')";
			
			mysqli_query($con, $query);
			
			header("Location: login.php");
			die;
			
		}
		else
		{
			echo "Please enter some valid information";
		}
		
	}
	
	
?>
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
    width:500px;
    height:600px;
    border-collapse: collapse;
    margin-right:20px;
    margin-left:150px;
    margin-top:20px;
    margin-bottom:20px;
    background-color:rgba(67, 64, 85, 0.4);
}
.vission{
    width:500px;
    height:600px;
    border-collapse: collapse;
    margin-right:20px;
    margin-left:150px;
    margin-top:20px;
    margin-bottom:20px;
    background-color:rgba(67, 64, 85, 0.4);
}
p{
    text-align:left;
    font-size:40px;
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
    padding-left:25PX;
}
.clogo{
    width: 80px;
    padding-right: 200PX;
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
    margin-left:550px;
    margin-right:250px;
    margin-top:250px;
    margin-bottom:250px;

}
.footer table{
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
		
#box{
			position: absolute;
				top:50%;
				left:50%;
				transform:translate(-50%,-50%);
				width:400px;
				padding:40px;
				background:rgba(0,0,0,.8);
				box-sizing:border-box;
				box-shadow:0 15px 25px rgba(0,0,0,.5);
				border-radius:10px;
                margin-top:350px;
		}
		
		#a02
		{
			text-decoration: none;
			color:white;
			font-family:Calibri;
			font-size:20px;
      margin-left: 50px;
      margin-bottom: 20px;
      margin-top: 0px;
		}
    #text{
      width:300px;
      height:25px;
    }
    #button{
      height:35px;
      color: #FFFFFF;
      background-color: #f4511e;
      display: inline-block;
      border-radius: 4px;
      border: none;
      text-align: center;
      transition: all 0.5s;
      cursor: pointer;
      margin-left:0px;
      margin-bottom:30px;

    }
    #llogin{
      font-size: 20px;
      margin-left: 40px;
      margin-bottom: 50px;
      margin-top: 0px;
      color:white;

    }
    #p02{
      font-size: 20px;
      margin-left: 70px;
      margin-bottom: 50px;
      margin-top:-100px;
      color:white;
      color: #f4511e;
    }
    .footer table{
    width:100%;
    height:200px;
    background-color: rgba(0, 0, 0, .5);
    position:relative;
    margin-top: 100%;
    
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
            <td class="bar"><a href="home.php" class="<?php if($page == 'UserFestivalsPage.php'): echo 'active';endif; ?>"style="text-decoration:none;">HOME</a></td>
            <td class="bar"><a href="login.php" class="<?php if($page == 'UserHotelsPage.php'): echo 'active';endif; ?>"style="text-decoration:none;">LOGIN</a></td>
            <td class="bar"><a href="" class="<?php if($page == 'UserShopPage.php'): echo 'active';endif; ?>"style="text-decoration:none;">ABOUT US</a></td>
            <td class="bar"><a href="" class="<?php if($page == 'UserShopPage.php'): echo 'active';endif; ?>"style="text-decoration:none;">CONTACT US</a></td>
           
        </tr>
    </table>
</nav>
<div id="box">
		
		
		<form method="POST"class="form">
		
		<table>
      <tr>
        <td >
			      <h1 id="llogin">Registration Form For Student</h1>
        </td>
      </tr>
      <tr>
        <td>
        <input type="text" id="text" placeholder="name_with_initials"name="name_with_initials"><br><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="text" id="text" placeholder="full_name"name="full_name"><br><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="text" id="text"placeholder="nic"name="nic"><br><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="text" id="text"placeholder="address"name="address"><br><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="date" id="text" placeholder="date_of_birth"name="date_of_birth"><br><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="text" id="text" placeholder="weight"name="weight"><br><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="text" id="text" placeholder="height"name="height"><br><br>
        </td>
      </tr>
      <tr>
        <td>
        <lable>gender</lable><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="radio" value="male"name="gender">male<br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="radio" value="female"name="gender">female<br><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="text" id="text" placeholder="email"name="email"><br><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="text" id="text" placeholder="mobile_number"name="mobile_number"><br><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="text" id="text" placeholder="faculty"name="faculty"><br><br>
        </td>
      </tr>
      <tr>
        <td>
        <input type="password" id="text" placeholder="password"name="password"><br><br>
        </td>
      </tr>
      <tr>
        <td>

        <input id="button" type="submit" value="SUBMIT">
</td>
      </tr>
      <tr>
        <td>
        <p id="a02"class="regtext">Alredy Have An Account?</p>
        </td>
      </tr>
      <tr>
        <td>
        <a href="login.php" id="p02"class="regtext">Login</a>
        </td>
      </tr>
      
      </table>
	</form>
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