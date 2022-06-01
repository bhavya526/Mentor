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
 <div >
   
  
   
  <div class="">
   <div style='float:left'>
    <img src='userimages/write.jpg' style='margin-left:120px;margin-top:50px;height:230px; width:400px'/>
     </div>
	 <div style='float:right' style=';margin-right:300px;margin-top:90px'>
	   <form action="" method="POST">
	      <?php
		    $a=$_REQUEST["ai"];
		    $b=$_REQUEST["b"];
			
			$_SESSION["a"]=$a;
			$_SESSION["b"]=$b;
			
			
		  ?>
	
	 <table cellspacing=0 cellpadding=10 width=300px style='margin-top:50px;margin-right:300px' >
	            
	            <tr><td align='center' style='font-weight:bold'>Enter the information</td></tr>	  
			    
				<tr><td><input type='text' required size=40 value='' name='app' placeholder='Roll No.' style='height:40px'></td></tr>
			  <?php 
			 if(isset($_POST["give"]))
			 {
			     $app=$_POST["app"];
			     $con=mysqli_connect("localhost","root","","examport");
			    $r=mysqli_query($con,"select * from result where Rollno='$app' ");
				
	            if($row=mysqli_fetch_array($r))
				{
				   $_SESSION["app"]=$app;
				   ?> 
				  <script type="text/javascript">
				       window.location ="evalformfill.php";
				  </script>
                  <?php
				}
				
			 }
			 
			 
			 
			 echo "  <tr><td align='center'> <input type='submit' name='give' value='Proceed'></td></tr>
			  </table>";
			  ?>
			 
			</form>
			
			<span style='font-family:calibri;color:red;font-weight:bold'>Revaluation fee is Rs.450 per subject + Rs.50 extra for Revaluation Form</span>
			
	
	     
		 
		  
		  
	
	   
		  
	 
  </div>
</div>
       
	   
	   
      </div>
	  