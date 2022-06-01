<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Examination Wing</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Mentor - v4.3.0
  * Template URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

     <h1 class="logo me-auto"><a href="index.html" style='color:#3575D3 !important'><img src='admin images/locl.png' style='height:44px;width:55px'>&nbsp BMS University</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
         
		
		
		
      </nav><!-- .navbar -->
     <a href="index.php" class="get-started-btn" style='font-weight:bold !important;background-color:#3575D3;color:white !important;font-size:16px !important'>Home </a>

      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style='background:linear-gradient(to right,#3575D3,#3575D3,white) !important' >
      <div class="container" >
        <h2>Login Form</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style='background-color:white !important;height:600px'>
      
      <div class="container"  >
         
		 <div style=';;;background-color:white;margin-left:-120px 
		 ;margin-right:-116px;margin-top:-10px '>
           
	         <form action='loginvalid.php' method='POST'>
	   
	   
	   
	   <br><br>
	   
        <h3 class="section-title" style='margin-left:80px;font-weight:bold;color:black;'>LOGIN HERE</h3>
		<?php
		
			if(isset($_SESSION["err"]))
			echo   "<span style='color:red;font-weight:bold'>",$_SESSION["err"],"</span>";
		?>
        <?php
		   if(isset($_GET['a']))
		   {
		   $_SESSION["mesem"]=$_GET['a'];
		   
		   }
		  
		   
		?>
      </div>
    </div>
    <div  class="" style='margin-left:70px;float:left;width:50%;background-color:white !important';>
      <div class="col-lg-7 mb-4 mb-lg-0" >
	  
        <form action='loginvalid.php' method='POST'>
		
		   <?php
		      $id=$_SESSION["mesem"];
			  
		          if($id=='I SEM')
				  {
		   ?>
                <input type="text" class="form-control mb-3" style='width:500px' name="reg" placeholder="Registration ID" required>
          <?php
		       }
		         else
				 {     
		 ?>
		     
		       <input type="text" class="form-control mb-3" style='width:500px' name="regi" placeholder="Roll no (last semester)" required>
		 <?php
		  }
		  ?>
		  
		       
		  <input type="date" class="form-control mb-3" style='width:500px' name="pa" placeholder="Date of Birth" required>
		  

		  
		  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		  &nbsp <img src="captcha.php"><br><br>
		  
          <input type="text" class="form-control mb-3" style='width:500px' name="ca" placeholder="Captcha here" required>
          
          <button type="submit" value="send"  style='width:500px;background-color:#3575D3;border-color:white' class="btn btn-primary">LOGIN HERE</button><br>
		    
		
        </form>

         </div>
	  
      </div>
	  <div style='float:right;'>
	    &nbsp <image src='userimages/kk.jpeg' width='560px' ><br><br><br>
		
		<span style='font-size:18;margin-left:340px;font-weight:bold'><a href='getID.php' style='color:Green'>Forgot Registration ID??</a>
		</span>
        		
	
	</div>
	
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer style='margin-top:-30px' id="footer">

   

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>BMS University</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/" style='color:#3575D3;font-weight:bold'>Bhavya Sharma</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter" style='background-color:#3575D3'><i style='color:white' class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook" style='background-color:#3575D3'><i style='color:white' class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram" style='background-color:#3575D3'><i style='color:white' class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus" style='background-color:#3575D3'><i style='color:white' class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin" style='background-color:#3575D3'><i style='color:white' class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style='background-color:#3575D3'><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/purecounter/purecounter.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php

  $_SESSION["err"]="";
?>