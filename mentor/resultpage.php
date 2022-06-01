<?php
SESSION_START();
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

      <h1 class="logo me-auto"><a href="index.html" style='color:#3575D3 !important;font-weight:bold'>BMS University</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          

          
          <li><a  href="contact.php">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
		
		
		
      </nav><!-- .navbar -->
     <a href="registration.php" class="get-started-btn" style='background-color:#3575D3;color:white !important;font-weight:bold !important;font-size:15px !important'>Register Here </a>

    </div>
  </header><!-- End Header -->

  <header id="header" class="fixed-top" style=';;margin-top:52px;height:5px;background-color:rgba(0,0,0,0)'>
       <?php
  
      echo "<B style=';margin-left:1170px;;font-size:13px;color:black'>" .date('d F, Y (l)'). " </B>";
	  
    ?>
	   <iframe src="http://free.timeanddate.com/clock/i7uvf0e9/n1738/tct/pct/ftb" frameborder="0" width="81" height="18" style='margin-left:1230px' allowtransparency="true"></iframe>

	</header>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style='background:linear-gradient(to right,#3575D3,#3575D3,white) !important' >
      <div style='float:left'>
	     <img src='userimages/logoclg.png' style='margin-top:-27px;width:140px;margin-left:110px;height:110px'>
	  </div>
	  <div class="container" style='height:60px !important;margin-left:-460px !important;'>
		<h3 style='margin-top:-15px'>Examination Wing</h3>
        <h4 style='margin-left:120px !important'>(Department of Computer Science)</h4>
      </div>
    </div>

	<div style='width:100%;height:50px;background-color:#eceff2;MARGIN-TOP:-5PX;'>
		 <a href="portal.php"> <button style='border:none;margin-left:40px;;background-color:#eceff2;margin-top:18px;height:30px;;font-size:16px'>Notifications</button> </a> 
		<a href="examform1.php"> <button style='border:none;height:30px;;background-color:#eceff2;margin-left:50px;font-size:16px;' onclick="examform1.php">Examination Forms</button> </a>
		 
		 <a href="showadmit.php"> <button style='border:none;height:30px;;background-color:#eceff2;margin-left:50px;font-size:16px' onclick="showadmit.php">Admit Cards</button></a> 
		 <a href="resultpage.php"><button style='border:none;height:30px;;background-color:#eceff2;margin-left:50px;font-size:16px'>Results</button></a>
		<a href="showreeval.php"> <button style='border:none;height:30px;;background-color:#eceff2;margin-left:50px;font-size:16px'>Re-evaluation </button></a>
         
       

		</div>
	
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      
      <div class="container"  >
         
		 <div style=';height:auto;;margin-left:-120px 
		 ;margin-right:-116px;margin-top:-10px '>

   
   <br>
   
   <br><br>
   <div style='height:auto;width:100%; '>
      <table border=1 style='border-style:dotted' width=700px cellpadding=10 cellspacing=0 align='center'>
	      <tr style='border-bottom-color:#e7f8ec'>
		     <td style='height:auto'>
			    <img src='userimages/results.jpg' style='width:100%;height:90px'>
		     </td>
		  </tr>
		  
		  
		  <tr style='border-top-color:#e7f8ec;'>
		     <td ><form>
			       <?php
	                        
	                              $con=mysqli_connect("localhost","root","","examport");
			                      $r=mysqli_query($con,"select * from resultupload ORDER BY Id DESC");
	 
	                            echo "<br>";
								echo "<table style='margin-top:-140px'><ul>";
	                            while($row=mysqli_fetch_array($r))
			                     {
								    
								    echo "<tr><td><p style='display:none'>$row[2]</p>";echo "<p style='display:none'>$row[3]</p>";
			                        echo "  &nbsp <li><a href='resultdownload.php?a=$row[2]&b=$row[3]&c=$row[4]'  style='color:blue;;margin-left:20px'> $row[1]</a> </td> 
									             <td><span style='margin-left:250px;font-size:12px;color:blue'>Declared on $row[4]</span></td></tr></li><br>";
	                                 
								   }
								   echo "</table></ul>";
								   echo "<br>";
	                            ?>  
			 </td></form>
		  </tr>
	  
	  </table>
   </div>
</div>
	  
	  
	  
	  
	  
	  
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

  

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
          Designed by <a href="https://bootstrapmade.com/" style=' font-weight:bold;color:#3575D3;'>Bhavya Sharma</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter" style=' background-color:#3575D3;'><i style='color:white' class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook" style=' background-color:#3575D3;'><i style='color:white' class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram" style=' background-color:#3575D3;'><i style='color:white' class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus" style=' background-color:#3575D3;'><i style='color:white' class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin" style=' background-color:#3575D3;'><i style='color:white' class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style=' background-color:#3575D3;'><i class="bi bi-arrow-up-short"></i></a>

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