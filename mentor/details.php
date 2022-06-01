<!DOCTYPE html>
<html lang="en">

<head>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready(function() {
    $('#example').DataTable();
} );
</script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

<!--html to pdf   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>


  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>BMS University</title>
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

  <main id="main" data-aos="fade-in">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style='background-color:#3575D3'>
      <div class="container">
        <h2>Details</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
  <div style='width:100%;height:40px;background-color:#f5f5f5'>
     
     <img src="admin images/divdownload.png" style='width:25px;height:25px;margin-left:1320px;margin-top:-2px;cursor:pointer'  onclick="download()">
  
  </div>
  
  
        <div>
    <div style='float:left; position:fixed;width:20%'>
	<table cellspacing=0 cellpadding=10 style='background-color:#f5f5f5'>
	    <tr ><td width=200px><a href='adminpanel.php'><img src='admin images/home.png' style='width:20px;height:20px'/>&nbsp Home</a></td></td>
		<tr><td width=200px><a href='message.php'><img src='admin images/messages.png' style='width:20px;height:20px'/>&nbsp Messages/Queries</td></td>
		<tr><td width=200px><a href='uploadexam.php'><img src='admin images/examup.png' style='width:20px;height:20px'/>&nbsp Upload Exam forms</td></td>
		<tr><td width=200px><a href='uploadadmit.php'><img src='admin images/admitup.png' style='width:20px;height:25px'/>&nbsp Upload Admit Cards</td></td>
		<tr><td width=200px><a href='regdetails.php'><img src='admin images/regicon.png' style='width:20px;height:20px'/>&nbsp Registration Details</td></td>
		<tr   style='background-color:#efefef'><td width=200px style=''><a href='examlist.php'><img src='admin images/arrow.png' style='margin-left:40px;width:10px;height:10px'/>&nbsp View</td></td>
		<tr><td width=200px><a href='examformdetails.php'><img src='admin images/uploadexam.png' style='width:20px;height:20px'/>&nbsp Examform Details</td></td>
		<tr><td width=200px><a href='uploadresult.php'><img src='admin images/ress.png' style='width:20px;height:20px'/>&nbsp Upload results</td></td>
		<tr><td width=200px><a href='eval.php'><img src='admin images/eval.png' style='width:20px;height:20px'/>&nbsp Upload Re-eval <span style='margin-left:35px'>  Forms</span></td></td>
		<tr><td width=200px><a href='evalstudent.php'><img src='admin images/eval.jpg' style='width:20px;height:20px'/>&nbsp Eval List</td></td>
		<tr><td width=200px><a href='newnortify.php'><img src='admin images/bell.png' style='width:20px;height:20px'/>&nbsp Notifications</td></td>
		<tr><td width=200px><a href='resultlist.php'><img src='admin images/resultadmin.png' style='width:20px;height:20px'/>&nbsp Results</td></td>
		<tr><td width=200px height=168px></td></td>
		
	</table>
    </div>
	
	
	
	
	<div  style='float:right; width:80%;height:900px'>
	     <?php
   $id=$_REQUEST["a"];
   $con=mysqli_connect("localhost","root","","examport");
   $r=mysqli_query($con,"select * from registration where id='$id'");
   if($row=mysqli_fetch_array($r))
   {
 ?>
 

 <br>
  
 <table id="content" align='center'  rules='none' width=714  cellspacing=0 cellpadding=10>
 <tr>
    <td colspan=5 align='center' style='font-size:35px;font-weight:bold;color:black'>BMS University</td>
 </tr>
 <tr  style='line-height:1px'>
    <td colspan=5 align='center' style='font-size:22px;font-weight:bold;color:black'>Department of Computer Science</td>
 </tr>
 <tr>
    <td colspan=5 align='center' style='font-size:22px;font-weight:bold;color:black'>Student's Details</td>
 </tr>
 <td></td>
	<td></td>
 <td colspan=3 align='center' style='padding-left:290px;color:black'>Reg. ID: <?php echo $row[23]; ?></td>

 <tr>
    
	 <tr><td colspan=5></td></tr>
	
	
 </tr>
 
 <tr>
     <td style='font-weight:bold ;padding-left:20px;color:black;'>Student Name: </td>
	 <td style='color:black'><?php echo $row[2]; ?></td>
	 <td rowspan=4 colspan=3 align='center' style='width:50;height:50;margin:auto'><img src="imagesregistered/<?php echo $row[22]; ?>"  width=160 height=160></td>
  </tr>
  <tr>
     <td style='font-weight:bold ;padding-left:20px;color:black'>Father Name: </td>
	 <td style='color:black'><?php echo $row[3]; ?></td>
   </tr>
  <tr>
     <td style='font-weight:bold ;padding-left:20px;color:black'>Mother Name: </td>
	 <td style='color:black'><?php echo $row[4]; ?></td>
   </tr>
   <tr><td style='font-weight:bold ;padding-left:20px;color:black'>Date of Birth: </td>
	 <td colspan=4 style='color:black'><?php echo $row[9]; ?></td>
   </tr>
   <tr><td style='font-weight:bold ;padding-left:20px;color:black'>Mobile No.: </td>
	 <td colspan=4 style='color:black'><?php echo $row[11]; ?></td>
   </tr>
   <tr>
     <td style='font-weight:bold;padding-left:20px;color:black'>Category: </td>
	 <td style='color:black'><?php echo $row[6]; ?></td>
	 <td ></td>
	 <td style='font-weight:bold;padding-left:65px;color:black;margin-left:10px'>Nationality: </td>
	 <td style='color:black'><?php echo $row[10]; ?></td>
	 
   </tr>
   <tr>
     
	 
	 <td style='font-weight:bold;padding-left:20px;color:black'>Gender: </td>
	 <td style='color:black'><?php echo $row[7]; ?></td>
	 <td></td>
	 <td style='font-weight:bold;padding-left:65px;color:black'>Religion: </td>
	 <td style='color:black'><?php echo $row[12]; ?></td>
   </tr>
    <tr>
     <td style='font-weight:bold;padding-left:20px;color:black'>City/District: </td>
	 <td style='color:black'><?php echo $row[1]; ?></td>
	 <td></td>
	 <td style='font-weight:bold;padding-left:65px;color:black'>State: </td>
	 <td style='color:black'><?php echo $row[8]; ?></td>
   </tr>
   
   <tr>
     <td style='font-weight:bold;padding-left:20px;color:black'>Course Enrolled: </td>
	 <td style='color:black'><?php echo $row[18]; ?></td>
	 <td></td>
	 <td style='font-weight:bold;padding-left:65px;color:black'>Type: </td>
	 <td style='color:black'><?php echo $row[17]; ?></td>
   </tr>
   
   
   <tr>
     <td style='font-weight:bold;padding-left:20px;color:black'>Aadhar No.: </td>
	 <td style='color:black'><?php echo $row[14]; ?></td>
	 <td></td>
	 <td style='font-weight:bold;padding-left:65px;color:black'>Enrollment No.: </td>
	 <td style='color:black'><?php echo $row[13]; ?></td>
   </tr>
  <tr>
  <td colspan=5 height=200px></td>
  </tr>
  
  </table>
  
  <?php
  }
  ?>
    
    </div>


      
    <!-- End Courses Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- End Footer -->

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
   <script>
      function download(){
        var element=document.getElementById("content")
		html2pdf(content,{
		margin:       10,
        filename:     'myfile.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 0, logging: true, dpi: 192, letterRendering: true },
        jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
		});
		}
    </script>
</body>

</html>