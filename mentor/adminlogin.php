<?php
session_start();

?>

<?php

      if(isset($_POST["save"]))
	  {
	     $admin=$_POST["au1"];
		 $pass=$_POST["au2"];
	  
          $con=mysqli_connect("localhost","root","","examport");
     $r=mysqli_query($con,"select * from adminpass");
	 if($row=mysqli_fetch_array($r))
	 {
	     if($row[1]==$admin && $row[2]==$pass)
	     header("location:adminpanel.php");
		  else
        $_SESSION["err"]="Invalid Username OR Password";
	 }
	 

   

	}
?>


<script type="text/javascript" language="javascript">
	        
	      function box()
		  {
		     var userval = confirm("Are you sure you want to LOG OUT ?");
			 if(userval==true)
			 {
			    window.open("login.php","_self");
			    return true;
			 }
			 else 
			 {
			    
				 return false;
			    
			 }
		  }
		  
		 
	   </script>
	   

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
  <header id="header" class="fixed-top" >
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html" style='color:#3575D3 !important'>BMS University</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <!-- .navbar -->
    

      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style='background-color:#3575D3 !important;margin-top:62px' >
      <div class="container" >
        <h2>Department of Computer Science</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style='background-color:#f6fcf8 !important;height:auto'>
      
      <div class="container" style='height:430px' >
         
		 <div style=';;;background-color:#f6fcf8;margin-left:-120px 
		 ;margin-right:-116px;margin-top:-10px '>
           <br><br>
		   
		   <p align='center' style='font-weight:bold;'>Enter your username and password</p>
	       <br><br>
		      <div style='float:center'>
			  <?php
		
			        if(isset($_SESSION["err"]))
		          	echo   "<span style='color:red;font-weight:bold;margin-left:688px'>",$_SESSION["err"],"</span>";
		      ?>
		       <fieldset style='align:center;border:1px solid black;width:500px;margin-left:440px'>
			   <legend style='margin-top:-20px;background-color:#f6fcf8;margin-left:10px;width:165px;'>
			           Authentication
			   </legend>
			   <form action="" method='POST'>
			  
			   <table  width=500px>
			     <tr height=25px><td></td><td></td></tr>
			     <tr>  <td align='center'>Username</td>
				   <td align='center'><input type='text' required size=30 value='' name='au1' style='focus:none;outline:none; '></td>
				 </tr>
                 <tr>				 
				   <td align='center'>Password</td>
				   <td align='center'><input type='password' required  size=30 value='' name='au2' style='focus:none;outline:none; '></td>
				 </tr>
				 <tr height=20px><td></td><td></td></tr>
			    <tr><td colspan=2 align='center'>
				<button type='submit'  name='save'>LOGIN</button> 
			    <tr height=20px><td></td><td></td></tr>
			   </table>
			   </form>
			   
			   </fieldset>
		 
		         
		      </form>
		   </div>
         </div>
	  
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
          Designed by <a href="https://bootstrapmade.com/">Bhavya Sharma</a>
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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

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

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>