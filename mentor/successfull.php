<?php
session_start();


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
   <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <h1 class="logo me-auto"><a href="index.html" style='color:#3575D3 !important'><img src='admin images/locl.png' style='height:44px;width:55px'>&nbsp BMS University</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="logoutsessiondestroy.php" style='margin-left:-120px'>Home</a></li>
          

          
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
		
		
		
      </nav>
     

      

    </div>
  </header><!-- End Header -->
  <header id="header" class="fixed-top" style=';;margin-top:53px;height:5px;background-color:rgba(0,0,0,0)'>
       <?php
  
      echo "<B style=';margin-left:1170px;;font-size:13px;color:black'>" .date('d F, Y (l)'). " </B>";
	  
    ?>
	   <iframe src="http://free.timeanddate.com/clock/i7uvf0e9/n1738/tct/pct/ftb" frameborder="0" width="81" height="18" style='margin-left:1230px' allowtransparency="true"></iframe>

	</header>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style='background:linear-gradient(to right,#3575D3,#3575D3,white) !important;margin-top:60px' >
      <div class="container" >
        <h2 style='margin-top:5px'>Examination Form 21-22</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style='background-color:#f6fcf8 !important;height:auto'>
      
      <div class="container"  >
         
		 <div style=';;;background-color:#f6fcf8;margin-left:-120px 
		 ;margin-right:-116px;margin-top:-10px '>
           
	          <form  method="POST">

                        
<br>
<br>



	   
	     
  
     
   
   <div style='width:1200px;background-color:white'>                       
	 

	   </div>
    
	   <script type='text/javascript'>
	        
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
	   
	   </div>
	  <br>
	    
			<div style='' >
			
               <div style='' >
			   
			     <table center='align' rules='none' border=3 cellspacing=0  cellpadding=10 width=1200px style='margin-left:-40px;margin-top:-70px;border-left:1pt solid white;border-right:1pt solid white'>
				 
				 
                     <?php
					           $pooll=$_SESSION["displayregID"];
					      //     $opp=$_SESSION["registration"];
                          //       $id=$_SESSION["idd"];
                                 $con=mysqli_connect("localhost","root","","examport");
                                 $r=mysqli_query($con,"select * from examform where RegistrationID='$pooll'");
                                 $row=mysqli_Fetch_row($r);
   
					  ?>			       
				   <tr>
                       <td colspan=3 align='center' style='color:black;font-weight:bold;font-size:22px'>
                           	Department of Computer Sciences ,BMS University 			   
			           </td>
					 </tr>
					 <tr>
					   <td colspan=3 style='color:black;font-weight:bold;font-size:18px' align='center'> <?php echo $row[28]," "," " ,$row[29];?>&nbsp Examination Form</td>
					 </tr>
					 <tr style='border-bottom:3pt solid black' >
					   <td colspan=3 style='color:black;font-weight:bold;font-size:15px' align='center'><?php echo $row[24] ?></td>
					 </tr>
					 
					 <tr>
					    <td style='color:black;font-size:15px;width:380px;font-weight:bold' >&nbsp &nbsp &nbsp Student Name : </td>
						<td style='color:black;font-size:15px;width:580px;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp<?php echo $row[1]; ?> </td>
						<td rowspan=5><img src="uploadedimages/<?php echo $row[43]; ?>" style='width:200px;height:200px'></td>
					 </tr>
					 <tr>
					    <td style='color:black;font-size:15px;width:250px;font-weight:bold' >&nbsp &nbsp &nbsp Mother Name : </td>
						<td style='color:black;font-size:15px;width:450px;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp<?php echo $row[3]; ?> </td>
						
					 </tr>
					 <tr>
					    <td style='color:black;font-size:15px;width:250px;font-weight:bold' >&nbsp &nbsp &nbsp Father Name : </td>
						<td style='color:black;font-size:15px;width:450px;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp<?php echo $row[2]; ?> </td>
						
					 </tr>
					 <tr >
					     <td style='color:black;font-size:15px;width:250px;font-weight:bold' >&nbsp &nbsp &nbsp Application No. : </td>
						 <td style='color:black;font-size:15px;width:450px;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp <?php echo $row[52]; ?></td>
					 </tr>
					 <tr>
					     <td style='color:black;font-size:15px;width:250px;font-weight:bold' >&nbsp &nbsp &nbsp Status: </td>
						 <td style='color:blue;font-size:15px;width:450px;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp FORM FILLED SUCCESSFULLY</td>
					 </tr>
					 <input type='text' value='<?php echo $row[52] ?>' name='app' style='display:none'>
					  <tr >
					    <td colspan=3 align='center'><input type='submit' formaction="examinationform.php" value='Download Examination Form' name='download' style='color:white;background:#3575D3;font-weight:bold;height:28px'>
						<input type='submit' value='Download Challan' name='download1' formaction="challan.php" style='color:white;background:#3575D3;font-weight:bold;height:28px'>
						</td>
					 </tr>
					 
					

			     </table>
				</div>
             </div>
	        </form>
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
<script>
if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>

</html>
