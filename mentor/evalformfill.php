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

      <h1 class="logo me-auto"><a href="index.html" style='color:#3575D3 !important'><img src='admin images/locl.png' style='height:44px;width:55px'>&nbsp BMS University</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="index.php">Home</a></li>
          

          
          <li><a  href="showreeval.php">Back</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
		
		
		
      </nav><!-- .navbar -->
   

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
      
	  <div class="container" >
		<h3>Revaluation</h3>
       
      </div>
    </div>
 
 <div >
   <?php
     
	 $roll=$_SESSION["app"];
     $con=mysqli_connect("localhost","root","","examport");
     $r=mysqli_query($con,"select * from result where Rollno='$roll' ");
	  if($row=mysqli_fetch_array($r))
	 {
	    
	    echo "<div style='border-bottom:1px solid black;margin-top:10px'><span style='font-family:calibri;font-weight:bold;font-size:20px;color:#3575D3'>&nbsp &nbsp Personal Details</span></div>";
	    echo "<table style='width:94%;margin-left:25px;;margin-top:10px;border:1px solid #e9e9e9' border=1>
		       <tr style='border-bottom:1px solid #e9e9e9'>
			     <td align='right' style='width:23.5%;border-right:1px solid #e9e9e9'>Enrollment No.</td>
				 <td style='width:23.5%;border-right:1px solid #e9e9e9'>&nbsp &nbsp $row[5]</td>
				 <td align='right' style='width:20.5%;border-right:1px solid #e9e9e9'>Roll No</td>
				 <td style=''>&nbsp &nbsp $row[1]</td>
			   </tr>
			   <tr  style='border-bottom:1px solid #e9e9e9'>
			     <td align='right' style='border-right:1px solid #e9e9e9'>Candidate Name</td>
				 <td style='border-right:1px solid #e9e9e9'>&nbsp &nbsp $row[2]</td>
				 <td align='right' style='border-right:1px solid #e9e9e9'>College</td>
				 <td>&nbsp &nbsp Department of Computer Science(BMS University)</td>
			   </tr>
			   <tr  style='border-bottom:1px solid #e9e9e9'>
			     <td align='right' style='border-right:1px solid #e9e9e9'>Father Name</td>
				 <td style='border-right:1px solid #e9e9e9'>&nbsp &nbsp $row[3]</td>
				 <td align='right' style='border-right:1px solid #e9e9e9'>Degree</td>
				 <td>&nbsp &nbsp $row[7]</td>
			   </tr>
			   <tr  style='border-bottom:1px solid #e9e9e9'>
			     <td align='right' style='border-right:1px solid #e9e9e9'>Mother Name</td>
				 <td style='border-right:1px solid #e9e9e9'>&nbsp &nbsp $row[4]</td>
				 <td align='right' style='border-right:1px solid #e9e9e9'>Semester</td>
				 <td>&nbsp &nbsp $row[8]</td>
			   </tr>
			    <tr  style='border-bottom:1px solid #e9e9e9'>
			     <td align='right'style='border-right:1px solid #e9e9e9'>Date of Birth</td>
				 <td style='border-right:1px solid #e9e9e9'>&nbsp &nbsp $row[10]</td>
				 <td align='right' style='border-right:1px solid #e9e9e9'>Category</td>
				 <td>&nbsp &nbsp $row[6]</td>
			   </tr>
		
		
		        </table><br>";
				
				  echo "<div style='border-bottom:1px solid black;margin-top:10px'><span style='font-family:calibri;font-weight:bold;font-size:20px;color:#3575D3'>&nbsp &nbsp Paper Details</span></div>";
	              echo "<div style='margin-left:30px'><form action='' method='POST'><table border=1 style=';width:94%;font-size:18px;font-family:calibri;margin-left:25px;;margin-top:10px'>
				           <tr style='border-bottom:1px solid black'>
						      <td align='center' style='width:5%;;color:red;font-weight:bold;border-right:1px solid black'>Select</td>
							  <td align='center' style='width:10%;font-weight:bold;color:red;border-right:1px solid black'>S.No</td>
				              <td align='center' style='width:25%;font-weight:bold;color:red;border-right:1px solid black'>Paper Code</td>
				              <td align='center' style='width:30%;font-weight:bold;color:red;border-right:1px solid black'>Paper Name</td>
							   <td align='center' style='font-weight:bold;color:red'>Marks Obtained</td>
				           </tr>";
						  
						  echo "<tr style=' border-bottom:1px solid black'>
						      <td align='center' style=';border-right:1px solid black'><input type='checkbox' name='ch1' id='ch1' value='1'></td>
							  <td align='center' style=';border-right:1px solid black'>1</td>
						      <td align='center' style=';border-right:1px solid black'>$row[11]</td>
							  <td align='center' style=';border-right:1px solid black'>$row[12]<input type='hidden' id='sub1' value='$row[12]' ></td>";
							  
							  $total1=(int)$row[13]+(int)$row[15];
							echo "  <td align='center'>$total1</td>";
							  
							  
							echo  "</tr>";
							 echo "<tr style=' border-bottom:1px solid black'>
						      <td align='center' style=';border-right:1px solid black'><input type='checkbox' name='ch2' id='ch2' value='1'></td>
							  <td align='center' style=';border-right:1px solid black'>2</td>
						      <td align='center' style=';border-right:1px solid black'>$row[18]</td>
							  <td align='center' style=';border-right:1px solid black'>$row[19]</td><input type='hidden' id='sub2' value='$row[19]' >";
							  
							  $total2=(int)$row[20]+(int)$row[22];
							echo "  <td align='center'>$total2</td>";
							  
							  
							echo  "</tr>";
							
							 echo "<tr style=' border-bottom:1px solid black'>
						      <td align='center' style=';border-right:1px solid black'><input type='checkbox' name='chk3' id='ch3' value='1'></td>
							  <td align='center' style=';border-right:1px solid black'>3</td>
						      <td align='center' style=';border-right:1px solid black'>$row[25]</td>
							  <td align='center' style=';border-right:1px solid black'>$row[26]</td><input type='hidden' id='sub3' value='$row[26]' >";
							  
							  $total3=(int)$row[27]+(int)$row[29];
							echo "  <td align='center'>$total3</td>";
							  
							  
							echo  "</tr>";
						     
							  echo "<tr style=' border-bottom:1px solid black'>
						      <td align='center' style=';border-right:1px solid black'><input type='checkbox' name='chk4' id='ch4' value='1'></td>
							  <td align='center' style=';border-right:1px solid black'>4</td>
						      <td align='center' style=';border-right:1px solid black'>$row[32]</td>
							  <td align='center' style=';border-right:1px solid black'>$row[33]</td><input type='hidden' id='sub4' value='$row[33]' >";
							  
							  $total4=(int)$row[34]+(int)$row[46];
							echo "  <td align='center'>$total4</td>";
							  
							  
							echo  "</tr>";
							
							if(!empty($row[39]))
							{
							   echo "<tr style=' border-bottom:1px solid black'>
						      <td align='center' style=';border-right:1px solid black'><input type='checkbox' name='chk5' id='ch5' value='1'></td>
							  <td align='center' style=';border-right:1px solid black'>5</td>
						      <td align='center' style=';border-right:1px solid black'>$row[39]</td>
							  <td align='center' style=';border-right:1px solid black'>$row[40]</td><input type='hidden' id='sub5' value='$row[40]' >";
							  
							  $total5=(int)$row[41]+(int)$row[43];
							echo "  <td align='center'>$total5</td>";
							  
							  
							echo  "</tr>";
							}
							
							if(!empty($row[46]))
							{
							   echo "<tr style=' border-bottom:1px solid black'>
						      <td align='center' style=';border-right:1px solid black'><input type='checkbox' name='chk6' id='ch6' value='1'></td>
							  <td align='center' style=';border-right:1px solid black'>6</td>
						      <td align='center' style=';border-right:1px solid black'>$row[46]</td>
							  <td align='center' style=';border-right:1px solid black'>$row[47]</td><input type='text' style='display:none' id='sub6' value='$row[47]' >";
							  
							  $total6=(int)$row["ex6"]+(int)$row["in6"];
							echo "  <td align='center'>$total6</td>";
							  
							  
							echo  "</tr>";
							}
							
						   echo "<tr  style='border-bottom:1px solid #e9e9e9;height:40px'><td colspan=5></td></tr>";
				        echo "<tr style=' border-bottom:1px solid #e9e9e9'><td align='center' colspan=5><input type='button' onclick='calc()' value='CALCULATE' name='sub' style='font-size:15px;font-family:calibri;font-weight:bold'></td></tr>";
						echo "<tr><td colspan=5 style='height:70px'></td></tr>";
						echo "<tr style='border-bottom:1px solid #e9e9e9'><td style='font-family:calibri;font-weight:bold' colspan=5 ><span style='margin-left:800px'> Revaluation Paper Fee</span> <input type='text' readonly id='val1' ></td></tr>";
					   echo "<tr style='border-bottom:1px solid #e9e9e9'><td style='font-family:calibri;font-weight:bold' colspan=5><span style='margin-left:804px'>Revaluation Form Fee</span> <input type='text' readonly  id='val2'></td></tr>";
					    echo "<tr style='border-bottom:1px solid #e9e9e9'><td style='font-family:calibri;font-weight:bold' colspan=5><span style='margin-left:903px'>Total Fee</span><input type='text' required id='val3' readonly name='here'></td></tr>";
						echo  "<tr><td colspan=5 align='center'><input type='submit' value='Submit' name='forward'></td></tr>";
						
	                
					    echo "<input type='text' name='sub1' hidden id=subject1><input type='text' hidden  name='sub2' id=subject2>
						<input type='text' hidden  name='sub3' id=subject3><input type='text' hidden  name='sub4' id=subject4>
						<input type='text' name='sub5' hidden  id=subject5><input type='text' hidden  name='sub6' id=subject6>";
					    
					
	                echo "</table></form></div><br><br><br><br>";
					
					 if(isset($_POST["forward"]))
					 { 
					    
					    if(!empty($_POST["sub1"]))
					     $_SESSION["resub1"]=$_POST["sub1"];
						else
						  $_SESSION["resub1"]=" ";
						 
						 if(!empty($_POST["sub2"]))
					     $_SESSION["resub2"]=$_POST["sub2"];
				        else
						  $_SESSION["resub2"]=" ";
						 
						 
						 
						 if(!empty($_POST["sub3"]))
					     $_SESSION["resub3"]=$_POST["sub3"];
                         else
						  $_SESSION["resub3"]=" ";						 
						 
						 
						 if(!empty($_POST["sub4"]))
					     $_SESSION["resub4"]=$_POST["sub4"];
						 else
						  $_SESSION["resub4"]=" ";
						 
						 
						 if(!empty($row[39]))
						 {
						 if(!empty($_POST["sub5"]))
					     $_SESSION["resub5"]=$_POST["sub5"];
						 else
						  $_SESSION["resub5"]=" ";
						 }
						 
						 if(!empty($row[39]))
						 {
						 if(!empty($_POST["sub6"]))
					     $_SESSION["resub6"]=$_POST["sub6"];
						 else
						  $_SESSION["resub6"]=" ";
						 }
						 
						 
					     if(!empty($_POST["here"]))
						 {
						    $_SESSION["retot"]=$_POST["here"];
						    ?> 
				           <script type="text/javascript">
				                window.location ="evalpay.php";
				           </script>
                  <?php
						 }
					 }
					
	                 }
					 
					 
     else
	 {
	   header("location:showreeval.php");
	 }
?>



 <script>
					    function calc()
						{
						   var ch1=document.getElementById('ch1');
						   var ch2=document.getElementById('ch2');
						   var ch3=document.getElementById('ch3');
						   var ch4=document.getElementById('ch4');
						   var ch5=document.getElementById('ch5');
						   var ch6=document.getElementById('ch6');
						    
						   if(ch1.checked)
						   {
						      var sub1=document.getElementById('sub1').value;
						      var i=1;
							  document.getElementById("subject1").value=sub1; 
						   }
						   else
						   {
						      var i=0;
							 
						   }
						   
						   if(ch2.checked)
						   {
						      var sub2=document.getElementById('sub2').value;
						      var j=1;
							  document.getElementById("subject2").value=sub2;
						   }
						   else
						   {
						      var j=0;
						   }
						   
						   if(ch3.checked)
						   {
						      var sub3=document.getElementById('sub3').value;
						      var k=1;
							  document.getElementById("subject3").value=sub3;
						   }
						   else
						   {
						      var k=0;
						   }
						   
						   if(ch4.checked)
						   {
						       var sub4=document.getElementById('sub4').value;
						      var l=1;
							  document.getElementById("subject4").value=sub4;
						   }
						   else
						   {
						      var l =0;
						   }
						   
						   if(ch5.checked)
						   {
						      
						      var sub5=document.getElementById('sub5').value;
						      var m=1;
							  document.getElementById("subject5").value=sub5;
						   }
						   else
						   {
						      var m =0;
						   }
						   
						   if(ch6.checked)
						   {
						       var sub6=document.getElementById('sub6').value;
						      var n=1;
							  document.getElementById("subject6").value=sub6;
						   }
						   else
						   {
						      var n =0;
						   }
						   
						   var total=i+j+k+l+m+n;
						   var mul=450*total;
						   document.getElementById("val1").value= mul; 
						   var sec=50;
						   document.getElementById("val2").value= sec; 
						   var fin=mul+sec;
						   document.getElementById("val3").value= fin; 
						   
						}</script>
   
  
		  
	 
  </div>




