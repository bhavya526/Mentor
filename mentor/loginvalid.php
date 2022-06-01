<form action='personal.php' method='POST'>
 
 <?php
session_start();
            //session_start();
            $con=mysqli_connect("localhost","root","","examport");

			
			
            //$regis=$_POST["reg"];
            $date=$_POST["pa"];
			//$regi=$_POST["regi"];
			 
			//$_SESSION['displayregID']=$_POST['reg'];
			
			$sid=$_SESSION["mesem"];
			$cap=$_POST["ca"];
			

			if($cap!=$_SESSION['CODE'])
			{
			  $_SESSION["err"]="&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Invalid  Captcha";
              header("location:login.php?id=$sid");
			
			}
			
			
			elseif($sid=="I SEM")
			{
			   $regis=$_POST["reg"];
			   $_SESSION['displayregID']=$_POST['reg'];
			
                $r=mysqli_query($con,"select * from registration where RegistrationID='$regis' and DOB='$date'");

                   if($row=mysqli_fetch_array($r))
                {
			        if($row[24]=='Paid')
			        {
			           header("location:successfull.php");
			         }
			         else
			         {
			           if($row[25]=='Saved')
				       {
				          header("location:examform.php");
			            }
				        else
				        {
                          $_SESSION["idd"]=$row[0];
                          header("location:personal.php");
				         }
                      }
                 }
			
                        else
			            {
			
			              $_SESSION["err"]="&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Invalid Registration Id OR Password";
                          header("location:login.php");
			  
			             }
			}
			
			elseif($sid=="II SEM" || $sid=="III SEM" || $sid=="IV SEM" || $sid=="V SEM" || $sid=="VI SEM")
			{
			    $regi=$_POST["regi"];
				 $_SESSION['lastroll']=$_POST["regi"];
                $r=mysqli_query($con,"select * from examform where lastsemroll='$regi' and birth='$date'");

                   if($row=mysqli_fetch_array($r))
                  {
			        if($row[50]=='Paid')
			        {
			           header("location:successfull3.php");
			         }
			         else
			         {
			           if($row[51]=='Saved')
				       {
				          header("location:examforum.php");
			            }
				        else
				        {
                          $_SESSION["idd"]=$row[0];
                          header("location:personal2.php");
				         }
                      }
                    }
			
                        else
			            {
			
			              $_SESSION["err"]="&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Invalid ";
                          header("location:login.php");
			  
			             }
			}
			
			
?>