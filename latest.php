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

  <title>Urlworld</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">
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
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header header-hide">
    <div class="container">

      <div id="logo" class="pull-left">
      <h1><a href="#"  class="scrollto"><img src ="iconl.png"></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#body"><img src="assets/img/logo.png" alt="" title="" /></a>-->
        
      </div>

      

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="home.php">Home</a></li>
          <li><a href="about.html">About Us</a></li>
          <li><a href="latest.php">URL World</a></li>
          <li class="menu-has-children"><a>Student</a>
            <ul>
              <li><a href="#">Acad.Calendars</a></li>
              <li><a href="#">Syllabus</a></li>
              <li><a href="#">Notes</a></li>
              <li><a href="#">Quantums</a></li>
              <li><a href="schedule.html">Time Tables</a></li>
            </ul>
          </li>
           
          <li>
          <div class="social-fonts">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
          
          </li>
           <li><a href="darklatest.php"><svg class="bi bi-moon" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.53 10.53a7 7 0 01-9.058-9.058A7.003 7.003 0 008 15a7.002 7.002 0 006.53-4.47z" clip-rule="evenodd"/>
</svg></a></li> 
         <li><a href="weather.php"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-cloud" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
        </svg></a></li> 
       
        <li><a>
            <form action="home.php" method="post">
           <input name="logout" type="submit" id="logout" value="Logout"/>
           </form>

           <?php
                  if(isset($_POST['logout']))
                        {
                            session_destroy();
                             header('location:index.php');
                        }   

           ?>
          </a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->
  
  <?php 
  echo $_SESSION['usermail'];
  ?>


    <section id="pricing" class="padd-section text-center wow fadeInUp">

      <div class="container">
        <div class="section-title text-center">

          <h2><b>Latest Updates</b></h2>
          <p class="separator"><em>Updated few seconds ago</em></p>

        </div>
      </div>

      

      <div class="container">
        <div class="row">

          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="table">
                <h2><ins>Active Forms</ins></h2>
                <ul class="list-unstyled">
                  <li><b><a href="">link1</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link2</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link3</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link4</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link5</a></b></li>
                  <li><a>Inactive link</a></li>
                  
                 
                </ul>
                
              </div>
            </div>
          </div>

         <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="table">
                <h2><ins>Admit Cards</ins></h2>
                <ul class="list-unstyled">
                  <li><b><a href="">link1</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link2</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link3</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link4</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link5</a></b></li>
                  <li><a>Inactive link</a></li>
                  
                 
                </ul>
                
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="table">
                <h2><ins>Results</ins></h2>
                <ul class="list-unstyled">
                  <li><b><a href="">link1</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link2</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link3</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link4</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link5</a></b></li>
                  <li><a>Inactive link</a></li>
                  
                 
                </ul>
                
              </div>
            </div>
          </div>


         <div class="col-md-6 col-lg-3">
            <div class="block-pricing">
              <div class="table">
                <h2><ins>Admissions</ins></h2>
                <ul class="list-unstyled">
                  <li><b><a href="">link1</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link2</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link3</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link4</a></b></li>
                  <li><a>Inactive link</a></li>
                  <li><b><a href="">link5</a></b></li>
                  <li><a>Inactive link</a></li>
                  
                 
                </ul>
                
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- End Pricing Section -->


  
  <footer class="footer">
    <div class="container">
      <div class="row">

        <div class="col-md-12 col-lg-4">
          <div class="footer-logo">
          

            <a class="navbar-brand" href="#" ><h1>Insites</h1></a>
            
            <p>Student Friendly Website.</br>We always care for our customer.</br>Website will be published soon</p>


            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>
            

          </div>
          
        </div>
        
           

          </div>
        </div>


     
      </div>
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

 
 
 
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

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