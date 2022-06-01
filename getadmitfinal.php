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

       <h1 class="logo me-auto"><a href="index.html" style='color:#3575D3 !important;font-weight:bold'>BMS University</a></h1>
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

    </div>
  </header><!-- End Header -->

  <header id="header" class="fixed-top" style=';;margin-top:52px;height:5px;background-color:rgba(0,0,0,0)'>
       <?php
  
      echo "<B style=';margin-left:1170px;;font-size:13px;color:black'>" .date('d F, Y (l)'). " </B>";
	  
    ?>
	   <iframe src="http://free.timeanddate.com/clock/i7uvf0e9/n1738/tct/pct/ftb" frameborder="0" width="81" height="18" style='margin-left:1230px' allowtransparency="true"></iframe>

	</header>
 <div style=''>
 <div style='margin-left:320px;' >
 
 
<?php
             $_SESSION["appliiii"]=$_POST['app'];
			 $app=$_SESSION["appliiii"];
		     $a=$_SESSION["a"];
			 $b=$_SESSION["b"];
			
			 
			  $con=mysqli_connect("localhost","root","","examport");
			  $rs=mysqli_query($con,"select * from admitroll where application='$app' and course='$a' and sem='$b'");
			  if($rps=mysqli_fetch_array($rs))
			  {
			     
				 ?>
				   <a href="showadmit.php"><input type='button' style='width:130px' value="Back" ></a>
				   <input type='button' onclick="download()" value='Download' style='width:130px;margin-top:100px;margin-left:440px' />
				    <br><br>
					<div id="content">
					<div  style='width:716px;border:1px solid black;background-color:white;height:980px'>
					<br>
                      <img src='userimages/logoclg.png' style='width:109px;color:black;height:90px;margin-left:20px;margin-top:-10px'>
					     <TABLE STYLE='MARGIN-LEFT:220PX;MARGIN-TOP:-105PX'>
						    <TR><TD STYLE='FONT-SIZE:25PX;FONT-WEIGHT:BOLD;FONT-FAMILY:CALIBRI'>&nbsp BMS UNIVERSITY,KOTA,RAJ.</TD></TR>
							<TR><TD STYLE='FONT-SIZE:21PX;FONT-WEIGHT:BOLD;FONT-FAMILY:CALIBRI;MARGIN-LEFT:-10PX'>&nbsp ADMISSION CARD(PROVISIONAL)</TD></TR>
						    <TR><TD STYLE='FONT-SIZE:18PX;FONT-WEIGHT:BOLD;FONT-FAMILY:CALIBRI;'>&nbsp &nbsp &nbsp  <?php echo $rps[4] ?>(SEM) &nbsp <?php echo $rps[5] ?>&nbsp EXAM <?php echo $rps[6]?></TD></TR>
						   
						</TABLE>
						<table style='width:716px;margin-top:20px'>
						<tr style='border-bottom:2px solid black'><td></td></tr>
		                </table>
						<?php
						  $con=mysqli_connect("localhost","root","","examport");
			              $qsapp=mysqli_query($con,"select * from examform where Application='$app' and coursess='$a' and sems='$b'");
						  $pkl=mysqli_fetch_array($qsapp);
						
						?>
						<div style=''>
						<div style='border:none;background-color:white;float:left;width:80%;'>
						<p style='margin-left:10px;font-size:15px;font-family:calibri;font-weight:bold;margin-top:10px'>Roll No.<span style='margin-left:106px'>: <?php echo $rps[2] ?></span>     <span style='margin-left:100px'>Enrollment No.</span><span style='margin-left:10px'>: <?php echo $pkl[12] ?></span>
						  <br>
                          <br>Name of Center <span style='margin-left:55px'>: CS Department Of BMS University</span>
						  <br>Name of College<span style='margin-left:55px'>: Department of Computer Science ,BMS University</span>
						  <br>Candidate's Name<span style='margin-left:44px'>: <?php echo $pkl[1] ?></span>
						  <br>Father's Name<span style='margin-left:67px'>: <?php echo $pkl[2] ?></span>
						  <br>Mother's Name<span style='margin-left:61px'>: <?php echo $pkl[3] ?></span>
						  <br>Category:<span style='margin-left:99px'>: <?php echo $pkl[26] ?></span>
						  <br>
						</div>
						<div style='border:none;;;background-color:white;float:right;width:20%;'>
						  <div style='width:10%;height:20%;margin-left:7px;margin-top:4px;border:1px solid white'>
						    <img src="uploadedimages/<?php echo $pkl[43]; ?>" style='width:120px;;height:150px'><br>
							<img src="uploadedimages/<?php echo $pkl[44]; ?>" style='width:120px;;height:40px'><br>
							
						  </div>
						
						</div>
						</div>
						<div style=''>
						
						   <table  border=1 style=';border-left:none;border-right:none' width=716px style=''>
						       <tr style='border-bottom:1px solid black'>
							     <td align='center' style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'>Paper Code</td>
								 <td align='center' style=';border-right:1px solid black;width:250px;font-size:15px;font-family:calibri;font-weight:bold'>Paper Name</td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'>Grade</td>
								 <td width='50px' style='border-right:1px solid black;'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;width:160px;font-family:calibri;font-weight:bold'>Bar Code No.</td>
								 <td align='center'  style=';border-right:1px solid black;font-size:15px;width:100px;font-family:calibri;font-weight:bold'>Verified By Examiner</td>
								</tr>
								<?php
								    
			                        $subsel=mysqli_query($con,"select * from subject where course='$a' and Sem='$b'");
						            $choose=mysqli_fetch_array($subsel);
								
								?>
								 <tr style='border-bottom:1px solid black'>
							     <td align='center' style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[9] ?></td>
								 <td  style='border-right:1px solid black;width:250px;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[3] ?></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td width='50px' style='border-right:1px solid black;'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								</tr>
								<tr style='border-bottom:1px solid black'>
							     <td align='center' style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[10] ?></td>
								 <td  style='border-right:1px solid black;width:250px;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[4] ?></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td width='50px' style='border-right:1px solid black'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								</tr>
								<tr style='border-bottom:1px solid black'>
							     <td align='center' style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[11] ?></td>
								 <td  style='border-right:1px solid black;width:250px;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[5] ?></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td width='50px' style='border-right:1px solid black'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								</tr>
								<tr style='border-bottom:1px solid black'>
							     <td align='center' style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[12] ?></td>
								 <td  style='border-right:1px solid black;width:250px;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[6] ?></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td width='50px' style='border-right:1px solid black'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								</tr>
								<tr style='border-bottom:1px solid black'>
							     <td align='center' style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[13] ?></td>
								 <td  style='border-right:1px solid black;width:250px;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[7] ?></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td width='50px' style='border-right:1px solid black'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								</tr>
								<tr style='border-bottom:1px solid black'>
							     <td align='center' style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[14] ?></td>
								 <td  style='border-right:1px solid black;width:250px;font-size:15px;font-family:calibri;font-weight:bold'><?php echo $choose[8] ?></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td width='50px' style='border-right:1px solid black'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								</tr>
								<tr style='border-bottom:1px solid black;height:20px'>
							     <td align='center' style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center' style='border-right:1px solid black;width:250px;font-size:15px;font-family:calibri;font-weight:bold'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td width='50px' style='border-right:1px solid black'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								</tr>
								<tr style='border-bottom:1px solid black;height:20px'>
							     <td align='center' style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center' style='border-right:1px solid black;width:250px;font-size:15px;font-family:calibri;font-weight:bold'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td width='50px' style='border-right:1px solid black'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								</tr>
								<tr style='border-bottom:1px solid black;height:20px'>
							     <td align='center' style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center' style='border-right:1px solid black;width:250px;font-size:15px;font-family:calibri;font-weight:bold'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td width='50px' style='border-right:1px solid black'></td>
								  <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								 <td align='center'  style='border-right:1px solid black;font-size:15px;font-family:calibri;font-weight:bold'></td>
								</tr>
								
								
						   </table>
						</div>
					
					
					
					
					
					
					<div style='margin-top:250px;margin-left:500px'>
					<img src='userimages/sig.png' style='width:160px;height:50px'>
					
                   </div>
				   <div style=';margin-left:470px'>
					<span STYLE='FONT-WEIGHT:BOLD; FONT-FAMILY:CALIBRI'>CONTROLLER OF EXAMINATION</span>
					
					
                   </div>
                 </div>
				<div class="html2pdf__page-break"></div>
				 
				 
				 <div style='background-color:white;width:716px;height:900px'>
				 
				 
				 <br><br>
				<span style='font-weight:bold;font-size:16px;font-family:calibri'>&nbsp  The following instructions are to be followed by candidates on the day of examination: </span>
                <div style='margin-left:20px'>
				<span style=';font-size:14px;font-family:calibri'><br><br>
                       <li>&nbsp Applicants need to sign the admit card in front of the exam invigilator at the time of verification at the exam center. In no condition should the admit card be signed beforehand, otherwise, the applicant will be debarred from taking the examination.</li>
                      <li>&nbsp All rough papers will have to be returned to the invigilator after the exam. No applicant should attempt to take the rough papers out of the  2021 test center as it will lead to disqualification.</li>
<li>&nbsp Applicants will not be allowed to appear for the  exam unless and until they produce the  Admit Card 2021 to the invigilator.</li>
<li>&nbsp Reach the examination center 30 minutes before the starting of the test.</li>
<li>&nbsp Do not carry calculators, mobile phones, pagers, electronic devices, log tables, reference books, notes, bits of paper. All these items are not allowed inside the examination hall.</li>
<li>&nbsp Candidates are advised to familiarize themselves with the location of the test center and plan travel time accordingly.</li>
<li>&nbsp Pencils, erasers, and rough paper will be distributed to each candidate. No need to bring stationary /writing material to the exam center.</li>
<li>&nbsp The admit card should be preserved by the applicant until the entire admission process is completed as the same will be required during the counselling process.</li>
<li>&nbsp Candidates are allowed to take a test booklet or question paper with them.</li>
<li>&nbsp Applicants are not allowed to leave the exam hall before the exam ends and sheets have been collected by the invigilator.</li>
<li>&nbsp Request for issue of duplicate admit card of  2021 will not be entertained after the conduct of the test under any circumstances.</li>
				 
				 
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
        filename:     '<?php echo $pkl[52]?>.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 0, logging: true, dpi: 192, letterRendering: true },
        jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
		});
		}
    </script>       
	</div>		
</div>	