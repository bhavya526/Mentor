<?php
SESSION_START();
?>

<!DOCTYPE html>
<html lang="en">
<style>
.overlay {
  height: 0%;
  width: 100%;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: rgb(250,253,254);
  
  overflow-y: hidden;
  transition: 0.5s;
}

.overlay-content {
  position: relative;
  top: 25%;
  width: 100%;
  text-align: center;
  margin-top: 30px;
}

.overlay a {
  padding: 8px;
  text-decoration: none;
  font-size: 36px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.overlay a:hover, .overlay a:focus {
  color: #f1f1f1;
}

.overlay .closebtn {
  position: absolute;
  top: 180px;
  right: 45px;
  font-size: 40px;
}

@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>



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

      <h1 class="logo me-auto"><a href="index.html"></a></h1>
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

	 
	  <?php
	  
	  echo "<B style='margin-right:-110px'>" .date('d F, Y (l)'). " </B>";
	  ?>
      

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style='background:linear-gradient(to right,#3575D3,#3575D3,white) !important' >
      <div style='float:left'>
	     <img src='userimages/logoclg.png' style='margin-top:-17px;width:135px;margin-left:110px;height:105px'>
	  </div>
	  <div class="container" style='height:60px !important;margin-left:-460px !important;'>
		<h3 style=''>Examination Wing</h3>
        <h4 style='margin-left:120px !important'>(Department of Computer Science)</h4>
      </div>
    </div><!-- End Breadcrumbs -->

	<div style='width:100%;height:50px;background-color:#eceff2;MARGIN-TOP:-5PX;'>
		 <a href="portal.php"> <button style='border:none;margin-left:-10px;;background-color:#eceff2;margin-top:18px;height:30px;;font-size:16px'>Notifications</button> </a> 
		<a href="examform1.php"> <button style='border:none;height:30px;;background-color:#eceff2;margin-left:25px;font-size:16px;' onclick="examform1.php">Examination Forms</button> </a>
		 <a href="showadmit.php"><button style='border:none;height:30px;;background-color:#eceff2;margin-left:25px;font-size:16px'>Datesheet</button> </a>
		 <a href="showadmit.php"> <button style='border:none;height:30px;;background-color:#eceff2;margin-left:25px;font-size:16px' onclick="showadmit.php">Admit Cards</button></a> 
		 <a href="showadmit.php"><button style='border:none;height:30px;;background-color:#eceff2;margin-left:25px;font-size:16px'>Results</button></a>
		<a href="showadmit.php"> <button style='border:none;height:30px;;background-color:#eceff2;margin-left:25px;font-size:16px'>Re-evaluation </button></a>
         
        <a href=""> <button style=';height:30px;border:none;background-color:#eceff2;margin-left:25px;font-size:16px'>Contact Us</button></a>	

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
								echo "<ul>";
	                            while($row=mysqli_fetch_array($r))
			                     {
								    
								    echo "<p style='display:none'>$row[2]</p>";echo "<p style='display:none'>$row[3]</p>";
			                        echo "  <li><a href='#myNav?a=$row[2]&b=$row[3]' onclick='openNav()' style='color:blue;;margin-left:20px'> $row[1]</a></li><br>";
	                                 
								   }
								   echo "</ul>";
								   echo "<br>";
	                            ?>  
			 </td></form>
		  </tr>
	  
	  </table>
   </div>
</div>
	   <div id="myNav" class="overlay">
   
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
   <div class="breadcrumbs" style='background:linear-gradient(to right,#3575D3,#3575D3,white) !important' >
      <div style='float:left'>
	     <img src='userimages/logoclg.png' style='margin-top:-17px;width:135px;margin-left:110px;height:105px'>
	  </div>
	  <div class="container" style='height:60px !important;margin-left:-460px !important;'>
		<h3 style=''>Examination Wing</h3>
        <h4 style='margin-left:120px !important'>(Department of Computer Science)</h4>
      </div>
    </div>
  <div class="">
   <div style='float:left'>
    <img src='userimages/ree.jpg' style='margin-left:120px;margin-top:120px;height:230px; width:380px'/>
     </div>
	 <div style='float:right;margin-right:300px;margin-top:120px'>
	   <form action="resultpdf.php" method='POST'>
	   <?php
	     
		   echo "<span style='border-bottom:1px solid black;border-bottom-style:dotted;font-weight:bold'>$a I SEM Examination Result 2020-21 &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span><span><br>
	   <br><span style='font-size:15px;font-weight:bold;font-family:calibri'> Roll Number</span>
	     &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <input type='text' value='' name='roll' size=30px style=''>
	     <br><br><input type='submit' value='Get Result' name='submit' style='margin-left:180px;font-size:15px;font-family:calibri'>
	        <input type='reset' value='Reset' style=';font-size:15px;width:80px;font-family:calibri'>
          </form>";
		  
		  
	   ?>
	   
		  
	 
  </div>
</div>
       
	   
	   
      </div>
	   <script src="assets/js/main.js"></script>
<script>
function openNav() {
  document.getElementById("myNav").style.height = "100%";
}

function closeNav() {
  document.getElementById("myNav").style.height = "0%";
}
</script>
</body>

</html>
	  
	  