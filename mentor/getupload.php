<?php 
		    
			     $select1=$_POST["course"];
				 $select2=$_POST["degree"];
				 $year=$_POST["year"];
				 $statement2="Admit cards are out!!";
		         $atlast=$select1."  ".$select2."  ".$statement2;
				 
				 $con=mysqli_connect("localhost","root","","examport");
				 $s=mysqli_query($con,"select * from admitcards where Note='$atlast' and year='$year'");    
				 $row=mysqli_fetch_array($s);
				 $check=$row[1];
				  
				  if(strcmp($check,$atlast)!==0)
				  {
				      $r=mysqli_query($con,"insert into admitcards (Note,course,sem,year) value ('$atlast','$select1','$select2','$year')");
				      if($r)
				      {
					      $year1=intval($year)+1;
						  $year2=$year."-".$year1;
						  $yearfinal=strval($year2);
						  echo $select1;
						  
						  $q=mysqli_query($con,"select * from examform where coursess='$select1' and sems='$select2' and sessions='$yearfinal' ORDER by cname");
						  if($q)
						  {
						     $num=1;
						    while($rew=mysqli_fetch_array($q))
                            {
							  $name=$rew[1];
							  $birth=$rew[8];
							  $app=$rew[52];
							   if($select1=='BCA' && $select2=='I SEM')
							   {
							     $no=1;
								}
								if($select1=='BCA' && $select2=='II SEM')
							   {
							     $no=2;
								}
								if($select1=='BCA' && $select2=='III SEM')
							   {
							     $no=3;
								}
								if($select1=='BCA' && $select2=='IV SEM')
							   {
							     $no=4;
								}
								if($select1=='BCA' && $select2=='V SEM')
							   {
							     $no=5;
								}
								if($select1=='BCA' && $select2=='VI SEM')
							   {
							     $no=6;
								}
								if($select1=='MCA' && $select2=='I SEM')
							   {
							     $no=11;
								}
								if($select1=='MCA' && $select2=='II SEM')
							   {
							     $no=12;
								}
								if($select1=='MCA' && $select2=='III SEM')
							   {
							     $no=13;
								}
								if($select1=='MCA' && $select2=='IV SEM')
							   {
							     $no=14;
								}
								if($select1=='MCA' && $select2=='V SEM')
							   {
							     $no=15;
								}
								if($select1=='MCA' && $select2=='VI SEM')
							   {
							     $no=16;
								}
								if($select1=='MSc IT' && $select2=='I SEM')
							   {
							     $no=21;
								}
								if($select1=='MSc IT' && $select2=='II SEM')
							   {
							     $no=22;
								}
								if($select1=='MSc IT' && $select2=='III SEM')
							   {
							     $no=23;
								}
								if($select1=='MSc IT' && $select2=='IV SEM')
							   {
							     $no=24;
								}
								
								
								$roll=$no.$year.$num;
								
                                 
								 
								 
							 $insert = mysqli_query($con,"INSERT INTO admitroll(name,Roll,DOB,course,sem,session,application)VALUES ('".$name."','".$roll."','".$birth."','".$select1."','".$select2."','".$yearfinal."','".$app."')");
							 
							 
							 
							 
							 
							  $no++;
							  $num++;

                             }
                          }							 
					  
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