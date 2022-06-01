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
				   <a href="successfull.php"><input type='button' style='width:130px' value="Back" ></a>
				   <input type='button' onclick="download()" value='Download' style='width:130px;margin-top:100px;margin-left:500px' />
				    <br><br>
					<div id="content" style='font-family:calibri;background-color:white;width:768px;height:1000px'>
					   <div style='width:768px;margin-left:310px;font-weight:bold'>Payment Receipt</div>
					   
					   <div style='width:768px;'>
					<div style='width:253px;font-weight:bold;font-size:15px;border:1px solid black;display:inline-block;line-height:15px'>
						<div style='height:20px;border-bottom:1px solid black'>
                          Reference No.<span style='margin-left:40px'>1123<?php echo $app;?></span>
                        </div>
                           						
                         <div style='border-bottom:1px solid black'>
                          <img src="userimages/logoclg.png" style='margin-top:10px;margin-left:10px;height:40px;width:50px'>
                          <span style='margin-left:30px'>BMS UNIVERSITY,KOTA</SPAN>
						 
						</div>	
                          <div STYLE='border-bottom:1px solid black'>
						    <p style='margin-top:10px;margin-left:60px'> College Copy(Online)&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span style='margin-left:20
							px;font-size:10px'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Date &nbsp <?php echo  date("d/m/Y");?></span></p>
							
							
						 </div>
						 <div STYLE='height:20px;border-bottom:1px solid black'>
						     <span STYLE='MARGIN-LEFT:45PX;font-size:16px'>DETAILS OF THE STUDENT</span>
                          </div>
						  <div style='font-weight:normal;border-bottom:1px solid black'> 
                             <br>						  
							 <span>&nbsp Student Name</span><span style='margin-left:20px'> <?php echo $rps[1]?></span><br>
							 <span>&nbsp Father Name</span><span style='margin-left:29px'> <?php echo $rps[2]?></span><br>
							 <span>&nbsp Mother Name</span><span style='margin-left:22px'> <?php echo $rps[3]?></span><br>
						     <span>&nbsp Enrollment No.</span><span style='margin-left:16px'> <?php echo $rps[12]?></span><br>
						     <span>&nbsp Category</span><span style='margin-left:54px'> <?php echo $rps[26]?></span><br>
						     <span>&nbsp Caste</span><span style='margin-left:75px'> <?php echo $rps[5]?></span><br>
						     <span>&nbsp College Code</span><span style='margin-left:32px'>34<span><br>
						     <span>&nbsp Challan No.</span><span style='margin-left:40px'>1123<?php echo $app;?></span><br>
						     <span>&nbsp Transaction ID</span><span style='margin-left:24px'>1011<?php echo $app;?>_1544</span><br>
						     <br>
						</div>
						<div style='height:80px;border-bottom:1px solid black'>
						 <img src='userimages/bar.jpg' style='margin-left:30px;margin-top:10px;height:50px;width:170px'/>
						</div>
						<div style='border-bottom:1px solid black'>
						   <span style='margin-left:75px;font-weight:bold;font-size:16px;font-family:calibri'>Fee Particulars</span><br>
						   <table style='width:253px'>
						       <tr>
							      <td>
								    Exam Form Fee
								  </td>
								  <td align='right'>
								    50
								  </td>
							   </tr>
							   <tr>
							      <td>
								    E-Suvidha Form
								  </td>
								  <td align='right'>
								    250
								  </td>
							   </tr>
							   <tr>
							      <td>
								    Examination Fee
								  </td>
								  <td align='right'>
								    1650
								  </td>
							   </tr>
						   </table>
						   <br>
						</div>
						<div style='border-bottom:1px solid black'>
						 <span style='font-size:17px;font-weight:bold;margin-left:74px'>Detail of Fee</span>
						<table style='margin-top:5px'>
						<tr style='font-weight:bold'>
							      <td>
								    Total Paid Amount
								  </td>
								  <td>
								    &nbsp &nbsp &nbsp  &nbsp &nbsp  Rs. &nbsp &nbsp &nbsp 1950
								  </td>
							   </tr>
						</table>
						<br>
						<span style='font-weight:normal'>&nbsp Amount (In words): Rs. One Tousand Nine Hundred and Fifty Rupees Only</span>
						</div>
						<div style='margin-top:5px;border-bottom:1px solid black;font-weight:normal;height:34px'>
						Mobile No<span style='margin-left:40px'><?php echo $rps[10] ?></span>
						<br>Signature of Depositor
						</div>
						<div style='height:30px;margin-top:10px;font-weight:bold'>
						      Regular &nbsp <?php echo $rps[28] ?>&nbsp <?php echo $rps[29] ?>&nbsp Exam &nbsp <?php echo $rps[24] ?>
						</div>
						
						
					</div>
					
					
					<div style=';;width:253px;;;;display:inline-block;line-height:15px'>
						<div style='width:253px;font-weight:bold;font-size:15px;border:1px solid black;display:inline-block;line-height:15px'>
						<div style='height:20px;border-bottom:1px solid black'>
                          Reference No.<span style='margin-left:40px'>1123<?php echo $app;?></span>
                        </div>
                           						
                         <div style='border-bottom:1px solid black'>
                          <img src="userimages/logoclg.png" style='margin-top:10px;margin-left:10px;height:40px;width:50px'>
                          <span style='margin-left:30px'>BMS UNIVERSITY,KOTA</SPAN>
						 
						</div>	
                           <div STYLE='border-bottom:1px solid black'>
						    <p style='margin-top:10px;margin-left:60px'> University Copy(Online)&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span style='margin-left:20
							px;font-size:10px'>&nbsp &nbsp &nbsp &nbsp Date &nbsp <?php echo  date("d/m/Y");?></span></p>
							
							
						 </div>
						 <div STYLE='height:20px;border-bottom:1px solid black'>
						     <span STYLE='MARGIN-LEFT:45PX;font-size:16px'>DETAILS OF THE STUDENT</span>
                          </div>
						  <div style='font-weight:normal;border-bottom:1px solid black'> 
                             <br>						  
							 <span>&nbsp Student Name</span><span style='margin-left:20px'> <?php echo $rps[1]?></span><br>
							 <span>&nbsp Father Name</span><span style='margin-left:29px'> <?php echo $rps[2]?></span><br>
							 <span>&nbsp Mother Name</span><span style='margin-left:22px'> <?php echo $rps[3]?></span><br>
						     <span>&nbsp Enrollment No.</span><span style='margin-left:16px'> <?php echo $rps[12]?></span><br>
						     <span>&nbsp Category</span><span style='margin-left:54px'> <?php echo $rps[26]?></span><br>
						     <span>&nbsp Caste</span><span style='margin-left:75px'> <?php echo $rps[5]?></span><br>
						     <span>&nbsp College Code</span><span style='margin-left:32px'>34<span><br>
						     <span>&nbsp Challan No.</span><span style='margin-left:40px'>1123<?php echo $app;?></span><br>
						     <span>&nbsp Transaction ID</span><span style='margin-left:24px'>1011<?php echo $app;?>_1544</span><br>
						     <br>
						</div>
						<div style='height:80px;border-bottom:1px solid black'>
						 <img src='userimages/bar.jpg' style='margin-left:30px;margin-top:10px;height:50px;width:170px'/>
						</div>
						<div style='border-bottom:1px solid black'>
						   <span style='margin-left:75px;font-weight:bold;font-size:16px;font-family:calibri'>Fee Particulars</span><br>
						   <table style='width:253px'>
						       <tr>
							      <td>
								    Exam Form Fee
								  </td>
								  <td align='right'>
								    50
								  </td>
							   </tr>
							   <tr>
							      <td>
								    E-Suvidha Form
								  </td>
								  <td align='right'>
								    250
								  </td>
							   </tr>
							   <tr>
							      <td>
								    Examination Fee
								  </td>
								  <td align='right'>
								    1650
								  </td>
							   </tr>
						   </table>
						   <br>
						</div>
						<div style='border-bottom:1px solid black'>
						 <span style='font-size:17px;font-weight:bold;margin-left:74px'>Detail of Fee</span>
						<table style='margin-top:5px'>
						<tr style='font-weight:bold'>
							      <td>
								    Total Paid Amount
								  </td>
								  <td>
								    &nbsp &nbsp &nbsp  &nbsp &nbsp  Rs. &nbsp &nbsp &nbsp 1950
								  </td>
							   </tr>
						</table>
						<br>
						<span style='font-weight:normal'>&nbsp Amount (In words): Rs. One Tousand Nine Hundred and Fifty Rupees Only</span>
						</div>
						<div style='margin-top:5px;border-bottom:1px solid black;font-weight:normal;height:34px'>
						Mobile No<span style='margin-left:40px'><?php echo $rps[10] ?></span>
						<br>Signature of Depositor
						</div>
						<div style='height:30px;margin-top:10px;font-weight:bold'>
						      Regular &nbsp <?php echo $rps[28] ?>&nbsp <?php echo $rps[29] ?>&nbsp Exam &nbsp <?php echo $rps[24] ?>
						</div>
						
						
					</div>			
					</div>
					
					
					<div style='width:253px;;display:inline-block;line-height:15px'>
					 	<div style='width:253px;font-weight:bold;font-size:15px;border:1px solid black;display:inline-block;line-height:15px'>
						<div style='height:20px;border-bottom:1px solid black'>
                          Reference No.<span style='margin-left:40px'>1123<?php echo $app;?></span>
                        </div>
                           						
                         <div style='border-bottom:1px solid black'>
                          <img src="userimages/logoclg.png" style='margin-top:10px;margin-left:10px;height:40px;width:50px'>
                          <span style='margin-left:30px'>BMS UNIVERSITY,KOTA</SPAN>
						 
						</div>	
                         <div STYLE='border-bottom:1px solid black'>
						    <p style='margin-top:10px;margin-left:60px'> Student Copy(Online)&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <span style='margin-left:20
							px;font-size:10px'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Date &nbsp <?php echo  date("d/m/Y");?></span></p>
							
							
						 </div>
						 <div STYLE='height:20px;border-bottom:1px solid black'>
						     <span STYLE='MARGIN-LEFT:45PX;font-size:16px'>DETAILS OF THE STUDENT</span>
                          </div>
						  <div style='font-weight:normal;border-bottom:1px solid black'> 
                             <br>						  
							 <span>&nbsp Student Name</span><span style='margin-left:20px'> <?php echo $rps[1]?></span><br>
							 <span>&nbsp Father Name</span><span style='margin-left:29px'> <?php echo $rps[2]?></span><br>
							 <span>&nbsp Mother Name</span><span style='margin-left:22px'> <?php echo $rps[3]?></span><br>
						     <span>&nbsp Enrollment No.</span><span style='margin-left:16px'> <?php echo $rps[12]?></span><br>
						     <span>&nbsp Category</span><span style='margin-left:54px'> <?php echo $rps[26]?></span><br>
						     <span>&nbsp Caste</span><span style='margin-left:75px'> <?php echo $rps[5]?></span><br>
						     <span>&nbsp College Code</span><span style='margin-left:32px'>34<span><br>
						     <span>&nbsp Challan No.</span><span style='margin-left:40px'>1123<?php echo $app;?></span><br>
						     <span>&nbsp Transaction ID</span><span style='margin-left:24px'>1011<?php echo $app;?>_1544</span><br>
						     <br>
						</div>
						<div style='height:80px;border-bottom:1px solid black'>
						 <img src='userimages/bar.jpg' style='margin-left:30px;margin-top:10px;height:50px;width:170px'/>
						</div>
						<div style='border-bottom:1px solid black'>
						   <span style='margin-left:75px;font-weight:bold;font-size:16px;font-family:calibri'>Fee Particulars</span><br>
						   <table style='width:253px'>
						       <tr>
							      <td>
								    Exam Form Fee
								  </td>
								  <td align='right'>
								    50
								  </td>
							   </tr>
							   <tr>
							      <td>
								    E-Suvidha Form
								  </td>
								  <td align='right'>
								    250
								  </td>
							   </tr>
							   <tr>
							      <td>
								    Examination Fee
								  </td>
								  <td align='right'>
								    1650
								  </td>
							   </tr>
						   </table>
						   <br>
						</div>
						<div style='border-bottom:1px solid black'>
						 <span style='font-size:17px;font-weight:bold;margin-left:74px'>Detail of Fee</span>
						<table style='margin-top:5px'>
						<tr style='font-weight:bold'>
							      <td>
								    Total Paid Amount
								  </td>
								  <td>
								    &nbsp &nbsp &nbsp  &nbsp &nbsp  Rs. &nbsp &nbsp &nbsp 1950
								  </td>
							   </tr>
						</table>
						<br>
						<span style='font-weight:normal'>&nbsp Amount (In words): Rs. One Tousand Nine Hundred and Fifty Rupees Only</span>
						</div>
						<div style='margin-top:5px;border-bottom:1px solid black;font-weight:normal;height:34px'>
						Mobile No<span style='margin-left:40px'><?php echo $rps[10] ?></span>
						<br>Signature of Depositor
						</div>
						<div style='height:30px;margin-top:10px;font-weight:bold'>
						      Regular &nbsp <?php echo $rps[28] ?>&nbsp <?php echo $rps[29] ?>&nbsp Exam &nbsp <?php echo $rps[24] ?>
						</div>
						
						
					</div>
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
		margin:       1,
        filename:     'challan.pdf',
        image:        { type: 'jpeg', quality: 0.98 },
        html2canvas:  { scale: 0, logging: true, dpi: 192, letterRendering: true },
        jsPDF:        { unit: 'mm', format: 'a4', orientation: 'portrait' }
		});
		}
    </script>       
	</div>		
</div>	