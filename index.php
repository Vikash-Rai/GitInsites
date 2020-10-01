<?php
  session_start();
  require 'config.php';
  ?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<img class='bg' src="bg.png" alt="">  
<div id="main">
    <center>
      <h2> USER LOGIN </h2>
      
    </center>
  
    <form  class="myform" action="index.php" method="post">
    <label><b>Usermail</b>:</label>
    <input name="usermail" type="text" class="input" placeholder="Email Address."required/><br>
    <label><b>Password:</b></label>
    <input name="password" type="password" class="input" placeholder="Password Here"required/><br>
    <input name="login" type="submit" id="login" value="LOGIN"/>
    <a href="register.php"><input type="button" id="register" value="SIGN UP"/>
    </form>
    <?php
    $login = false;
    if(isset($_POST['login']))
    {
      $usermail = $_POST['usermail'];
      $password = $_POST['password'];
      $encrypted_password = md5($password);  

      $query= "select * from userinfo WHERE usermail='$usermail' AND password='$encrypted_password'";
    
      $query_run = mysqli_query($con,$query);
      $num=mysqli_num_rows($query_run);
      if($num == 1)
      {
           $login = true;
           session_start();
           $_SESSION['login'] = true;
           $_SESSION['usermail']=$usermail;
           header('location:home.php');
      }
      else
      {
      echo '<script type="text/javascript"> alert("Invalid Credential!")</script>';
      }
    }
    
    ?>



    </div>
   
</body>

</html>