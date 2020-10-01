<?php
session_start();
if($_SESSION['login']!=true)
{
    header('location:index.php');
    exit;
    }   
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
  <title>cityWeather</title>
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Roboto:100,300,400,500,700|Philosopher:400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/vendor/modal-video/css/modal-video.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="wmain.css" />
</head>

<body>
   <a href="home.php"> <button  type="button" class="btn btn-outline-primary">Home</button></a>
 <?php 
  echo $_SESSION['usermail'];
  ?>
  <div class="app-wrap">
    <main>
      <section class="location">
        <div class="city"></div>
        <div class="date"></div>
      </section>
      <div class="current">
        <div class="temp">City Weather</div>
        <div class="weather"></div>
        <div class="hi-low"></div>
        <header>
          <input
            type="text"
            autocomplete="off"
            class="search-box"
            placeholder="Search for a city..."
          />
        </header>
      </div>
    </main>
  </div>
  <script src="wmain.js"></script>



  <!-- ======= Footer ======= -->
  <footer class="footer">
    <div class="container">
      
    </div>
   


    <div class="copyrights">
      <div class="container">
      
        <p><i>&copy; Copyrights vRai2507. All rights reserved.</i></p>
        <div class="credits">
          
          <b>Designed by VIKASH RAI</b>
        </div>
        
      </div>
    </div>

  </footer><!-- End  Footer -->

 
 
 

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/wow/wow.min.js"></script>
  <script src="assets/vendor/modal-video/js/modal-video.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/superfish/superfish.min.js"></script>
  <script src="assets/vendor/hoverIntent/hoverIntent.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>