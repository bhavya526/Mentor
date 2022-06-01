<?php
   
	$id=$_REQUEST["ids"];
	$con=mysqli_connect("localhost","root","","examport");
	
	$r=mysqli_query($con,"delete from examformupload where SNo='$id'");

		     
			   $r=mysqli_query($con,"select * from examformupload");
			   $Sno=1;
               
	       echo "<table align='center'  width=700px cellspacing=0 cellpadding=10> ";
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