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

      <h1 class="logo me-auto"><a href="index.html" style='color:#3d75d3 !important'>BMS University</a></h1>
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
             $roll=$_POST["roll"];
		     $a=$_SESSION["a"];
			 $b=$_SESSION["b"];
			 $c=$_SESSION["c"];
			 
			  $con=mysqli_connect("localhost","root","","examport");
			  $rs=mysqli_query($con,"select * from result where Rollno='$roll' and course='$a' and semester='$b'");
			  if($rps=mysqli_fetch_array($rs))
			  {
			      $g1=((int)$rps[13]+(int)$rps[15]);
				  $g2=((int)$rps[20]+(int)$rps[22]);
				  $g3=((int)$rps[27]+(int)$rps[29]);
				  $g4=((int)$rps[34]+(int)$rps[36]);
				  if(!empty($rps[41]) && !empty($rps[43]))
				  $g5=((int)$rps[41]+(int)$rps[43]);
				  if(!empty($rps[48]) && !empty($rps[50]))
				  $g6=((int)$rps[48]+(int)$rps[50]); 
				 
				 if($g1>87 && $g1<=100)
				 {
				  $gradp=10;
				  $yourgmark="P";
				 }
				 if($g1>76 && $g1<=87)
				 {
				  $gradp=9;
				  $yourgmark="P";
				 }
				 if($g1>68 && $g1<=76)
				 {
				  $gradp=8;
				  $yourgmark="P";
				 }
				 if($g1>55 && $g1<=68)
				 {
				  $gradp=7;
				  $yourgmark="P";
				 }
				 if($g1>34 && $g1<=55)
				 {
				  $gradp=6;
				  $yourgmark="P";
				 }
				 if($g1<34)
				 {
				  $gradp=5;
				  $yourgmark="F";
				 }
				 
				 
				 
				 
				 if($g2>87 && $g2<=100)
				 {
				  $gradp2=10;
				  $yourgmark2="P";
				 }
				 if($g2>76 && $g2<=87)
				 {
				  $gradp2=9;
				  $yourgmark2="P";
				 }
				 if($g2>68 && $g2<=76)
				 {
				  $gradp2=8;
				  $yourgmark2="P";
				 }
				 if($g2>55 && $g2<=68)
				 {
				  $gradp2=7;
				  $yourgmark2="P";
				 }
				 if($g2>34 && $g2<=55)
				 {
				  $gradp2=6;
				  $yourgmark2="P";
				 }
				 if($g2<34)
				 {
				  $gradp2=5;
				  $yourgmark2="F";
				 }
				 
				  if($g3>87 && $g3<=100)
				 {
				  $gradp3=10;
				  $yourgmark3="P";
				 }
				 if($g3>76 && $g3<=87)
				 {
				  $gradp3=9;
				  $yourgmark3="P";
				 }
				 if($g3>68 && $g3<=76)
				 {
				  $gradp3=8;
				  $yourgmark3="P";
				 }
				 if($g3>55 && $g3<=68)
				 {
				  $gradp3=7;
				  $yourgmark3="P";
				 }
				 if($g3>34 && $g3<=55)
				 {
				  $gradp3=6;
				  $yourgmark3="P";
				 }
				 if($g3<34)
				 {
				  $gradp3=5;
				  $yourgmark3="F";
				 }
				 
				 
				 
				  if($g4>87 && $g4<=100)
				 {
				  $gradp4=10;
				  $yourgmark4="P";
				 }
				 if($g4>76 && $g4<=87)
				 {
				  $gradp4=9;
				  $yourgmark4="P";
				 }
				 if($g4>68 && $g4<=76)
				 {
				  $gradp4=8;
				  $yourgmark4="P";
				 }
				 if($g4>55 && $g4<=68)
				 {
				  $gradp4=7;
				  $yourgmark4="P";
				 }
				 if($g4>34 && $g4<=55)
				 {
				  $gradp4=6;
				  $yourgmark4="P";
				 }
				 if($g4<34)
				 {
				  $gradp4=5;
				  $yourgmark4="F";
				 }
				 
				 
				  if($g5>87 && $g5<=100)
				 {
				  $gradp5=10;
				  $yourgmark5="P";
				 }
				 if(!empty($rps[41]))
				 {
				   if($g5>76 && $g5<=87)
				   {
				     $gradp5=9;
				     $yourgmark5="P";
				   }
				 }
				 if(!empty($rps[41]))
				 {
				   if($g5>68 && $g5<=76)
			    	 {
				      $gradp5=8;
				      $yourgmark5="P";
					 }
				 }
				 if(!empty($rps[41]))
				 {
				   if($g5>55 && $g5<=68)
				   {
				     $gradp5=7;
				     $yourgmark5="P";
				    }
				 }
				 if(!empty($rps[41]))
				 {
				    if($g5>34 && $g5<=55)
				    {
				      $gradp5=6;
				      $yourgmark5="P";
				     }
				 }
				 if(!empty($rps[41]))
				 {
				   if($g5<34)
				   {
				     $gradp5=5;
				     $yourgmark5="F";
				   }
				 }
				 
				 
				 if(!empty($rps[48]))
				 {
				   if($g6>87 && $g6<=100)
				   {
				     $gradp6=10;
				     $yourgmark6="P";
				    }
				}
				if(!empty($rps[48]))
				{
				 
				  if($g6>76 && $g6<=87)
				  {
				   $gradp6=9;
				   $yourgmark6="P";
				  }
				}
				
				if(!empty($rps[48]))
				{
				  if($g6>68 && $g6<=76)
				  {
				   $gradp6=8;
				   $yourgmark6="P";
				  }
				}
				
			    if(!empty($rps[48]))
				{
				 if($g6>55 && $g6<=68)
				 {
				  $gradp6=7;
				  $yourgmark6="P";
				  }
				 }
				 if(!empty($rps[48]))
				 {
				  if($g6>34 && $g6<=55)
				  {
				   $gradp6=6;
				   $yourgmark6="P";
				   }
				  }
				 if($g6<34)
				 {
				  $gradp6=5;
				  $yourgmark6="F";
				 }
				 
				 if(!empty($rps[41]) && !empty($rps[48]))
				 {
				  $total=($g1+$g2+$g3+$g4+$g5+$g6);
				  $per=(($total/600)*100);
				  if($total>198)
				  $rema="Pass";
				  else
				  $rema="Fail";
				 }
				 else
				 {
				  $total=($g1+$g2+$g3+$g4);
				  $per=(($total/400)*100);
				  if($total>132)
				  $rema="Pass";
				  else
				  $rema="Fail";
				 }
			      
				  
			      
			     
			      
			     
			     ?>
				 
				 
				   <a href="resultsessionend.php"><input type='button' style='width:130px' value="Back" ></a>
				   <input type='button' onclick="download()" value='Download result' style=';margin-top:100px;margin-left:440px' />
				    <br><br>
					<div style=' ' id="content" style='width:716px'>
					
                     <table style='background-color:white' border=1 width=714px cellspacing=0 cellpadding=2 style='margin-top:130px'>
                      <tr><TD colspan=2 rowspan=4 style='width:80px;border:none' ><img src='userimages/logoclg.png' style='width:100px;color:black;height:80px;margin-left:20px'></TD><td colspan=6  style='font-size:22px;BORDER:NONE;font-weight:bold'><span style='margin-left:60px'>BMS UNIVERSITY</span></td></tr>
		              <tr><td colspan=6 style='font-size:13px;BORDER:NONE'><span style='margin-left:57px;color:black'>Accredited with 'A' Grade by NAAC</span></td></tr>
		               <tr><td colspan=6  style='border:none;margin-right:1px solid blackfont-size:15px;BORDER:NONE;FONT-WEIGHT:BOLD'><span style='margin-left:66px;color:black'>STATEMENT OF MARKS</span></td></tr>
                       <tr><td  style='border:none;margin-right:1px solid black'></td></tr><tr ><td style='border:none;border:none;margin-right:1px solid black'></td></tr>
		               <tr><td style='border:none;border:none;margin-right:1px solid black'></td></tr><tr><td style='border:none;margin-right:1px solid black'></td></tr>
					   <tr>
					      <td colspan=1 style='font-weight:bold;border:none;FONT-SIZE:16PX;font-family:calibri;color:black'>&nbsp NAME</td>
					      <td colspan=3 style=';FONT-SIZE:18PX;border:none;font-family:calibri;color:black'>: &nbsp <?php echo "$rps[2]"?></td>
						  
						  <td  colspan=2 style='font-weight:bold;border:none;FONT-SIZE:16PX;font-family:calibri;color:black'>ROLL NO.</td>
						  <td colspan=2 style=';FONT-SIZE:16PX;border:none;font-family:calibri;color:black'>: &nbsp <?php echo "$rps[1]"?></td>
					   
					   </tr>
					    <tr>
					      <td colspan=1 style='font-weight:bold;border:none;FONT-SIZE:16PX;font-family:calibri;color:black;color:black'>&nbsp FATHER'S NAME</td>
					      <td colspan=3 style=';FONT-SIZE:16PX;border:none;color:black'>: &nbsp <?php echo "$rps[3]"?></td>
						  
						  <td colspan=2 style='font-weight:bold;border:none;FONT-SIZE:16PX;font-family:calibri;color:black'>ENROLLMENT NO.</td>
						  <td colspan=2 style=';FONT-SIZE:16PX;border:none;color:black'>: &nbsp <?php echo "$rps[5]"?></td>
					   
					   </tr>
					   <tr>
					      <td colspan=1 style='font-weight:bold;border:none;FONT-SIZE:16PX;font-family:calibri;color:black'>&nbsp MOTHER'S NAME</td>
					      <td colspan=3 style=';FONT-SIZE:16PX;border:none;color:black'>: &nbsp <?php echo "$rps[4]"?></td>
						  
						  <td colspan=2 style='font-weight:bold;border:none;FONT-SIZE:16PX;font-family:calibri;color:black'>CATEGORY</td>
						  <td colspan=2 style=';FONT-SIZE:16PX;border:none;color:black'>: &nbsp <?php echo "$rps[6]"?></td>
					   
					   </tr>
					   <tr><td colspan=8 style='border:none'></td></tr>
					   <tr><td colspan=8 style='border:none'></td></tr><tr><td COLSPAN=8 style='border:none'></td></tr>
					   <tr><td COLSPAN=8 ALIGN='CENTER' style='border:none;font-weight:bold;FONT-SIZE:16PX;;color:blackfont-family:calibri'><?php echo $rps[7] ?>&nbsp <?php echo $rps[8] ?> CBCS EXAMINATION <?php echo $rps[9] ?>  </td></tr>
					     <tr><td COLSPAN=8 style='border:none'></td></tr><tr><td COLSPAN=8 style='border:none'></td></tr><tr><td colspan=8 style='border:none'></td></tr>
						 </table>
						 <table style='background-color:white;border-left:1px solid black;border-right:1px solid black' width=714px cellspacing=0 cellpadding=2>
						 <tr style='border-bottom:1px solid black'>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;font-weight:bold;color:black' align='center'>Subject Code</td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;font-weight:bold;color:black' align='center'>Subject Name</td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;font-weight:bold;color:black' align='center'>External<br> Marks<br>(80/100)</td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;font-weight:bold;color:black' align='center'>External<br> Grade<br>Letter</td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;font-weight:bold;color:black' align='center'>Internal<br> Marks<br>(20)</td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;font-weight:bold;color:black' align='center'>Internal<br>Grade<br>Letter</td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;font-weight:bold;color:black' align='center'>Grade<br>Point</td>
						   <td style='border-bottom:1px solid black;;font-size:13px;font-weight:bold;color:black' align='center'>Remarks</td>
						   
						 </tr>
						 <tr style='height:25px'>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[11] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[12] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;color:black;' align='center'><?php echo $rps[13] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[14] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;color:black;' align='center'><?php echo $rps[15] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[16]?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $gradp?></td>
						   <td style='border-bottom:1px solid black;font-size:13px;;color:black' align='center'><?php echo $yourgmark?></td>
						   
						 </tr>
						 <tr style='height:25px'>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;;color:black;font-size:13px;' align='center'><?php echo $rps[18] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[19] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[20] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[21] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[22] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[23]?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $gradp2?></td>
						   <td style='border-bottom:1px solid black;font-size:13px;;color:black' align='center'><?php echo $yourgmark2?></td>
						   
						 </tr>
						 <tr style='height:25px'>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[25] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[26] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[27] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[28] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[29] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[30]?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $gradp3?></td>
						   <td style='border-bottom:1px solid black;font-size:13px;;color:black' align='center'><?php echo $yourgmark3?></td>
						   
						 </tr>
						 
						 <tr style='height:25px'>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[32] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[33] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[34] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[35] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[36] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[37]?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $gradp4?></td>
						   <td style='border-bottom:1px solid black;font-size:13px;;color:black' align='center'><?php echo $yourgmark4?></td>
						   
						 </tr>
						 
						  <tr style='height:25px'>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[39] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[40] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[41] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[42] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[43] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[44]?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php if(!empty($rps[41])){echo $gradp5;}?></td>
						   <td style='border-bottom:1px solid black;font-size:13px;;color:black' align='center'><?php if(!empty($rps[41])){echo $yourgmark5;}?></td>
						   
						 </tr>
						 <tr style='height:25px'>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[46] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[47] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[48] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[49] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[50] ?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php echo $rps[51]?></td>
						   <td style='border-bottom:1px solid black;border-right:1px solid black;font-size:13px;;color:black' align='center'><?php if(!empty($rps[48])) {echo $gradp6;}?>
						                                                     </td>
						   <td style='border-bottom:1px solid black;font-size:13px;;color:black' align='center'><?php if(!empty($rps[48])){echo $yourgmark6;}?></td>
						   
						 </tr>
						 
						 <tr >
						   <td colspan=2 style='border-bottom:1px solid black;font-size:13px;font-weight:bold;height:35px;color:black' >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Total Marks: &nbsp &nbsp<?php echo $total?><?php if(!empty ($rps[41])){echo "/600";} else {echo "/400"; }?></td>
						   
						   <td colspan=3 style='border-bottom:1px solid black;font-size:13px;;font-weight:bold;color:black' align='center'>Percentage:&nbsp <?php echo number_format($per,2)?>% </td>
						   <td colspan=3 style='border-bottom:1px solid black;font-size:13px;;font-weight:bold;color:black' align='center'>Result: &nbsp<?php echo $rema?> 
						                                                                                     </td>
						   
						   
						 </tr>
						  <tr>
						   <td colspan=8 style='border-bottom:1px solid black;font-size:14px;font-weight:bold;height:35px;color:black' >&nbsp &nbsp College: Department of Computer Science(BMS University) </td>
						   
						 </tr>
						  <tr>
						   <td colspan=8 style='font-size:14px;font-weight:bold;height:40px;border:none;color:black' >&nbsp &nbsp G-Passsed by Grace F-Failed A-Absent <br>&nbsp &nbsp Due-Due Paper</td>
						   
						 </tr>
						 <tr><td colspan=8></td></tr>
						 <tr>
						   <td colspan=3 style=';font-size:14px;font-weight:bold;height:40px;border:none;border-bottom:1px solid black;color:black'>&nbsp &nbsp Result declared on :  <?php echo $c ?></td>
						   <td colspan=5  style=';font-size:14px;font-weight:bold;height:40px;border:none;border-bottom:1px solid black;color:black' >&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp CONTROLLER OF EXAMINATION</td>
						   
						 </tr>
						 <tr>
						   <td colspan=8  style='border-bottom:1px solid black;font-size:14px;font-weight:bold;height:35px;border:none;border-bottom:1px solid black;color:black' >&nbsp &nbsp *This is a computer generated gradesheet</td>
						   
						 </tr>
						
						 
						 
						 
						 
	                 </table>
						 </table>
					 <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

                 </div>
				 <?php
				 }
				 else
				 {
				    header("location:resultpage.php");
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