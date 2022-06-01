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

      <h1 class="logo me-auto"><a href="index.html" style='font-weight:bold;color:#3575D3 !important'><img src='userimages/logoclg.png' style='width:50px;height:65px;'>&nbsp BMS University</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

     
     

      

    </div>
  </header><!-- End Header -->
 <header id="header" class="fixed-top" style=';;margin-top:3px;height:5px;background-color:rgba(0,0,0,0)'>
       <?php
  
      echo "<B style=';margin-left:1170px;;font-size:13px;color:black'>" .date('d F, Y (l)'). " </B>";
	  
    ?>
	   <iframe src="http://free.timeanddate.com/clock/i7uvf0e9/n1738/tct/pct/ftb" frameborder="0" width="81" height="18" style='margin-left:1230px' allowtransparency="true"></iframe>

	</header><!-- End Header -->
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
           
	          <form action="" method="POST">

                        
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
	             <form action="" method='POST'>
	   <br>
			<div style='margin-left:20px' >
			<?php
              $opp=$_SESSION["app"];
              
                 ?>
				 <table border=1 align='center' rules='none' cellspacing=0 cellpadding=5 width=320px height=330px style='background:url(otp5.jpeg);background-size:cover;'>
			  <?php
			      
				 
                  if(isset($_POST['finalpay']))
                  {   
				      
				      $con=mysqli_connect("localhost","root","","examport");
	                  
					  $res=mysqli_query($con,"update reevallist SET status='Paid' where roll='$opp'   ");
					  
					  
					  ?> 
				        <script type="text/javascript">
				           window.location ="revalsuccess.php";
				        </script>
                     <?php		  
				   			   
                  }
             ?>
				
				<tr>
				   <td>
				   </td>
				</tr>
				<tr>
				    <td align='center' style='color:black;font-weight:bold;font-size:18px'>Enter One Time Password (OTP)</td>
			   </tr>
			   <tr>
                     <td style='color:black;font-size:13px' align='center'>One Time Password(OTP) has been sent to the mobile number linked to your card number, please enter the same
                              here to make a payment.</td>					 
			   </tr>
			   <tr>
			        <td align='center'>
					    <input type='text' value='' maxlength=6 name='otp' required placeholder='OTP'>
					</td>
			   </tr>
			   <tr>
			        <td align='right' style='color:blue;font-size:13px;font-weight:bold'>
					    <a>Resend OTP</a>
					</td>
			   </tr>
			    <tr>
			        <td align='center'>
					    <input type='submit' value='Pay' name='finalpay' style='height:30px;width:200px; background-color:#3575D3;font-weight:bold'>
					</td>
			   </tr>
						  
						   
						   
               </table>
				 
				 
				 
           
			   </div>
			   </form>
      </div>
	 
	
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 