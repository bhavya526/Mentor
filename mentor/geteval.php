<?php 
		    
			     $select1=$_POST["course"];
				 $select2=$_POST["degree"];
				 $select3=$_POST["session"];
				 $statement2="Re-eval forms are out!!";
		         $atlast=$select3."  ".$select1."  ".$select2."  ".$statement2;
				 
				 $con=mysqli_connect("localhost","root","","examport");
				 $s=mysqli_query($con,"select * from evaluation where Note='$atlast'");    
				 $row=mysqli_fetch_array($s);
				 $check=$row[1];
				  
				  if(strcmp($check,$atlast)!==0)
				  {
				      $r=mysqli_query($con,"insert into evaluation (Note,Sem,course,session) value ('$atlast','$select2','$select1','$select3')");
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