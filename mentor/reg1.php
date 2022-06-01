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

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
         
		
		
		
      </nav><!-- .navbar -->
     <a href="index.php" class="get-started-btn" style='font-weight:bold !important;;font-size:15px !important;background-color:#3575D3;color:white !important'>Home </a>

      

    </div>
  </header><!-- End Header -->
 <header id="header" class="fixed-top" style=';;margin-top:52px;height:5px;background-color:rgba(0,0,0,0)'>
       <?php
  
      echo "<B style=';margin-left:1170px;;font-size:13px;color:black'>" .date('d F, Y (l)'). " </B>";
	  
    ?>
	   <iframe src="http://free.timeanddate.com/clock/i7uvf0e9/n1738/tct/pct/ftb" frameborder="0" width="81" height="18" style='margin-left:1230px' allowtransparency="true"></iframe>

	</header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style='background:linear-gradient(to right,#3575D3,#3575D3,white) !important' >
      <div class="container" >
        <h2>Registration Successfull !</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      
      <div class="container"  >
         
		 <div style=';height:auto;;background-color:#f6fcf8;margin-left:-120px 
		 ;margin-right:-116px;margin-top:-10px '>
           
		   <?php
$dist=$_POST["cit"];
$cnm=$_POST["c1"];
$fname=$_POST["f1"];
$mname=$_POST["m1"];
$mino=$_POST["mn"];
$scat=$_POST["ct"];
$gen=$_POST["r1"];
$state=$_POST["st"];
$DOB=$_POST["da"];




$nationality=$_POST["n1"];
$mobileno=$_POST["p1"];
$religion=$_POST["re"];
$enrollno=$_POST["e1"];
$aadharno=$_POST["a1"];
move_uploaded_file($_FILES["image"]["tmp_name"],"imagesregistered/".$_FILES["image"]["name"]);

$pic=$_FILES["image"]["name"];

if (empty($_POST["or"]))
     
	 {$orphan = " ";}
     else
     {
     

$orphan=$_POST["or"];
}
$orphan=implode(",",(array)$orphan);
//$ward=$_POST["un"];
//$phyhand=$_POST["ph"];
$session=$_POST["ses"];
$degty=$_POST["de"];

$degree=$_POST["deg"];




$tenpass=$_POST["psye"];

$twelvepass=$_POST["twepass"];


$con=mysqli_connect("localhost","root","","examport");
$r=mysqli_query($con,"insert into registration(District,Candidatename,Fathername,Mothername,Minority,
                       Studentcat,Gender,State,DOB,Nationality,Mobileno,Religion,enrollno,aadharno,orp,
               Session,Degreetype,Degree,tenpassye,Twelvepass,Pic)
                   values('$dist','$cnm','$fname','$mname','$mino','$scat','$gen','$state','$DOB','$nationality',
				   '$mobileno','$religion','$enrollno','$aadharno','$orphan','$session','$degty','$degree','$tenpass','$twelvepass','$pic')");
if($r)
{
?>
 <form action='portal.php'>
					     <br><br><br><br>
					    <table rules='none' align='center' cellspacing=0 cellpadding=10 width=1000>
					        <tr>
							   <td colspan=2 style='color:green;font-size:20px' align='center'><B>
							      YOUR REGISTRATION HAS BEEN COMPLETED SUCCESSFULLY.
							   </td>
							 </tr>
							
							 <tr>
							    <td width=500 align='right' style='color:green;font-size:18px';><B>
								  <?php 
								  
								    $con=mysqli_connect("localhost","root","","examport");
									 $r=mysqli_query($con,"select * from registration ");
									 $sno=1;
									 while($row=mysqli_fetch_array($r))
									 {
									     $sn=$row[0];
										 
									  }
									     $st=89;
									     $date=date_create("$DOB");
									   //  echo $st,date_format($date,"Ymd"),$sn;
								         $gh=$st.date_format($date,"Ymd").$sn;
										 $sea='I SEM';
										 echo "Your registration ID is: ";
									 
									 $con=mysqli_connect("localhost","root","","examport");
									 $r=mysqli_query($con,"update registration set RegistrationID='$gh'  where
									              Id='$sn' ");
												  $r=mysqli_query($con,"update registration set Sem='$sea'  where
									              Id='$sn' ");
									 $examformid=mysqli_query($con,"insert into examform(cname,fname,mname,minority,
                       category,gender,state,birth,nation,mno,religion,enroll,adhar,degrees,scategory,medium,coursess,RegistrationID,tenpassyear,twelvepassyear)
               values('$cnm','$fname','$mname','$mino','$scat','$gen','$state','$DOB','$nationality',
				   '$mobileno','$religion','$enrollno','$aadharno','$degty','Regular','English','$degree',$gh,'$tenpass','$twelvepass')");
									
						
                                  ?>								   
						        </td>	
                                 <td width=500 align='left' style='color:purple;font-size:21px';><B>
								 <?php echo $gh;?></td>								
                             </tr>	
							 
							 <tr>
							    <td colspan=2 align='center' style='color:red;font-size:17px';><B>(Please note down your registration ID properly)</td>
							 </tr>
							 
                            <tr>
							  <td align='right' style='color:green;font-size:18px';><B>
							     <?php
                                      echo "Your DOB is:";$DOB;
                                 ?>								 
							  
							  </td>
							  <td align='left'style='color:purple;font-size:21px';><B><?php echo $DOB;?></td>
                            </tr>	

                          <tr>
                          <td colspan=2 align='center'>
						        <input type='submit' value='DONE' style="background-color:#4CBB17;width:150px;font-weight:bold;font-size:18px;height:32px;">
						  </td>
                          <tr>	
<tr>
<td colspan=2>
</td>
</tr>	
<tr>
<td colspan=2>
</td>
</tr>	
<tr>
<td colspan=2>
</td>
</tr>	
<tr>
<td colspan=2>
</td>
</tr>						  
					 
					
					
					
				
				
				
				        </table>
                     </form>				
	   
	   
	   
      </div>
      
    </div>
  </div>
   
   
</section>





<?php
}
else
echo mysqli_error($con);

?>




  
  
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
          Designed by <a href="https://bootstrapmade.com/" style='font-weight:bold;color:#3575D3'>Bhavya Sharma</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter" style='background-color:#3575D3'><i style='color:white' class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook" style='background-color:#3575D3'><i style='color:white'  class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram" style='background-color:#3575D3'><i style='color:white'  class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus" style='background-color:#3575D3'><i style='color:white'  class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin" style='background-color:#3575D3'><i style='color:white'  class="bx bxl-linkedin"></i></a>
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