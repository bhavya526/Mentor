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

<body onload="myFunction()">

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
        <h2>Upload Results</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Courses Section ======= -->
    <!-- ======= Courses Section ======= -->
  <div style='width:100%;height:40px;background-color:#f5f5f5'>
   <a href="adminlogin.php" style='margin-left:1260px'>&nbsp LOG OUT </a>
      <button type="button" id="btn1"  style='width:200px;FONT-WEIGHT:bold;margin-left:500px;background:linear-gradient(to right, #709BFE,#45BBFE);margin-top:3px;height:50px;focus:none;outline:none;border:none '>Upload Results</button>
                           
        <button type="button" id="btn2"  style='width:200px;FONT-WEIGHT:bold;height:50px;focus:none;outline:none;background:linear-gradient(to right,#45BBFE, #709BFE);border:none  '>Delete</button>
  </div>
  
        <div>
    <div style='float:left, width:20%'>
	<table cellspacing=0 cellpadding=10 style='background-color:#f5f5f5'>
	    <tr ><td width=200px><a href='adminpanel.php'><img src='admin images/home.png' style='width:20px;height:20px'/>&nbsp Home</a></td></td>
		<tr ><td width=200px><a href='message.php'><img src='admin images/messages.png' style='width:20px;height:20px'/>&nbsp Messages/Queries</td></td>
		<tr><td width=200px><a href='uploadexam.php'><img src='admin images/examup.png' style='width:20px;height:20px'/>&nbsp Upload Exam forms</td></td>
		<tr ><td width=200px><a href='uploadadmit.php'><img src='admin images/admitup.png' style='width:20px;height:25px'/>&nbsp Upload Admit Cards</td></td>
		<tr><td width=200px><a href='regdetails.php'><img src='admin images/regicon.png' style='width:20px;height:20px'/>&nbsp Registration Details</td></td>
		<tr><td width=200px><a href='examformdetails.php'><img src='admin images/uploadexam.png' style='width:20px;height:20px'/>&nbsp Examform Details</td></td>
		<tr style='background-color:#efefef'><td width=200px><a href='uploadresult.php'><img src='admin images/ress.png' style='width:20px;height:20px'/>&nbsp Upload results</td></td>
		<tr><td width=200px><a href='eval.php'><img src='admin images/eval.png' style='width:20px;height:20px'/>&nbsp Upload Re-eval <span style='margin-left:35px'>  Forms</span></td></td>
		<tr><td width=200px><a href='evalstudent.php'><img src='admin images/eval.jpg' style='width:20px;height:20px'/>&nbsp Eval List</td></td>
		<tr><td width=200px><a href='newnortify.php'><img src='admin images/bell.png' style='width:20px;height:20px'/>&nbsp Notifications</td></td>
		<tr><td width=200px><a href='resultlist.php'><img src='admin images/resultadmin.png' style='width:20px;height:20px'/>&nbsp Results</td></td>
		<tr><td width=200px height=168px></td></td>
		
	</table>
    </div>
	
	 <script src="jq.js"></script>
   <script>
       
		
		 
		$(document).ready(function()
		{
		   $("a").click(function()
		   {
		   var id=$(this).attr("id");
		     $.post("resultdelete.php",{ids:id},function(data)
			 {
			   $("#blue").html(data).show();
			   return false;
			 });
		   });
		   
		   $("#meclick").click(function()
		   {
		     var course=document.getElementById("select1").value;
			 var degree=document.getElementById("select2").value;
			 var date=document.getElementById("date").value;
			
			 $.post("getresult.php",{course:course,degree:degree,date:date},function(data)
			 {
			   $("#su").html(data).show();
			   return false;
			 });
		   });
		});
   </script>
  
	
	
	<div style='margin-top:-550px;float:right; width:80%'>
	     
		 
		 
		 <div id="green" style='display:none;width:100%;height:100%;margin-top:20px'>
	  <form action="" method="POST" >
		 <input type="text" id="date" value='<?php echo  date("d/m/Y") ; ?>' name='date' disabled style='margin-left:360px'/><br><br>
		  <select name='select1' id="select1" required style="width:220px;margin-left:210px;height:30px;font-weight:bold;" >
		     <option value="" disabled selected hidden >COURSE</option>
			 <option value='BCA'>BCA</option>
			 <option value='MCA'>MCA</option>
			 <option value='MSc IT'>MSc IT</option>
		  </select>
		  <select name='select2' id="select2" required style="width:220px;height:30px;font-weight:bold;">
		     <option value="" disabled selected hidden >SEMESTER</option>
			 <option value='I SEM'>I Sem</option>
			 <option value='II SEM'>II Sem</option>
			 <option value='III SEM'>III Sem</option>
			 <option value='IV SEM'>IV Sem</option>
			 <option value='V SEM'>V Sem</option>
			 <option value='VI SEM'>VI Sem</option>
			 
		  </select>
		  
		  
		  <br><br><br><input type='button' id="meclick" name='admit' value='UPLOAD'  style="background-color:#E5E1E6;margin-left:360px;font-size:15px;width:140px;height:30px;font-weight:bold;">
	      <br/>
		  <span style='color:green;font-weight:bold;margin-left:800px' id='su'></span>
		  
	 
	      
	   
	 
	
	</div>
<br><br>
   
   
	<div id="blue" style='display:none;width:100%;height:100%;'>
	    <?php
		      $con=mysqli_connect("localhost","root","","examport");
			   $r=mysqli_query($con,"select * from resultupload");
			   $Sno=1;
               
	       echo "<table align='center'  width=900px style='margin-left:50px' cellspacing=0 cellpadding=10> ";
		     while($row=mysqli_fetch_array($r))
			 {
			     echo "<tr style='border-bottom:1pt solid black;color:black'>
			     <td>$Sno</td>
				  <td>$row[1]</td>";
				   echo "<td><a id='$row[0]' href='#' style='color:red'>
                              Delete</a></td>";
				  $Sno++;
				  
				  echo " </tr>";
				  
			   }
		       
		
			 
		    echo "</table>";
		?>
	 </div>
	
	</div>
	
   
   <script>
   var box1=document.getElementById("green");
   var box2=document.getElementById("blue");
   
   document.getElementById("btn1").addEventListener("click",function()
   {
      
	  if(box1.style.display=="none")
	  {
	       box1.style.display="block";
		   box2.style.display="none";
	  }
	  else
	  {
	      box1.style.display="none";  
	  }
   });
   
   document.getElementById("btn2").addEventListener("click",function()
   {
      
	  if(box2.style.display=="none")
	  {
	       box2.style.display="block";
		   box1.style.display="none";
	  }
	  else
	  {
	       box2.style.display="none";
	  }
   });
   
   </script>  
   
   <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
	
</form>
		 
		 
		 
		 
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

</body>

</html>