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

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
<!--html to pdf   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.8.0/html2pdf.bundle.min.js"></script>

  
  
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
        <h2>Student's List</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
  <div style='width:100%;height:40px;background-color:#f5f5f5'>
   
  </div>
        <div>
    <div style='float:left; width:20%'>
	<table cellspacing=0 cellpadding=10 style='background-color:#f5f5f5'>
	    <tr ><td width=200px><a href='adminpanel.php'><img src='admin images/home.png' style='width:20px;height:20px'/>&nbsp Home</a></td></td>
		<tr ><td width=200px><a href='message.php'><img src='admin images/messages.png' style='width:20px;height:20px'/>&nbsp Messages/Queries</td></td>
		<tr><td width=200px><a href='uploadexam.php'><img src='admin images/examup.png' style='width:20px;height:20px'/>&nbsp Upload Exam forms</td></td>
		<tr><td width=200px><a href='uploadadmit.php'><img src='admin images/admitup.png' style='width:20px;height:25px'/>&nbsp Upload Admit Cards</td></td>
		<tr><td width=200px><a href='regdetails.php'><img src='admin images/regicon.png' style='width:20px;height:20px'/>&nbsp Registration Details</td></td>
		<tr><td width=200px><a href='examformdetails.php'><img src='admin images/uploadexam.png' style='width:20px;height:20px'/>&nbsp Examform Details</td></td>
		
		<tr><td width=200px><a href='uploadresult.php'><img src='admin images/ress.png' style='width:20px;height:20px'/>&nbsp Upload results</td></td>
		<tr><td width=200px><a href='eval.php'><img src='admin images/eval.png' style='width:20px;height:20px'/>&nbsp Upload Re-eval <span style='margin-left:35px'>  Forms</span></td></td>
		<tr><td width=200px><a href='evalstudent.php'><img src='admin images/eval.jpg' style='width:20px;height:20px'/>&nbsp Eval List</td></td>
		<tr><td width=200px><a href='newnortify.php'><img src='admin images/bell.png' style='width:20px;height:20px'/>&nbsp Notifications</td></td>
		<tr style='background-color:#efefef'><td width=200px><a href='resultlist.php'><img src='admin images/resultadmin.png' style='width:20px;height:20px'/>&nbsp Results</td></td>
		<tr><td width=200px height=168px></td></td>
		
	</table>
    </div>
	
	
	
	
	<div style=';float:right; width:80%'>
	
	
	   <form action="" method="POST">
         <div >
    <br>
  
 
   <p align='center'>
      <input type='text' value='' name='getres' placeholder='Student name' style='height:26px;margin-left:-80px'/>
     <select name='deg11' required style='width:200px ;;height:26px'>
	   <option value="" disabled selected hidden>Degree</option>
	   <option value='BCA'>BCA</option>
	   <option value='MCA'>MCA</option>
	   <option value='MSc IT'>MSc IT</option>
	 </select>
	 <select name='sem11' required style='width:200px ;height:26px'>
	   <option value="" disabled selected hidden>Semester</option>
	   <option value='I SEM'>I SEM</option>
	   <option value='II SEM'>II SEM</option>
	   <option value='III SEM'>III SEM</option>
	   <option value='IV SEM'>IV SEM</option>
	   <option value='V SEM'>V SEM</option>
	   <option value='VI SEM'>VI SEM</option>
	 </select>
	 <select name='ses11' required style='width:200px ;height:26px'>
	   <option value="" disabled selected hidden>Session</option>
	   <option value='2016-2017'>2016-2017</option>
	   <option value='2017-2018'>2017-2018</option>
	   <option value='2018-2019'>2018-2019</option>
	   <option value='2019-2020'>2019-2020</option>
	   <option value='2020-2021'>2020-2021</option>
	   <option value='2021-2022'>2021-2022</option>
	 </select>
	 
   </p>
 
  <input type='submit' value='Search' name='geTY' style='font-size:15px;width:100px; ;height:28px;margin-left:440px;background:#4CBB17;font-weight:bold' >
 </form>
  </br></br><br>
  
		 <div style='margin-left:-100px'>
		 
		 <?php

$sno=1;

if(isset($_POST["geTY"]))
	  {
	        $name=$_POST['getres'];
            $geki=$_POST['deg11'];
			 $kiel=$_POST['sem11'];
			 $uki=$_POST['ses11'];
			  echo "<table id='content' rules='none' align='center' width=720px style='' cellspacing=0 cellpadding=10>";
			 echo "<tr style='border-bottom:3pt solid black;color:black'>
			           <td align='center' style='font-weight:bold'>S.No</td>
			           <td align='center' style='font-weight:bold'>Student Name</td>
					   <td align='center' style='font-weight:bold'>Course</td>
					   <td align='center' style='font-weight:bold'>Semester</td>
					   <td align='center' style='font-weight:bold'>Session</td>
					   <td align='center' style='font-weight:bold'></td></tr>";
					   
			 $con=mysqli_connect("localhost","root","","examport");
			 $r=mysqli_query($con,"select * from result where name='$name' and course = '$geki' and semester='$kiel' and session='$uki' and Rollno!=''");
			 	   
		    while($row=mysqli_fetch_array($r))
			{
			 
			
			   echo "<tr style='border-bottom:1pt solid black;color:black'>
			         <td align='center'>$sno</td>
					 <td align='center'>$row[2]</td>
					 <td align='center'>$row[7]</td>
					 <td align='center'>$row[8]</td>
					 <td align='center'>$row[9]</td>
					 <td><a href='getadminresult.php?a=$row[0]'><input type='button' style='background-color:blue;;
	                               height:30px;font-weight:bold;border:none;color:white' value='View Result'></a></td></tr>";
					 
					 $sno++;
			
			}
			
			 
       }	
	  
	   
	   
?>	   
    </div>
       </div>
	
	
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
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
  <script>
      function download(){
        var element=document.getElementById("content")
		html2pdf(content,{
		margin:       10,
        filename:     'examlist.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 0, logging: true, dpi: 192, letterRendering: true },
        jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
		});
		}
    </script>
</body>

</html>