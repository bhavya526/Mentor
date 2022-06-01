<?php
session_start();


?>
<script type="text/javascript" language="javascript">
	        
	      function box()
		  {
		     var userval = confirm("Are you sure you want to LOG OUT ?");
			 if(userval==true)
			 {
			    window.open("logoutsessiondestroy.php","_self");
			    return true;
			 }
			 else 
			 {
			    
				 return false;
			    
			 }
		  }
		  
		  function allert()
		  {
		     
		     alert(
			        
			   
			 "Your data has been saved successfully!");
		     
		  }
		 
	   </script>
	   
	   <script>
	         function changestatus()
			 {
			     var status = document.getElementById("status");
				 if(status.value=="No")
				 {
				     document.getElementById("wname").disabled=true;
				 }
				 else if(status.value=="Yes")
				 {
				      document.getElementById("wname").disabled=false;
				 }
				 else
				 document.getElementById("wname").disabled=false;
			 }
	   
	   </script>
	   
	   <script>
	         function changesstatus()
			 {
			     var statuse = document.getElementById("statuss");
				 if(statuse.value=="No")
				 {
				     document.getElementById("wname1").disabled=true;
				 }
				 else if(statuse.value=="Yes")
				 {
				      document.getElementById("wname1").disabled=false;
				 }
				 else
				 document.getElementById("wname1").disabled=false;
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
    <section id="contact" class="contact" style='background-color:white !important;height:auto'>
      
      <div class="container"  >
         
		 <div style=';;;background-image:url("userimages/11.png");background-size: cover; ;margin-left:-120px 
		 ;margin-right:-116px;margin-top:-10px '>
           
	          <form action="" method="POST">

                        
<br>
<br>
<table align='center' rules='none' width=1200 cellspacing=0 cellpadding=10 style='background-color:white ' >

<div style='width:1200px;;margin-left:80px'>
	  <br>
	   
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='personal2.php'><img src='userimages/my1.jpeg' height=50,width=50 style='border:3px solid black;border-radius:32px;';></a>
<img src='userimages/line2.png' height=50, style='width:150px';>
<a href='Qualification2.php'><img src='userimages/my12.jpeg' height=50,width=50 style='border:3px solid black;border-radius:32px;box-shadow: 0px 0px 0px 5px #cf805f;';>
<img src='userimages/line2.png' height=50,width=50 style='width:150px';>
<img src='userimages/mii.jpg' height=50,width=50 style='border:3px solid black;border-radius:32px';>
<img src='userimages/line2.png' height=50,width=50 style='width:150px';>
<img src='userimages/my14.jpeg' height=50,width=50 style='border:3px solid black;border-radius:32px';>
<img src='userimages/line2.png' height=50,width=50 style='width:150px';>
<img src='userimages/my2.jpeg' height=50,width=50 style='border:3px solid black;border-radius:32px';>
<img src='userimages/line2.png' height=50,width=50 style='width:150px';>
<a href='javascript:box()'><img src='userimages/my8.png' height=50,width=50 style='';></a>

<br><br>
 &nbsp &nbsp &nbsp <a href='personal2.php' style='color:white !important; font-weight:bold'>Personal Details</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp <a href='Qualification2.php' style='color:white !important; font-weight:bold'>Qualifications</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp <a href='' style='color:white !important; font-weight:bold'>Documents</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='' style='color:white !important; font-weight:bold'>Exam Form</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp  <a href='' style='color:white !important; font-weight:bold'>Fee Payment</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='javascript:box()' style='color:white !important; font-weight:bold'>LOG OUT</a>
	   <br>
	   </div>
	   
	   
  	
   <?php
   $con=mysqli_connect("localhost","root","","examport");
   $id=$_SESSION["idd"];
   $semroll=$_SESSION['lastroll'];
   
  $sql = "SELECT * from examform  WHERE lastsemroll='$semroll' ";
      $result = mysqli_query($con, $sql); 

      $row = mysqli_fetch_array($result);
   
  if(isset($_POST['aage']))
{
       $_SESSION['year1']=$_POST['eer'];
	   $_SESSION['board1']=$_POST['bo'];
	   
	   $_SESSION['gsystem1']=$_POST['gr'];
	   
	   if (empty($_POST["cg"]))
     
	   {$_SESSION['CGPA1'] = " ";}
        else
        {
         $_SESSION['CGPA1']=$_POST['cg'];
		 }
		 
	   $_SESSION['max1']=$_POST['maxx'];
	   $_SESSION['obtained1']=$_POST['minn'];
	   $_SESSION['stream']=$_POST['str'];
	   $_SESSION['year2']=$_POST['twk'];
	   $_SESSION['board2']=$_POST['inbo'];
	  
	   $_SESSION['gsystem2']=$_POST['grr'];
	   
	   if (empty($_POST["cgg"]))
     
	   {$_SESSION['CGPA2'] = " ";}
        else
        {
          $_SESSION['CGPA2']=$_POST['cgg'];
		 }
	   
	  
	   $_SESSION['max2']=$_POST['maxxx'];
	   $_SESSION['obtained2']=$_POST['minni'];

        $con=mysqli_connect("localhost","root","","examport");
				   
				   $uptodate=mysqli_query($con,"update examform set tenpassyear='$_POST[eer]',board1='$_POST[bo]',
				         grade1='$_POST[gr]',cgpa1='$_SESSION[CGPA1]',max1='$_POST[maxx]',obtained1='$_POST[minn]',
						 stream='$_SESSION[stream]',twelvepassyear='$_POST[twk]',board2='$_POST[inbo]',grade2='$_POST[grr]',cgpa2='$_SESSION[CGPA2]',max2='$_POST[maxxx]',
						 obtained2='$_POST[minni]' where lastsemroll='$semroll'");
				   if($uptodate)
				   {
				   
				  ?> 
				  <script type="text/javascript">
				       window.location ="Doc2.php";
				  </script>
                  <?php
                   }
				   else
				   echo mysqli_error($con);	   


		 
        ?> 
				 
                  <?php		  
				   			   
}




   ?>
 <br>
	 
     <tr style='background-color:#ffbc3b;'>
	     <tr style='border-bottom:1px solid black'><td  colspan=8 style='font-size:15pt;font-weight:bold;color:#3575D3;font-family:arial;margin-left:50px';>Matriculation Marks Details</td></tr><br/>
        
     </tr>	 

		 <tr>
	 <td colspan=10></td>
	 </tr><tr>
	 <td colspan=10></td>
	 </tr>  
			   
			   
				<tr>
				
				      <td align='left' style='font-weight:Bold;color:black';>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Passing Year  :</td>
					  <td align='left' style='color:red';>
					        <input  type='text' name='eer' value='<?php echo $row[30];?>' size=30 style='height:29px;'>
						</td>
		
					<td></td><td></td><td></td><td></td><td></td>
					   <td align='left' style='font-weight:Bold ;color:black';> Board  :</td>
					   <td align='left'>
	                       <select name='bo' required style='width:266px; height:29px;'>
	                             <option value='<?php echo $row["board1"];?>'><?php echo $row["board1"];?></option>
	                             <option value='CBSE'>CBSE</option>
	                             <option value='ICSE'>ICSE</option>
	                             <option value='State Board'>State Board</option>
	                             <option value='Others'>Others</option>
	                       </select>
                       </td>
	                 </tr>
					 
					
                     
					 <tr>
					     <td align='left' style='font-weight:Bold;color:black';>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Grading System  :</td>
						 <td align='left' style='color:red';>
						       <select name='gr' required style='width:267px; height:29px;' id="status" onchange="changestatus()" >
							          <option value="<?php echo $row["grade1"];?>" ><?php echo $row["grade1"];?></option>
									  <option value='No'>No</option>
									  <option value='Yes'>Yes</option>
							    </select>*
						  </td>
						  <td></td><td></td><td></td><td></td><td></td>
					     <td align='left' style='font-weight:Bold;color:black'; >CGPA  :</td>
						 <td><input type='text' name='cg' value='<?php echo $row["cgpa1"];?>' id="wname"  required size=30px style='height:29px;'></td>
					 </tr>
					 
					 <tr>
					    <td align='left' style='font-weight:Bold;color:black';>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Maximum Marks  :</td>
						 <td><input type='text' name='maxx' value='<?php echo $row["max1"];?>' required size=30px style='height:29px;'></td>
					
					 <td></td><td></td><td></td><td></td><td></td>
					
					    <td align='left' style='font-weight:Bold;color:black';>Marks Obtained :</td>
						 <td><input type='text' name='minn' value='<?php echo $row["obtained1"];?>' required size=30px style='height:29px;'></td>
					 </tr>
			
			
			<tr><td colspan=10></td>
            </tr>		<tr>
	 <td colspan=10></td>
	 </tr>	
								
            <tr style='background-color:#ffbc3b'>
			  
               <tr style='border-bottom:1px solid black'><td  colspan=8 style='font-size:15pt;font-weight:bold;color:#3575D3;font-family:arial;margin-left:50px';>Intermediate Marks Details</td></tr><br/>           
		   </tr>			
				<tr><td colspan=10></td>
            </tr>		<tr>
	 <td colspan=10></td>
	 </tr>	
                  <tr>
					     
						  
						  <td align='left' style='font-weight:Bold;color:black';>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Passing Year  :</td>
						 <td  align='left' style='color:red';>
					        <input  type='text' name='twk' value='<?php echo $row[37]; ?>' size=30 style='height:29px;'>
						</td>

						  </tr>
						   <tr>
					   <td align='left' style='font-weight:Bold;color:black';>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Board  :</td>
					   <td align='left'>
	                       <select name='inbo' required style='width:266px; height:29px;'>
	                             <option value="<?php echo $row["board2"];?>" ><?php echo $row["board2"];?></option>
	                             <option value='CBSE'>CBSE</option>
	                             <option value='ICSE'>ICSE</option>
	                             <option value='State Board'>State Board</option>
	                             <option value='Others'>Others</option>
	                       </select>
                       </td>
	                    <td></td><td></td><td></td><td></td><td></td>
					     <td align='left' style='font-weight:Bold;color:black';>Stream  :</td>
						 <td  align='left' style='color:red';>
						       <select name='str' required style='width:266px; height:29px;'>
							          <option value="<?php echo $row["stream"];?>"><?php echo $row["stream"];?></option>
									  <option value='COMMERCE'>COMMERCE</option>
									  <option value='COMMERCE(WITH MATHS)'>COMMERCE(WITH MATHS)</option>
									  <option value='PCM + COMPUTER'>PCM + COMPUTER</option>
									  <option value='PCB + ENGLISH'>PCB + ENGLISH</option>
									  <option value='ARTS'>ARTS</option>
							    </select>*
						  </td>
						 
					 </tr>	
                    	

                     	

               			<tr>
					     <td align='left' style='font-weight:Bold;color:black';>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Grading System  :</td>
						 <td align='left' style='color:red';>
						       <select name='grr' required style='width:266px; height:29px;' id="statuss" onchange="changesstatus()">
							          <option value="<?php echo $row["grade2"];?>"><?php echo $row["grade2"];?></option>
									  <option value='No'>No</option>
									  <option value='Yes'>Yes</option>
							    </select>*
						  </td>
						  <td></td><td></td><td></td><td></td><td></td>
					     <td align='left' style='font-weight:Bold;color:black';>CGPA  :</td>
						 <td><input type='text' name='cgg' id="wname1" value='<?php echo $row["cgpa2"];?>' required size=30px style='height:29px;'></td>
					 </tr>		  
					  
					  <tr>
					    <td align='left' style='font-weight:Bold;color:black';>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Maximum Marks  :</td>
						 <td><input type='text' name='maxxx' value='<?php echo $row["max2"];?>' required size=30px style='height:29px;'></td>
					
					 <td></td><td></td><td></td><td></td><td></td>
					
					    <td align='left' style='font-weight:Bold;color:black';>Marks Obtained :</td>
						 <td><input type='text' name='minni' value='<?php echo $row["obtained2"];?>' required size=30px style='height:29px;'></td>
					 </tr>
					 <tr>
	   
	</tr>
					 <tr><td></td></tr>
					 <tr><td></td></tr>
					  
					  <tr><td colspan=10 align='center' >
					 
					   
					  <input type='submit' value='SAVE & NEXT' name='aage' style='background-color:#3575D3; width:180px;
	   height:45px;font-weight:bold;border:none;color:white'></td>
					  </tr>
					  <tr>
					  <td colspan=10></tr>
					  </tr>
				</table>
				
				</form>


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
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center" style='background-color:#3575D3'><i  class="bi bi-arrow-up-short"></i></a>

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
