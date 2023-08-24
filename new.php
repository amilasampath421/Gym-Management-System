<?php

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
  position: absolute;
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
#uname{}
.members{
    width:225px;
    height:300px;
    border-collapse: collapse;
    background-color: rgba(255, 0, 0, 0.3);
	margin-left: 20px;
    margin-top:20px;
}
.month{
    width:225px;
    height:300px;
    border-collapse: collapse;
    background-color: rgba(184, 71, 71, 0.3);
	margin-left: 20px;
    margin-top:20px;
}

.count{
    width:225px;
    height:300px;
    border-collapse: collapse;
    background-color: rgba(162, 176, 21, 0.3);
	margin-left: 20px;
    margin-right:20px;
    margin-top:20px;
}

.status{
    width:225px;
    height:300px;
    border-collapse: collapse;
    background-color: rgba(43, 39, 69, 0.3);
	margin-left: 20px;
    margin-top:20px;
    margin-bottom:20px;
}
.middlepane{
   width: available;
   height: available;
   min-height: 60px;
   float: left;
   background-color: rgba(0, 0, 0, .5);
   border-collapse: collapse;
   text-align: center;
   margin: 0 auto;
   color: #fff;
   margin-left:400px;
   margin-top:50px;
}
h1{
    color:white;
    font-size:40px;
    margin-left: 10px;
    margin-top:10px;
    margin-bottom:10px;
    margin-right:10px;

}
#button{
    height:40px;
    margin-top:5px;
    background-color:#f4511e;
    border-radius:20px;
    color:white;
    width:80px;
}
.userlogo{
    width:50px;
    color:red;
    margin-left:100px;
}
#uname{
    color:white;
}
</style>


</head >
<body style="background-image:url('photos/pexels-leon-ardho-1552252.jpg');background-size: cover;background-attachment: fixed;">


		
   
</body>
</html>