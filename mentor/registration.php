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

    <h1 class="logo me-auto"><a href="index.html" style='color:#3575D3 !important'><img src='userimages/locl.png' style='height:44px;width:55px'>&nbsp BMS University</a></h1>
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

	</header>
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style='background:linear-gradient(to right,#3575D3,#3575D3,white) !important'>
      <div class="container" >
        <h2>Registration Form</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      
      <div class="container"  >
         
		 <div style=';height:auto;;background-color:#f6fcf8;margin-left:-120px 
		 ;margin-right:-116px;margin-top:-10px '>

   
   <br>
  
         <form action='reg1.php' method='POST' enctype="multipart/form-data">

<table rules='none' align='center' width=1200 cellspacing=0 cellpadding=10 >

<br/>
	  
	<tr style='border-bottom:2px solid black'><td  colspan=8 style='font-size:18pt;font-weight:bold;color:#3575D3;font-family:calibri;margin-left:50px';>Candidate's Details</td></tr><br/>
    <tr><td colspan=6></td></tr><tr><td colspan=6></td></tr>
	<tr>
	    <td align='left' style='color:black'>
                                   Candidate's Name:</td>
       <td colspan=2> <input type='text' name='c1' required value='' size=40></td>
       <td align='left' style='color:black'> District:</td>
		<td colspan=2 align='left' ><input type='text' value='' required name= 'cit' size=40;>
		
		</td>
		</tr>
	
	
    <tr>
    <td align='left' style='color:black'>Father's Name:</td>
    <td colspan=2><input required type='text' name='f1' value='' size=40></td>
    <td align='left' style='color:black'>Mother's Name:</td>
    <td colspan=2><input required type='text' name='m1' value='' size=40></td>
	</tr>
	<tr>
	<td align='left' style='color:black'>Minority:</td>
	<td colspan=2><select required name= 'mn' style="width:347px;height:29px">
	<option disabled selected hidden>-----</option>
	<option value='No'>No</option>
	<option value='Yes'>Yes</option>
	</select>
	</td>
	<td align='left' style='color:black'>Student Category:</td>
	<td colspan=2><select  name= 'ct' style="width:347px;height:29px";  required >
	<option disabled selected hidden>-----</option>
	<option value= 'General'>General</option>
	<option value= 'OBC'>OBC</option>
	<option value= 'Scheduled Caste'>Scheduled Caste</option>
	<option value= 'Scheduled Tribe'>Scehduled Tribe</option>
	</select>
	</td>
	</tr>
	<tr>
	<td align='left' style='color:black'>Gender:</td>
	<td colspan=2 style='color:black'><input type='radio' name='r1' value='Male' required >&nbsp Male
	  &nbsp &nbsp  <input type='radio' name='r1' value='Female'>&nbsp Female
		</td>
	<td align='left' style='color:black'>Domicile State:</td>
    <td colspan=2><select name= 'st' style="width:347px;height:29px" required>
    <option disabled selected hidden>-----</option>
	<option value= 'Andhra Pradesh'>Andhra Pradesh</option>
	<option value= 'Aruncachal Pradesh'>Arunachal Pradesh</option>
	<option value= 'Assam'>Assam</option>
	<option value= 'Bihar'>Bihar</option>
    <option value= 'Chattisgrah'>Chattisgarh</option>
	<option value= 'Goa'>Goa</option>
	<option value= 'Gujarat'>Gujarat</option>
	<option value= 'Haryana'>Haryana</option>
    <option value= 'Himachal Pradesh'>Himachal Pradesh</option>
	<option value= 'Jharkhand'>Jharkhand</option>
	<option value= 'Karnataka'>Karnataka</option>
	<option value= 'Kerala'>Kerala</option>
    <option value= 'Madhya Pradesh'>Madhya Pradesh</option>
	<option value= 'Maharashtra'>Maharashtra</option>
	<option value= 'Punjab'>Punjab</option>
	<option value= 'Rajasthan'>Rajasthan</option>
	</select>
	</td>
	</tr>
	<tr>
	    <td align='left' style='color:black'>Date Of Birth:</td>
	     <td colspan=2>
		 
		 <input required type='date' name='da' value=''>
		
		 </td>
		 <td align='left' style='color:black'>Nationality:</td>
	<td colspan=2 style='color:black'><input type='radio' name='n1' value='Indian' required>&nbsp Indian
	  &nbsp &nbsp &nbsp  <input type='radio' name='n1' value='Other'>&nbsp Other
		</td>
		</tr>
		<tr>
		<td align='left' style='color:black'>Mobile No:</td>
		<td colspan=2><input required type='text' name='p1' value=''size=40 maxlength=10></td>
		<td align='left' style='color:black'>Religion:</td>
		<td colspan=2><select required name= 're' style="width:347px;height:29px">
	    <option disabled selected hidden>-----</option>
	    <option value= 'Buddha'>Buddha</option>
	    <option value= 'Christian'>Christian</option>
	    <option value= 'Hindu'>Hindu</option>
	    <option value= 'Islam'>Islam</option>
		<option value= 'Muslim'>Muslim</option>
		<option value= 'Other'>Other</option>
	    </select>
	    </td>
		</tr>
		<tr>
		<td align='left' style='color:black'>Enrollment No:</td>
		<td colspan=2><input type= 'text' required name='e1' value='' size=40 maxlength=11></td>
		<td align='left' style='color:black'>Aadhar No:</td>
		<td colspan=2><input type= 'text' required name='a1' value='' size=40 maxlength=12></td>
		</tr>
		<tr><td></td></tr><tr><td></td></tr>
		<tr >
	     <td style='color:black' >Photo: </td>
		 <td colspan=5 align='left' ><input required type='file' name='image' ></td>
	 </tr>
		
		<tr ><td colspan=6></td></tr><tr><td></td></tr>
		

    <tr><td align='right' style='color:black'>Is Orphan?</td>
        <td><input type='checkbox' name='or[]' value='Is Orphan?'></td>
		<td align='right' style='color:black'>Is University Ward?</td>
        <td><input type='checkbox' name='or[]' value='Is University Ward?'></td>
		<td align='right' style='color:black'>Is Physically Handicapped?</td>
        <td><input type='checkbox' name='or[]' value='Is Physically Handicapped?'></td>
	</tr>
	<tr ><td></td></tr><tr><td colspan=6></td></tr>
<tr style='border-bottom:2px solid black'><td  colspan=8 style='font-size:17pt;font-weight:bold;color:#3575D3;font-family:calibri;margin-left:50px';>Candidate's Exam Details</td></tr><br/>	
	<tr><td></td></tr><tr><td colspan=6></td></tr>
	<tr>
	<td align='left' style='color:black'>Current Session:</td>
	<td colspan=2><select required name= 'ses' style="width:347px;height:29px">
	    <option disabled selected hidden>-----</option>
	    <option value= '2016-2017'>2016-2017</option>
	    <option value= '2017-2018'>2017-2018</option>
	    <option value= '2018-2019'>2018-2019</option>
	    <option value= '2019-2020'>2019-2020</option>
		<option value= '2020-2021'>2020-2021</option>
		<option value= '2021-2022'>2021-2022</option>
		</select>
		</td>
	<td align='left' style='color:black'>Degree Type:</td>
	<td colspan=2><select required name= 'de' style="width:347px;height:29px">
	<option disabled selected hidden>-----</option>
	<option value= 'Under Graduate(UG)'>Under Graduate(UG)</option>
	<option value= 'Post Graduate(PG)'>Post Graduate(PG)</option>
	
	</select>
	</td>
	</tr>
	
	<tr>
	<td align='left' style='color:black'>Degree:</td>
	<td colspan=2><select required name= 'deg' style="width:347px;height:29px";>
	<option disabled selected hidden>-----</option>
	<option value= 'BCA'>BCA</option>
	<option value= 'MCA'>MCA</option>
	<option value= 'MSc IT'>MSc IT</option>
	</select>
	</td>
	<td align='left' style='color:black'>Semester/Year:</td>
	<td colspan=2><input type='text' name='semessss' value='I SEM' disabled size=40 >
	</td>
	</tr>

	

   <tr>
      
	   <td align='left' style='color:black'>10th Passing Year:</td>
       <td colspan=2><select name= 'psye' required style="width:347px;height:29px";>
	   <option disabled selected hidden>-----</option>
	     <?php
		     for($i=2010;$i<=2021;$i++)
             echo "<option value='$i'>$i</option>";			 
	    ?>
	   </select>
       </td>
	   <td align='left' style='color:black'>12th Passing Year:</td>
       <td colspan=5><select name= 'twepass' required style="width:347px;height:29px";>
	   <option disabled selected hidden>-----</option>
	     <?php
		     for($i=2010;$i<=2021;$i++)
             echo "<option value='$i'>$i</option>";			 
	    ?>
	   </select>
       </td>
	   
</tr>




<tr><td></td></tr>
<tr><td></td></tr>

   <tr><td colspan=6 align='center'><input type='Submit' value='Submit' style='background-color:#3575D3;width:130px;;font-weight:bold;height:40px;color:white'></td>
</tr>
</table>
</form>
	   
	   
	   
      </div>
      
    </div>
  </div>
   
   
</section>
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