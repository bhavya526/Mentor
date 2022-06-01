<?php
session_start();


?>
<script type="text/javascript" language="javascript">
	        
	      function box()
		  {
		     var userval = confirm("Are you sure you want to LOG OUT ?");
			 if(userval==true)
			 {
			    window.open("logoutsessiondestroy.php","_self");
			    return true;
			 }
			 else 
			 {
			    
				 return false;
			    
			 }
		  }
		  
		  function allert()
		  {
		     
		     alert(
			        
			   
			 "Your data has been saved successfully!");
		     
		  }
		 
	   </script>

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
         
		
		
		
      </nav><!-- .navbar -->
     

      

    </div>
  </header><!-- End Header -->
<header id="header" class="fixed-top" style=';;margin-top:3px;height:5px;background-color:rgba(0,0,0,0)'>
       <?php
  
      echo "<B style=';margin-left:1170px;;font-size:13px;color:black'>" .date('d F, Y (l)'). " </B>";
	  
    ?>
	   <iframe src="http://free.timeanddate.com/clock/i7uvf0e9/n1738/tct/pct/ftb" frameborder="0" width="81" height="18" style='margin-left:1230px' allowtransparency="true"></iframe>

	</header><!-- End Header -->
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" style='background:linear-gradient(to right,#3575D3,#3575D3,white) !important;margin-top:60px' >
      <div class="container" >
        <h2 style='margin-top:5px'>Examination Form 21-22</h2>
        
      </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact" style='background-color:#ffffff !important;height:auto'>
      
      <div class="container"  >
         
		 <div style=';background-image:url("userimages/11.png");background-size: cover;;margin-left:-120px 
		 ;margin-right:-116px;margin-top:-10px '>
           
	          <form action="" method="POST">

	   


    

<?php
 $id=$_SESSION["idd"];
  $semroll=$_SESSION['lastroll'];
 
   $con=mysqli_connect("localhost","root","","examport");
   
   $sql = "SELECT * from examform  WHERE lastsemroll='$semroll' ";
      $result = mysqli_query($con, $sql); 

      $row = mysqli_fetch_array($result);
   
      $_SESSION['mystate']=$row[8];
   
   
if(isset($_POST['next']))
{
                  

                  $_SESSION['cname']=$_POST['c1'];
                  $_SESSION['father']=$_POST['f1'];
				  $_SESSION['mother']=$_POST['m1'];
				  $_SESSION['minority']=$_POST['pul'];
				  $_SESSION['categ']=$_POST['pulo'];
				  $_SESSION['gen']=$_POST['rw'];
				  $_SESSION['mystate']=$_POST['pulq'];
				  $_SESSION['DOB']=$_POST['da'];
				  $_SESSION['mobile']=$_POST['p1'];
				  $_SESSION['nation']=$_POST['n1'];
				  $_SESSION['rel']=$_POST['pulos'];
				  $_SESSION['enroll']=$_POST['e1'];
				  $_SESSION['aadhar']=$_POST['a1'];
                  
                
				 
                 $_SESSION['address1']=$_POST['addr1'];
                 $_SESSION['phone1']=$_POST['op'];
                 $_SESSION['state1']=$_POST['st'];	
 				 $_SESSION['district1']=$_POST['cit'];
				 $_SESSION['pin1']=$_POST['tak'];
				   
	
				   $_SESSION['address2']=$_POST['addr2'];
				   $_SESSION['phone2']=$_POST['ops'];
				   $_SESSION['state2']=$_POST['stt'];
				   $_SESSION['district2']=$_POST['citz'];
				   $_SESSION['pin2']=$_POST['taki'];
				   
				
				 $_SESSION['current']=$_POST['ses'];
				 $_SESSION['dtype']=$_POST['deg1'];
				 $_SESSION['catteeg']=$_POST['dssd'];
				 $_SESSION['medium']=$_POST['oppk'];
				 $_SESSION['degre']=$_POST['qrt'];
				 $_SESSION['semes']=$_POST['raal'];
				 
				   
				
				   $_SESSION['registration']=$_POST['xamp'];
				   
				   $con=mysqli_connect("localhost","root","","examport");
				   
				   $uptodate=mysqli_query($con,"update examform set cname='$_POST[c1]',fname='$_POST[f1]',
				         mname='$_POST[m1]',minority='$_POST[pul]',category='$_POST[pulo]',gender='$_POST[rw]',
						 state='$_SESSION[mystate]',birth='$_POST[da]',nation='$_POST[n1]',mno='$_POST[p1]',religion='$_POST[pulos]',
						 enroll='$_POST[e1]',adhar='$_POST[a1]',add1='$_POST[addr1]',st1='$_POST[st]',pn1='$_POST[op]',
						 dis1='$_POST[cit]',pin1='$_POST[tak]',add2='$_POST[addr2]',st2='$_POST[stt]',pn2='$_POST[ops]',
						 dis2='$_POST[citz]',pin2='$_POST[taki]',sessions='$_POST[ses]',degrees='$_POST[deg1]',scategory='$_POST[dssd]',
						 medium='$_POST[oppk]',coursess='$_POST[qrt]',sems='$_POST[raal]' where lastsemroll='$semroll'");
				   if($uptodate)
				   {
				   
				  ?> 
				  <script type="text/javascript">
				       window.location ="Qualification2.php";
				  </script>
                  <?php
                   }
				   else
				   echo mysqli_error($con);
}

   ?>

                        
<br>
<br>
<table align='center' rules='none' width=1200 cellspacing=0 cellpadding=10 style='background-color:#ffffff; ' >

<div style='width:1200px; ;margin-left:80px'>
	  <br>
	   
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='personal2.php'><img src='userimages/my1.jpeg' height=50,width=50 style='border:3px solid black;border-radius:32px;box-shadow: 0px 0px 0px 5px #cf805f;';></a>
<img src='userimages/line2.png' height=50, style='width:150px';>
<img src='userimages/my12.jpeg' height=50,width=50 style='border:3px solid black;border-radius:32px';>
<img src='userimages/line2.png' height=50,width=50 style='width:150px';>
<img src='userimages/mii.jpg' height=50,width=50 style='border:3px solid black;border-radius:32px';>
<img src='userimages/line2.png' height=50,width=50 style='width:150px';>
<img src='userimages/my14.jpeg' height=50,width=50 style='border:3px solid black;border-radius:32px';>
<img src='userimages/line2.png' height=50,width=50 style='width:150px';>
<img src='userimages/my2.jpeg' height=50,width=50 style='border:3px solid black;border-radius:32px';>
<img src='userimages/line2.png' height=50,width=50 style='width:150px';>
<a href='javascript:box()'><img src='userimages/my8.png' height=50,width=50 style='';></a>

<br><br>
 &nbsp &nbsp &nbsp <a href='personal2.php' style='color:white !important;font-weight:bold'>Personal Details</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp <a href='' style='color:white !important;font-weight:bold'>Qualifications</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp <a href='' style='color:white !important;font-weight:bold'>Documents</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='' style='color:white !important;font-weight:bold'>Exam Form</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp  <a href='' style='color:white !important;font-weight:bold'>Fee Payment</a>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href='javascript:box()' style='color:white !important;font-weight:bold'>LOG OUT</a>
	  
	   </div>
	  
  	
<tr style='background-color:#ffbc3b'>

    <tr style='border-bottom:1px solid black'><td  colspan=8 style='font-size:15pt;font-weight:bold;color:#3575D3;font-family:arial;margin-left:50px';>Candidate's Personal Information</td></tr><br/>
	</td></tr>
    
	<tr><td colspan=6></td></tr> 
      <td align='left'  style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                                   Candidate's Name:</td>
      <td colspan=5><input readonly type='text' value='<?php echo $row[1];?>' name='c1' size=99 style='height:29px;' ></td>
    </tr>
	
    <tr>
    <td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Father's Name</td>
    <td colspan=2 ><input readonly type='text' name='f1' value='<?php echo $row[2];?>' size=25 style='height:29px;' ></td>
    
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Mother's Name</td>
    <td colspan=2 ><input readonly type='text' name='m1' value='<?php echo $row[3];?>' size=25 style='height:29px;'></td>
	</tr>
	<tr>
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Minority</td>
	<td colspan=2>
	
	<input readonly type='text' name='pul' value='<?php echo $row[4]; ?>' size=25 style='height:29px;'>
	
	</td>
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Student Category</td>
	<td colspan=2>
	<input readonly type='text' name='pulo' value='<?php echo $row[5]; ?>' size=25 style='height:29px;'>
	
	</td>
	</tr>
	
	
	
	<tr>
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Gender</td>
	<td colspan=2 style='color:black'><input type='radio' name='rw' <?php if($row[6]=="Male") echo "checked";?>  value='Male'>&nbsp Male
	  &nbsp &nbsp  <input type='radio' name='rw' <?php if($row[6]=="Female") echo "checked";?> value='Female'>&nbsp Female
		</td>
	
		
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Domicile State</td>
    <td colspan=2>
	
	<input readonly type='text' name='pulq' value='<?php echo $row[7]; ?>' size=25 style='height:29px;'>
	
	</td>
	</tr>
	<tr>
	    <td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Date Of Birth</td>
	     <td colspan=2>
		 
		 <input readonly type='text' name='da' value='<?php echo $row[8]; ?> 'size=25 style='height:29px;'>
		
		 </td>
		 <td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Nationality</td>
	<td colspan=2 style='color:black'><input type='radio' name='n1' <?php if($row[9]=="Indian") echo "checked";?> value='Indian'>&nbsp Indian
	  &nbsp &nbsp &nbsp  <input type='radio' name='n1' <?php if($row[9]=="Others") echo "checked";?>  value='Other' >&nbsp Other
		</td>
		</tr>
		
		<tr>
		<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Mobile No.</td>
		<td colspan=2 align='left' style='color:red';><input readonly type='text' required size=25 style='height:29px;' value='<?php echo $row[10];?>' name='p1' value='' size=25 maxlength=10></td>
		
		<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Religion</td>
		<td colspan=2 align='left' style='color:red';>
		
		<input readonly required type='text' name='pulos' value='<?php echo $row[11]; ?>' size=25 style='height:29px;'>
		
	    </td>
		</tr>
		<tr>
		<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Enrollment No.</td>
		<td colspan=2><input readonly type= 'text' name='e1' value='<?php echo $row[12]; ?>' size=25 style='height:29px;' style='height:27px;border-color:white' size=40></td>
		<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Aadhar No.</td>
		<td colspan=2><input readonly type= 'text' name='a1' value='<?php echo $row[13]; ?>' size=25 style='height:29px;' size=40></td>
		</tr>
		<tr><td></td></tr>
		

	<tr><td></td></tr>
	
	<tr style='background-color:#ffbc3b'>
     <tr style='border-bottom:1px solid black'><td  colspan=8 style='font-size:15pt;font-weight:bold;color:#3575D3;font-family:arial;margin-left:50px';>Present Address</td></tr><br/>
	
	  <tr><td></td></tr>
	  <tr><td style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Address:</td>
	      <td colspan=2 align='left' style='color:red';><textarea cols=28 rows=2 name='addr1'  
		  value='' required style=''><?php echo $row["add1"];?></textarea>*</td>
	       <td style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Phone No.</td>
		  <td colspan=2 align='left' style='color:red';><input type='text' value='<?php echo $row["pn1"];?>' name='op' required size=25 style='height:29px;' maxlength=10>*</td>
	  </tr>
	  
	  <td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  State: </td>
    <td colspan=2 align='left' style='color:red';><select name= 'st' style='width:245px;height:29px;' required>
    <option value='<?php echo $row["st1"];?>'><?php echo $row["st1"];?></option>
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
	</select>*
	</td>
	
	<td style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp District:</td>
		<td colspan=2 align='left' align='left' style='color:red'; ><input type='text' name= 'cit' value='<?php echo $row["dis1"];?>'  required style="height:29px;" size=25>*
		
		</td>
		</tr>
	</tr>
	
	<tr>
	<td colspan=3></td>
	<td style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Pincode: </td>
	    <td colspan=2 align='left' style='color:red';><input type='text' value='<?php echo $row["pin1"];?>' name='tak' maxlength=6 required style="height:29px;" size=25>*</td>
	</tr>
	 <tr><td></td></tr><tr><td></td></tr> 
  <tr style='background-color:#ffbc3b'>
    <tr style='border-bottom:1px solid black'><td  colspan=4 style='font-size:15pt;font-weight:bold;color:#3575D3;font-family:arial;margin-left:50px';>Permanent Address</td>
	<td colspan=4><input type="checkbox" onclick="Copyaddress(this.form)">&nbsp Same as present address?</td></tr><br/>
	
	  <tr><td></td></tr>
	  <tr><td style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Address:</td>
	      <td colspan=2 align='left' style='color:red';><textarea cols=28 rows=2 value='' name='addr2' required style=''><?php echo $row["add2"];?></textarea>*</td>
	       <td style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Phone No.</td>
		  <td colspan=2 align='left' style='color:red';><input type='text' maxlength=10 value='<?php echo $row["pn2"];?>' name='ops' required style="height:29px;" size=25>*</td>
	  </tr>
	  
	  <td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  State: </td>
    <td colspan=2 align='left' style='color:red';><select name= 'stt'  style='width:248px;height:29px;' required>*
    <option value='<?php echo $row["st2"];?>'><?php echo $row["st2"];?></option>
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
	</select>*
	</td>
	
	<td style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp District:</td>
		<td colspan=2 align='left' align='left' style='color:red';><input type='text' value='<?php echo $row["dis2"];?>' name= 'citz' style="height:29px;" size=25 required>*
		
		</td>
		</tr>
	</tr>
	
	<tr>
	<td colspan=3></td>
	<td style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Pincode: </td>
	    <td colspan=2 align='left' style='color:red';><input type='text' value='<?php echo $row["pin2"];?>' name='taki' style="height:29px;" maxlength=6 size=25 required>*</td>
	</tr>  	  
	<tr><td></td></tr><tr><td></td></tr>
     <tr style='border-bottom:1px solid black'><td  colspan=8 style='font-size:15pt;font-weight:bold;color:#3575D3;font-family:arial;margin-left:50px';>Candidate's Exam Details</td></tr><br/>	
	<tr><td></td></tr>
	<tr>
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Current Session</td>
	<td colspan=2 align='left' style='color:red';>
	<select name= 'ses' style='width:227px;height:29px;' required>
    <option value='<?php echo $row["sessions"];?>'  ><?php echo $row["sessions"];?></option>
	<option value= '2016-2017'>2016-2017</option>
	<option value= '2017-2018'>2017-2018</option>
	<option value= '2018-2019'>2018-2019</option>
	<option value= '2019-2020'>2019-2020</option>
    <option value= '2020-2021'>2020-2021</option>
	<option value= '2021-2022'>2021-2022</option>
	
	</select>*
		</td>
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Degree Type</td>
	<td colspan=2 align='left' style='color:red';><input readonly type='text' name='deg1' value='<?php echo $row[25]; ?>' style="height:29px;" size=25>
	</td>
	</tr>
	<tr>
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Category</td>
	<td colspan=2 align='left' style='color:red';><input readonly type='text' name='dssd' value='Regular' style="height:29px;" size=25>
	</td>
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Medium</td>
	<td colspan=2 align='left' style='color:red';><input readonly type='text' name='oppk' value='English' style="height:29px;" size=25>
	</td>
	</tr>
	<tr>
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  Degree</td>
	<td colspan=2 align='left' style='color:red';><input readonly type='text' name='qrt' value='<?php echo $row[28]; ?>' style="height:29px;" size=25>
	
	</td>
	<td align='left' style='color:black;font-weight:bold'>&nbsp &nbsp &nbsp Semester</td>
	<td colspan=2 align='left' style='color:red';><input readonly type='text' name='raal' value='<?php echo $_SESSION["mesem"]; ?>' style="height:29px;" size=25 >
	</td>
	</tr>
	<tr>
	   <td><input type="hidden" name='xamp' value='<?php echo $row[31]; ?>' ></td>
	</tr>
<tr><td></td></tr><tr><td></td></tr>
   <tr>
       <td colspan=6 align='center'>
                    
                   <input type='submit' value='SAVE & NEXT' name='next' style='background-color:#3575D3; width:180px;
	   height:45px;font-weight:bold;border:none;color:white'></td>
       
  </tr>
  <tr>
    <td colspan=6></td>
  </tr>

</table>
</form>

         </div>
	  
      </div>
	 
	
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer style='margin-top:-30px' id="footer">

   

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span >BMS University</span></strong>. All Rights Reserved
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

  <script>
  
     function Copyaddress(form)
	 {
	     form.addr2.value=form.addr1.value;
		 form.ops.value=form.op.value;
		 form.stt.value=form.st.value;
		 form.citz.value=form.cit.value;
		 form.taki.value=form.tak.value;
	 
      }
  </script>
  
  
  
</body>

</html>
