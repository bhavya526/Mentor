<?php 
		    
			     $select1=$_POST["course"];
				 $select2=$_POST["degree"];
				 $date=$_POST["date"];
				 $statement2="Results are out!!";
		         $atlast=$select1."  ".$select2."  ".$statement2;
				 
				 $con=mysqli_connect("localhost","root","","examport");
				 $s=mysqli_query($con,"select * from resultupload where Note='$atlast'");    
				 $row=mysqli_fetch_array($s);
				 $check=$row[1];
				  
				  if(strcmp($check,$atlast)!==0)
				  {
				      $r=mysqli_query($con,"insert into resultupload (Note,course,sem,declared) value ('$atlast','$select1','$select2','$date')");
				      if($r)
				      {
				         echo " Uploaded Successfully";
					  
				       }
				       else
				       echo mysqli_error($con);
				  }
				  
				  else
				  {
				     echo "Already Uploaded";
				   }
				  
		  ?>