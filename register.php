<?php
  require 'config.php';
  ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<img class='bg' src="bg.png" alt="">  
<div id="main">
    <center>
      <h2>Create Your Account </h2>
      
    </center>
  
    <form  class="myform" action="register.php" method="post">
    <label><b>Username</b>:</label>
    <input name="username" type="text" class="input" placeholder="Enter Full Name Here."required/><br>
    <label><b>E-Mail Id</b>:</label>
    <input name="usermail" type="text" class="input" placeholder="Enter your Email Address."required/><br>
    <label><b>User-Contact</b>:</label>
    <input name="usercontact" type="text" class="input" placeholder="Enter Your Phone Number. //+91 9876543201"required/><br>
    <label><b>Password:</b></label>
    <input name="password" type="password" class="input" placeholder="Enter Password"required/><br>
    <label><b>Conform Password:</b></label>
    <input name="cpassword" type="password" class="input" placeholder=" Enter Password to Confirm"required/><br>
    <input name="submit" type="submit" id="register" value="SIGN UP"/>
    <a href="index.php"> <input type="button" id="back" value=" LOGIN "/>
    </form>

     <?php
       if(isset($_POST['submit']))
       {
          // echo '<script type="text/javascript"> alert("Successfully Registerd!")</script>';
          $username = $_POST['username'];
          $usermail = $_POST['usermail'];
          $usercontact = $_POST['usercontact'];
          $password = $_POST['password'];
          $cpassword = $_POST['cpassword'];
          
          if($password==$cpassword)
          {

               $encrypted_password = md5($password);  
               $query= "select * from userinfo WHERE usermail='$usermail'";

               $query_run = mysqli_query($con,$query);

               if(mysqli_num_rows($query_run)>0)
               {
                  //There is already a user with the same usermail
                  echo '<script type="text/javascript"> alert("User already exist!...Try another Usermail")</script>';
               }
               else
              {
                  $query= "insert into userinfo values('','$username','$usermail','$usercontact','$encrypted_password',current_timestamp())";
                  $query_run = mysqli_query($con,$query);

                   if($query_run)
                   {
                    echo '<script type="text/javascript"> alert("Successfully Registerd! Go to Login page")</script>';
                   }
                   else
                   {
                    echo '<script type="text/javascript"> alert("Error!")</script>';
                   }
               }
          }
          else
          {
            echo '<script type="text/javascript"> alert("Password and  Conform password does not match")</script>';  
          }
      
        }

      ?>
    </div>
   
</body>

</html>