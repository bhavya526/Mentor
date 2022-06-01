<html>
     <?php
   $id=$_REQUEST["a"];
   $con=mysqli_connect("localhost","root","","examport");
   $r=mysqli_query($con,"select * from examform where id='$id'");
   if($row=mysqli_fetch_array($r))
   {
 ?>


<div>


   <table width='715px' border=2  rules='none' align='center' cellspacing=1 cellpadding=10>
     <tr>
         <td colspan=5 align='center' style='font-size:35px;font-weight:bold;color:black'>BMS University</td>
     </tr>
     <tr  style='line-height:1px'>
         <td colspan=5 align='center' style='font-size:22px;font-weight:bold;color:black'>Department of Computer Science</td>
     </tr>
     <tr>
         <td colspan=5 align='center' style='font-size:22px;font-weight:bold;color:black'>Student's Details</td>
     </tr>
	 
	 <td  style='padding-left:20px;color:black'>App. No: <?php echo $row[52]; ?></td>
     <td></td>
	<td rowspan=4 colspan=3 align='center' style='width:50;height:50;margin:auto'><img src="imagesregistered/<?php echo $row[43]; ?>"  width=160 height=160></td>
 

 <tr>
    
	 <tr><td colspan=5></td></tr>
 </tr>
 
 <tr style='height:10px'>
     <td style='font-weight:bold ;padding-left:20px;color:black;'>Student Name: </td>
	 <td colspan=4 style='color:black'><?php echo $row[1]; ?></td>
	 
  </tr>
  <tr >
     <td style='height:10px;font-weight:bold ;padding-left:20px;color:black'>Father Name: </td>
	 <td colspan= 4 style='color:black'><?php echo $row[2]; ?></td>
   </tr>
  <tr>
     <td style='font-weight:bold ;padding-left:20px;color:black'>Mother Name: </td>
	 <td colspan=4 style='color:black'><?php echo $row[3]; ?></td>
   </tr>
   
   </table>
   <?php
   }
   ?>
</div>
</html>