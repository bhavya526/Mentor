<?php
   SESSION_START();
 
 ?>
 <html>
 
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

<link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>
<body style='background-color:rgba(218, 223, 225, 1)'>
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="index.html" style='color:#3575D3 !important'><img src='admin images/locl.png' style='height:44px;width:55px'>&nbsp BMS University</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
         
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
		
		
		
      </nav><!-- .navbar -->
   
    </div>
  </header>
  <header id="header" class="fixed-top" style=';;margin-top:3px;height:5px;background-color:rgba(0,0,0,0)'>
       <?php
  
      echo "<B style=';margin-left:1170px;;font-size:13px;color:black'>" .date('d F, Y (l)'). " </B>";
	  
    ?>
	   <iframe src="http://free.timeanddate.com/clock/i7uvf0e9/n1738/tct/pct/ftb" frameborder="0" width="81" height="18" style='margin-left:1230px' allowtransparency="true"></iframe>

	</header><!-- End Header -->
 <div style=''>
 <div style='margin-left:320px;' >
 
 
<?php
             $_SESSION["app"]=$_POST["app"];
			 $app=$_SESSION["app"];
			 
			  $con=mysqli_connect("localhost","root","","examport");
			  $rs=mysqli_query($con,"select * from examform where Application='$app' ");
			  if($rps=mysqli_fetch_array($rs))
			  {
			     
				 ?>
				   <a href="successfull3.php"><input type='button' style='width:130px' value="Back" ></a>
				   <input type='button' onclick="download()" value='Download' style='width:130px;margin-top:100px;margin-left:440px' />
				    <br><br>
					<div id="content" style='font-family:calibri;background-color:white;width:720px;height:auto'>
					  
					  <div style='width:720px;font-weight:bold'>
					  &nbsp 1
					  <span style='margin-left:468px'>Date &nbsp <?php echo  date("d/m/Y");?>&nbsp &nbsp &nbsp College Copy</span> <br>
                      <img src="userimages/bar.jpg" style='width:99px;height:40px;margin-left:600px'>					  
					
                     </div>
					 
					 <div style=';border-bottom:2px solid black;height:74px;width:720px;font-family:calibri'>
					    <div style='float:left;width:20%'>
						<img src='userimages/logoclg.png' style='margin-left:60px;width:80px;height:70px'>
						</div>
						<div style='float:right;font-size:20px;font-weight:bold;width:80%'>
						<span style='margin-left:130px'>BMS UNIVERSITY, KOTA</span>
						<br>
						<span style='margin-left:30px'>Regular Student <?php echo $rps[28] ?>&nbsp <?php echo $rps[29] ?>&nbsp Exam <?php echo $rps[24] ?>  </span>
						</div>
					 
					 </div>
					 
					 <div style='font-family:calibri;border-bottom:2px solid black;height:340px'>
					 <span style='font-weight:bold;font-size:16px;margin-left:25px'>College &nbsp &nbsp &nbsp   Department of Computer Science(BMS University)</span>
					 <span style='font-weight:bold;font-size:16px;margin-left:60px'>App. No. <?php echo $app; ?></span>
					 <br><br>
					 <div style='float:left;width:80%'>
					 
					 <span style='font-size:16px;margin-left:25px'>Student's Name</span><span style='font-size:16px;margin-left:45px'>: &nbsp <?php echo $rps[1]?></span><br>
					  <span style='font-size:16px;margin-left:25px'>Father's Name</span><span style='font-size:16px;margin-left:55px'>: &nbsp <?php echo $rps[2]?></span><br>
					 <span style='font-size:16px;margin-left:25px'>Mother's Name</span><span style='font-size:16px;margin-left:47px'>: &nbsp <?php echo $rps[3]?></span><br>
					  <span style='font-size:16px;margin-left:25px'>Gender</span><span style='font-size:16px;margin-left:100px'>: &nbsp <?php echo $rps[6]?></span><br>
					   <span style='font-size:16px;margin-left:25px'>Date of Birth</span><span style='font-size:16px;margin-left:66px'>: &nbsp <?php echo $rps[8]?></span><br>
					    <span style='font-size:16px;margin-left:25px'>Caste</span><span style='font-size:16px;margin-left:113px'>: &nbsp <?php echo $rps[5]?></span><br>
						 <span style='font-size:16px;margin-left:25px'>Enrollment No.</span><span style='font-size:16px;margin-left:50px'>: &nbsp <?php echo $rps[12]?></span><br>
					      <span style='font-size:16px;margin-left:25px'>Medium</span><span style='font-size:16px;margin-left:93px'>:&nbsp English</span><br>
						   <span style='font-size:16px;margin-left:25px'>Minority</span><span style='font-size:16px;margin-left:92px'>: &nbsp <?php echo $rps[4]?></span><br>
						    <span style='font-size:16px;margin-left:25px'>Mobile No.</span><span style='font-size:16px;margin-left:76px'>: &nbsp <?php echo $rps[10]?></span><br>
							 <span style='font-size:16px;margin-left:25px'>Address</span><span style='font-size:16px;margin-left:96px'>: &nbsp <?php echo $rps[14]." ".$rps[17]." ".$rps[15]?></span>
					</div>
					<div style='float:right;width:20%'>
					  <img src="uploadedimages/<?php echo $rps[43]; ?>" style='border:1px solid black;width:110px;height:140px' ><br><br>
					   <img src="uploadedimages/<?php echo $rps[44]; ?>" style=';width:120px;height:50px' >
					    <span style='font-weight:bold;margin-left:60px'>Signature</span>
					</div>
					
					
					</div>
				    <div style='width:720px;font-weight:bold'>
					Present Semester Papers<br>
					<?php
					  $a1=$rps[28];
					  $b1=$rps[29];
					  			  $con=mysqli_connect("localhost","root","","examport");
			                      $q=mysqli_query($con,"select * from subject where course='$a1' and Sem='$b1' ");
			                      $roow=mysqli_fetch_array($q)
					
					?>
					   <table border=1 width=718px>
					   <tr style='border-bottom:1px solid black'>
					      <td width=100px align='center' style='font-weight:bold;border-right:1px solid black '>S No.</td>
						  <td width=200px align='center' style='font-weight:bold;border-right:1px solid black '>Paper Code</td>
						  <td width=430px align='center' style='font-weight:bold;'>Paper Name</td>
					   </tr>
					   <tr style='border-bottom:1px solid black'>
					      <td width=100px align='center' style='border-right:1px solid black '>1</td>
						  <td width=200px align='center' style='border-right:1px solid black '><?php echo $roow[9]?></td>
						  <td width=430px > <?php echo $roow[3]?></td>
					   </tr>
					    <tr style='border-bottom:1px solid black'>
					      <td width=100px align='center' style='border-right:1px solid black '>2</td>
						  <td width=200px align='center' style='border-right:1px solid black '><?php echo $roow[10]?></td>
						  <td width=430px ><?php echo $roow[4]?></td>
					   </tr>
					    <tr style='border-bottom:1px solid black'>
					      <td width=100px align='center' style='border-right:1px solid black '>3</td>
						  <td width=200px align='center' style='border-right:1px solid black '><?php echo $roow[11]?></td>
						  <td width=430px ><?php echo $roow[5]?></td>
					   </tr>
					    <tr style='border-bottom:1px solid black'>
					      <td width=100px align='center' style='border-right:1px solid black '>4</td>
						  <td width=200px align='center' style='border-right:1px solid black '><?php echo $roow[12]?></td>
						  <td width=430px ><?php echo $roow[6]?></td>
					   </tr>
					   <?php
					   if(!empty($roow[13])) 
					   {
					   echo "<tr style='border-bottom:1px solid black;'>
					      <td width=100px align='center' style='border-right:1px solid black '>5</td>
						  <td width=200px align='center' style='border-right:1px solid black '> $roow[13]</td>
						  <td width=430px >$roow[7]</td>
					   </tr >";
					   }
					   
					   if(!empty($roow[14])) 
					   {
					   echo "<tr style='border-bottom:1px solid black;'>
					      <td width=100px align='center' style='border-right:1px solid black '>6</td>
						  <td width=200px align='center' style='border-right:1px solid black '>$roow[14]</td>
						  <td width=430px >$roow[8]</td>
					   </tr >";
					   }
					   
					   
					   
					   ?>
					   
					   </table>
					</div>
					<div style='width:720px;margin-top:10px'>
					<div style='width:240px;;font-size:15px;border-left:1px solid black;border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;display:inline-block;line-height:15px'>
					Certified that all the above entries are correct to the best of my knowledge and belief.
                    I am not appearing in any other University examination and their is no UM case against me.
                    I have deposited Examination fee. Fee once deposited will not be refunded.	
                    <br><br><br><br>
                    <span style='font-size:16px;margin-left:96px;font-weight:bold'>Signature of Student</span>					
					</div>
					<div style='border-left:none;;width:240px;;border:1px solid black;margin-left:-5px;display:inline-block;line-height:15px'>
					Certified that all the above entries are checked and verified by college and student is elligible 
                    to appear in above mentioned examination. Examination fee has been deposited through Online
                    and markesheet have been attached with exam form by the student.					
					
					<br><br><br>
                    <span style='font-size:16px;margin-left:34px;font-weight:bold'>Signature and seal of Principal</span>					
					</div>
					<div style='width:240px;border-right:1px solid black;border-bottom:1px solid black;;border-top:1px solid black;margin-left:-5px;display:inline-block;line-height:15px'>
					 All enteries has been verified and checked through record and documentsprovided by student. 
                    Student is qualified / not qualified to appear in <?php echo $a1; ?>&nbsp
                    <?php echo $b1; ?> Exam <?php echo $rps[24]; ?>.				
					
					<br><br><br><br><br>
                    <span style='font-size:16px;margin-left:75px;font-weight:bold'>Full signature of checker</span>					
					</div>
					
					
					
					</div>
					
					
					
				<div class="html2pdf__page-break"></div>
				 
				 
				  <div style='width:720px;font-weight:bold'>
					  &nbsp 2
					  <span style='margin-left:468px'>Date &nbsp <?php echo  date("d/m/Y");?>&nbsp &nbsp &nbsp Student Copy</span> <br>
                      <img src="userimages/bar.jpg" style='width:99px;height:40px;margin-left:600px'>					  
					
                     </div>
					 
					 <div style=';border-bottom:2px solid black;height:74px;width:720px;font-family:calibri'>
					    <div style='float:left;width:20%'>
						<img src='userimages/logoclg.png' style='margin-left:60px;width:80px;height:70px'>
						</div>
						<div style='float:right;font-size:20px;font-weight:bold;width:80%'>
						<span style='margin-left:130px'>BMS UNIVERSITY, KOTA</span>
						<br>
						<span style='margin-left:30px'>Regular Student <?php echo $rps[28] ?>&nbsp <?php echo $rps[29] ?>&nbsp Exam <?php echo $rps[24] ?>  </span>
						</div>
					 
					 </div>
					 
					 <div style='font-family:calibri;border-bottom:2px solid black;height:340px'>
					 <span style='font-weight:bold;font-size:16px;margin-left:25px'>College &nbsp &nbsp &nbsp   Department of Computer Science(BMS University)</span>
					 <span style='font-weight:bold;font-size:16px;margin-left:60px'>App. No. <?php echo $app; ?></span>
					 <br><br>
					 <div style='float:left;width:80%'>
					 
					 <span style='font-size:16px;margin-left:25px'>Student's Name</span><span style='font-size:16px;margin-left:45px'>: &nbsp <?php echo $rps[1]?></span><br>
					  <span style='font-size:16px;margin-left:25px'>Father's Name</span><span style='font-size:16px;margin-left:55px'>: &nbsp <?php echo $rps[2]?></span><br>
					 <span style='font-size:16px;margin-left:25px'>Mother's Name</span><span style='font-size:16px;margin-left:47px'>: &nbsp <?php echo $rps[3]?></span><br>
					  <span style='font-size:16px;margin-left:25px'>Gender</span><span style='font-size:16px;margin-left:100px'>: &nbsp <?php echo $rps[6]?></span><br>
					   <span style='font-size:16px;margin-left:25px'>Date of Birth</span><span style='font-size:16px;margin-left:66px'>: &nbsp <?php echo $rps[8]?></span><br>
					    <span style='font-size:16px;margin-left:25px'>Caste</span><span style='font-size:16px;margin-left:113px'>: &nbsp <?php echo $rps[5]?></span><br>
						 <span style='font-size:16px;margin-left:25px'>Enrollment No.</span><span style='font-size:16px;margin-left:50px'>: &nbsp <?php echo $rps[12]?></span><br>
					      <span style='font-size:16px;margin-left:25px'>Medium</span><span style='font-size:16px;margin-left:93px'>:&nbsp English</span><br>
						   <span style='font-size:16px;margin-left:25px'>Minority</span><span style='font-size:16px;margin-left:92px'>: &nbsp <?php echo $rps[4]?></span><br>
						    <span style='font-size:16px;margin-left:25px'>Mobile No.</span><span style='font-size:16px;margin-left:76px'>: &nbsp <?php echo $rps[10]?></span><br>
							 <span style='font-size:16px;margin-left:25px'>Address</span><span style='font-size:16px;margin-left:96px'>: &nbsp <?php echo $rps[14]." ".$rps[17]." ".$rps[15]?></span>
					</div>
					<div style='float:right;width:20%'>
					  <img src="uploadedimages/<?php echo $rps[43]; ?>" style='border:1px solid black;width:110px;height:140px' ><br><br>
					   <img src="uploadedimages/<?php echo $rps[44]; ?>" style=';width:120px;height:50px' >
					    <span style='font-weight:bold;margin-left:60px'>Signature</span>
					</div>
					
					
					</div>
				    <div style='width:720px;font-weight:bold'>
					Present Semester Papers<br>
					<?php
					  $a1=$rps[28];
					  $b1=$rps[29];
					  			  $con=mysqli_connect("localhost","root","","examport");
			                      $q=mysqli_query($con,"select * from subject where course='$a1' and Sem='$b1' ");
			                      $roow=mysqli_fetch_array($q)
					
					?>
					   <table border=1 width=718px>
					   <tr style='border-bottom:1px solid black'>
					      <td width=100px align='center' style='font-weight:bold;border-right:1px solid black '>S No.</td>
						  <td width=200px align='center' style='font-weight:bold;border-right:1px solid black '>Paper Code</td>
						  <td width=430px align='center' style='font-weight:bold;'>Paper Name</td>
					   </tr>
					   <tr style='border-bottom:1px solid black'>
					      <td width=100px align='center' style='border-right:1px solid black '>1</td>
						  <td width=200px align='center' style='border-right:1px solid black '><?php echo $roow[9]?></td>
						  <td width=430px > <?php echo $roow[3]?></td>
					   </tr>
					    <tr style='border-bottom:1px solid black'>
					      <td width=100px align='center' style='border-right:1px solid black '>2</td>
						  <td width=200px align='center' style='border-right:1px solid black '><?php echo $roow[10]?></td>
						  <td width=430px ><?php echo $roow[4]?></td>
					   </tr>
					    <tr style='border-bottom:1px solid black'>
					      <td width=100px align='center' style='border-right:1px solid black '>3</td>
						  <td width=200px align='center' style='border-right:1px solid black '><?php echo $roow[11]?></td>
						  <td width=430px ><?php echo $roow[5]?></td>
					   </tr>
					    <tr style='border-bottom:1px solid black'>
					      <td width=100px align='center' style='border-right:1px solid black '>4</td>
						  <td width=200px align='center' style='border-right:1px solid black '><?php echo $roow[12]?></td>
						  <td width=430px ><?php echo $roow[6]?></td>
					   </tr>
					  
					   <?php
					   if(!empty($roow[13])) 
					   {
					   echo "<tr style='border-bottom:1px solid black;'>
					      <td width=100px align='center' style='border-right:1px solid black '>5</td>
						  <td width=200px align='center' style='border-right:1px solid black '>$roow[13]</td>
						  <td width=430px >$roow[7]</td>
					   </tr >";
					   }
					   
					   if(!empty($roow[14])) 
					   {
					   echo "<tr style='border-bottom:1px solid black;'>
					      <td width=100px align='center' style='border-right:1px solid black '>6</td>
						  <td width=200px align='center' style='border-right:1px solid black '>$roow[14]</td>
						  <td width=430px >$roow[8]</td>
					   </tr >";
					   }
					   
					   
					   
					   ?>
					   
					   </table>
					</div>
					<div style='width:720px;margin-top:10px'>
					<div style='width:240px;;font-size:15px;border-left:1px solid black;border-top:1px solid black;border-bottom:1px solid black;border-right:1px solid black;display:inline-block;line-height:15px'>
					Certified that all the above entries are correct to the best of my knowledge and belief.
                    I am not appearing in any other University examination and their is no UM case against me.
                    I have deposited Examination fee. Fee once deposited will not be refunded.	
                    <br><br><br><br>
                    <span style='font-size:16px;margin-left:96px;font-weight:bold'>Signature of Student</span>					
					</div>
					<div style='border-left:none;;width:240px;;border:1px solid black;margin-left:-5px;display:inline-block;line-height:15px'>
					Certified that all the above entries are checked and verified by college and student is elligible 
                    to appear in above mentioned examination. Examination fee has been deposited through Online
                    and markesheet have been attached with exam form by the student.					
					
					<br><br><br>
                    <span style='font-size:16px;margin-left:34px;font-weight:bold'>Signature and seal of Principal</span>					
					</div>
					<div style='width:240px;border-right:1px solid black;border-bottom:1px solid black;;border-top:1px solid black;margin-left:-5px;display:inline-block;line-height:15px'>
					 All enteries has been verified and checked through record and documentsprovided by student. 
                    Student is qualified / not qualified to appear in <?php echo $a1; ?>&nbsp
                    <?php echo $b1; ?> Exam <?php echo $rps[24]; ?>.				
					
					<br><br><br><br><br>
                    <span style='font-size:16px;margin-left:75px;font-weight:bold'>Full signature of checker</span>					
					</div>
					
					
					
					</div>
				 
				 
				 
				 </div>
				 <?php
				 }
				 else
				 {
				    header("location:showadmit.php");
				 }
				 ?>
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
	</div>		
</div>	