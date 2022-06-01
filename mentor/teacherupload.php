<?php
session_start();


$degree=$_SESSION["degreeteach"];
$sem=$_SESSION["courseteach"];

$subname=$_SESSION["subteach"];
$code=$_SESSION["subcode"];


?>


<!DOCTYPE html>
<html lang="en">

<head>
      <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.print.min.js"></script>
<script>
   $(document).ready(function() {
    $('#example').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
			
			
        ]
    } );
} )
</script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

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
                <div style='width:125%;color:white;font-weight:bold;font-size:20px;height:60px;background-color:#3575D3;margin-top:-4px'>
            <br><div style='margin-left:15px;margin-top:-15px'><img src='admin images/logoclg.png' style='width:60px;height:40px;margin-top:-5px'/>BMS UNIVERSITY<B><span id='ct' ></span></b></div>
	    </div>

      
      
            <div style='width:125%;;height:40px;background-color:#f5f5f5;margin-top:-4px'>
          <a href='teacherhome.php'><input type='button' value='Home' style='margin-top:6px;background-color:#f5f5f5;margin-left:10px;border:none;focus:none;outline:none' ></a>
		  <a href='teacherupload.php'><input type='button' value='Upload Marks' style=';background-color:#f5f5f5;margin-top:6px;margin-left:10px;border:none;focus:none;outline:none' ></a>
		  <a href='teacherupload.php'><input type='button' value='Update' style=';background-color:#f5f5f5;margin-top:6px;margin-left:10px;border:none;focus:none;outline:none'  ></a>
	    </div>
	   <?php
	          
			   
			   
			   if($degree=='BCA' && $sem=='I SEM' )
			   {
			      $serial=101;
				}
				
				if($degree=='BCA' && $sem=='II SEM' )
			   {
			      $serial=201;
				}
				
				if($degree=='BCA' && $sem=='III SEM' )
			   {
			      $serial=301;
				}
				
				if($degree=='BCA' && $sem=='IV SEM' )
			   {
			      $serial=401;
				}
				
				if($degree=='BCA' && $sem=='V SEM' )
			   {
			      $serial=501;
				}
				
				if($degree=='BCA' && $sem=='VI SEM' )
			   {
			      $serial=601;
				}
				
				if($degree=='MCA' && $sem=='I SEM' )
			   {
			      $serial=1001;
				}
				
				if($degree=='MCA' && $sem=='II SEM' )
			   {
			      $serial=1101;
				}
				
				if($degree=='MCA' && $sem=='III SEM' )
			   {
			      $serial=1201;
				}
				
				if($degree=='MCA' && $sem=='IV SEM' )
			   {
			      $serial=1301;
				}
				
				if($degree=='MCA' && $sem=='V SEM' )
			   {
			      $serial=1401;
				}
				
				if($degree=='MCA' && $sem=='VI SEM' )
			   {
			      $serial=1501;
				}
			   
	   ?>
	      <input type='text' value='<?php echo $_SESSION['degreeteach'] ?>' size= 6 name='deg' style='margin-left:44%;border:none;font-weight:bold;focus:none;;outline:none;color:blue'>
		  <input type='text' value='<?php echo $_SESSION['courseteach'] ?>' size= 6  name='sem' style='border:none;focus:none;outline:none;font-weight:bold;color:blue'><br>
	  
	  <input type='text'  value='<?php echo $_SESSION['subteach']?>' size=50  name='sem' style='text-align:center;margin-left:31%;border:none;;focus:none;outline:none;font-weight:bold;color:blue'><br>
	  <input type='text' value='<?php echo $_SESSION['subcode']?>' size=200  name='semcode' style='margin-left:45%;border:none;focus:none;outline:none;font-weight:bold;color:blue'>
	  <br><br>         
    <?php
	     $con=mysqli_connect("localhost","root","","examport");
	      $s=mysqli_query($con,"select * from subject where course='$degree' and Sem='$sem'");
	        $rew=mysqli_fetch_array($s);
	          
	      echo "<table id='example' class='display' style='' >
    <thead>
	    
        <tr>
		    
            <th>Roll No</th>
            <th>Name</th>
			<th></th>
			<th>&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp External Marks<br>&nbsp &nbsp 
			&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
(80)</th>
		
        </tr>
    </thead><tbody>";
	
	   
	    
		    $r=mysqli_query($con,"select * from examform  where coursess='$degree' and sems='$sem' order by cname");
	        
	    while($row=mysqli_fetch_array($r))
       {
	       $countv=1;
		   
		       for($i=0;$i<$countv;$i++)
			   {
                echo "
               <tr><form action='' method='POST'>
			       
                   <td><input type='text' style='height:23px;border:none'  value='$serial' name='yx[]'></td>
                   <td>$row[1]</td>
				   <td></td>
				   <td><input type='text' style='height:23px;border-type:dotted;border-bottom:1px solid black'  id='value1' size=70 name='ex[]'></td>
			        
				   </tr>";
				   
				   }
				 $countv++; 
				  $serial++;	          
					
		 
	}
	echo "<tr><td colspan=10 align='center'><input type='submit' onclick value='Upload' name='submit'  style=';font-size:15px'></td></tr></form>";
	
	if(isset($_POST["submit"]))
	{
	   $i=0;
	              $countv=1;
	   $r=mysqli_query($con,"select * from examform  where coursess='$degree' and sems='$sem' order by cname");
	     while($row=mysqli_fetch_array($r))
       {
	        $name=$row[1];
						 $DOB=$row[8];
	              
		          if($i<$countv)
				  {
				     
				    echo $_POST["ex"]["$i"];
					
					$ex= $_POST["ex"]["$i"];
					$serial= $_POST["yx"]["$i"];
					
					 if($ex>=71 && $ex<80)
                     $exg="A1";
                     elseif($ex>=61 && $ex<71)
                     $exg="A2";
                     elseif($ex>=51 && $ex<61)
                     $exg="B1";
                     elseif($ex>=41 && $ex<51)
                     $exg="B2";
                     elseif($ex>=31 && $ex<41)
                     $exg="C1";
                     elseif($ex>=28 && $ex<31)
                     $exg="C2";
                     elseif($ex>=20 && $ex<28)
                     $exg="D";
                     else
                     $exg="E";
					
					
                     $sele=mysqli_query($con,"select * from result where name='$name' and DOB='$DOB' and
                        course='$degree' and semester='$sem'");
                     if($rew=mysqli_fetch_array($sele))
                     {
					     
                        if($rew["pcode1"]==$code)
	                    {
	                        $querun=mysqli_query($con,"update result SET Rollno='$serial',category='Regular',sub1='$subname',ex1='$ex',exg1='$exg'
		                    where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
							
				         }
						 if($rew["pcode2"]==$code)
	                     {
	                     $querun=mysqli_query($con,"update result SET Rollno='$serial',category='Regular',sub2='$subname',ex2='$ex',exg2='$exg'
		                  where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
						 }
						 if($rew["pcode3"]==$code)
	                     {
	                     $querun=mysqli_query($con,"update result SET Rollno='$serial',category='Regular',sub3='$subname',ex3='$ex',exg3='$exg'
		                  where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
						 }
						 if($rew["pcode4"]==$code)
	                     {
	                     $querun=mysqli_query($con,"update result SET Rollno='$serial',category='Regular',sub4='$subname',ex4='$ex',exg4='$exg'
		                  where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
						 }
						  if($rew["pcode5"]==$code)
	                     {
	                     $querun=mysqli_query($con,"update result SET Rollno='$serial',category='Regular',sub5='$subname',ex5='$ex',exg5='$exg'
		                  where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
						 }
						  if($rew["pcode6"]==$code)
	                     {
	                     $querun=mysqli_query($con,"update result SET Rollno='$serial',category='Regular',sub6='$subname',ex6='$ex',exg6='$exg'
		                  where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
						 }
					  }
					}
				    $i++;
				   
				   $countv++;
				   
	    }
	}
	?>
	
	</tbody>
</table>
	  
	 
	

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<script>
  var today = new Date();
  var date = today.getDate()+'-'+(today.getMonth()+1)+'-'+today.getFullYear();
  document.getElementById("currentDate").value = date;
</script>

<script>
var today = new Date();
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
  document.getElementById("currentTime").value = time;
</script>


		  