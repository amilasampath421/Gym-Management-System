<?php

@include 'config.php';

if(isset($_POST['submit'])){
    
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $fileName = $_FILES['profileimage']['name'];
   $tempName = $_FILES['profileimage']['tmp_name'];

   $uploadFolder = 'images/';

   $fileUploaded = move_uploaded_file($tempName,$uploadFolder.$fileName);

   $createStyTable = "CREATE table $name(regnum varchar(10) primary key,Fname varchar(100),Lname varchar(100),email varchar(100),gender varchar(10),faculty varchar(100))";
   mysqli_query($conn,$createStyTable);

   $insert = "INSERT INTO societies(name,email,image) VALUES('$name','$email','$fileName')";
        mysqli_query($conn, $insert);
        header('location:society-admin.php');
         

};


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>add a society now</h3>
      
      <input type="text" name="name" required placeholder="enter society name">
      <input type="email" name="email" required placeholder="enter society email">
      

      <div class="get-image">
               
            <label for="profileimage" class="navitem">add profile image of the society</label>
            <input type="file" accept="image/jpeg, image/png, image/jpg" name="profileimage" class="input-file" id="profileimage" style="display:none" required>
      </div>
      
      
        <input type="submit" name="submit" value="submit details" class="form-btn">
      

   </form>

</div>

   <footer class="footer">
     
   </footer>

</body>
</html>