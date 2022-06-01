

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

      <h1 class="logo me-auto"><a href="index.html">BMS UNIVERSITY</a></h1>
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
	
	<div>
	<?php 


$tot=$_SESSION["retot"];
$sub1=$_SESSION["resub1"];
$sub2=$_SESSION["resub2"];
$sub3=$_SESSION["resub3"];
$sub4=$_SESSION["resub4"];
$sub5=$_SESSION["resub5"];
$sub6=$_SESSION["resub6"];

$date=date('Y');




?>
<br>
 <form method="POST">
 <table border=1 align='center' rules='none' cellspacing=0 cellpadding=5 width=360px height=400px style='background:url(jkl.jpeg);background-size:cover;'>
			      
				  
				  
				  <?php
				   
                 
                  if(isset($_POST['moove']))
                  {   
				     $roll=$_SESSION["app"];
				  $con=mysqli_connect("localhost","root","","examport");
                      $r=mysqli_query($con,"select * from result where Rollno='$roll' ");
					  if($row=mysqli_fetch_array($r))
					  {
					   $name=$row[2];
					   $course=$row[7];
					   $sem=$row[8];
					  
					  }
				 
				      $cardd1=$_POST["card1"];
					  $cardd2=$_POST["card2"];
					 
                     
					  
                      $q=mysqli_query($con,"insert into reevallist (year,roll,name,course,sem,sub1,sub2,sub3,sub4,sub5,sub6,amount,cardholder,cardnumber) values('$date','$roll','$name','$course','$sem','$sub1','$sub2','$sub3','$sub4','$sub5','$sub6','$tot','$cardd1','$cardd2')");
					  if($q)
					  {
	                  ?> 
				        <script type="text/javascript">
				           window.location ="revalotp.php";
				        </script>
                     <?php
                     }
                 else
				 echo mysqli_error($con);
					 
				   			   
                  }

                  ?>
				  
				  <tr height=50px style='background-color:#bbbbbb'><td style='font-weight:bold;color:#500000 ;border-bottom: 2pt solid black ;;width:180px;font-size:16px'>Credit & Debit cards</td>
                       <td style='width:60px;border-bottom: 2pt solid black '><img src="userimages/card1.jpeg" height=30px width=50px ></td>
                       <td style='width:60px;border-bottom: 2pt solid black '><img src="userimages/card2.jpeg" height=30px width=50px ></td>
                       <td style='width:60px;border-bottom: 2pt solid black '><img src="userimages/card3.jpeg" height=30px width=50px></td>
					</tr>
					<tr><td colspan=4></td></tr>
					<tr><td colspan=4 style='color:black;font-weight:bold'>&nbsp Cardholder Name</td></tr>
					  <tr><td colspan=4> <input type='text' value='' name='card1' required style='width:350px;height:27px'></td></tr>
	                 
					 <tr><td colspan=4 style='color:black;font-weight:bold'>&nbsp Card Number</td></tr>
					  <tr><td colspan=4> <input type='text' value='' maxlength=12 name='card2' required style='width:350px;height:27px'></td></tr>
	    
	                 <tr><td colspan=2 style='color:black;font-weight:bold' >&nbsp End Date</td>
					    <td colspan=2 style='color:black;font-weight:bold' >CVV</td></tr>
					 <tr><td colspan=2> &nbsp 
					       <select style='width:60px;height:27px' required>
						         <option value="" disabled selected hidden>mm</option>
								 <option value='01'>01</option>
								 <option value='01'>02</option>
								 <option value='01'>03</option>
								 <option value='01'>04</option>
								 <option value='01'>05</option>
								 <option value='01'>06</option>
								 <option value='01'>07</option>
								 <option value='01'>08</option>
								 <option value='01'>09</option>
								 <option value='01'>10</option>
								 <option value='01'>11</option>
								 <option value='01'>12</option>
		                   </select>
						   
						   &nbsp
					       <select style='width:60px;height:27px' required>
						         <option value="" disabled selected hidden >yyyy</option>
								 <option value='2021'>2021</option>
								 <option value='2022'>2022</option>
								 <option value='2023'>2023</option>
								 <option value='2024'>2024</option>
								 <option value='2025'>2025</option>
								 <option value='2026'>2026</option>
								 <option value='2027'>2027</option>
								
		                   </select>
						   </td>
						   <td colspan=2>
						       <input type='text' value='' maxlength=3 required style='width:60px;height:27px'>
						   </td>
						  </tr>
						  <tr><td colspan=4></td></tr>
						  <tr><td colspan=4></td></tr>
						  <tr><td colspan=4></td></tr>
						  
						  <tr>
						     <td colspan=4 align='center'><input type='submit' name='moove' value='Pay Rs. <?php echo $tot;?>/-' style='height:30px;width:340px; color:white;background-color:#3575D3;font-weight:bold'>
						  </tr>
						  <tr><td colspan=4></td></tr>
						  <tr><td colspan=4></td></tr>
						  
						   
						   
               </table>
			   </div>
			   </form>



	</div>
	
	