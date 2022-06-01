<?php
                    $nam1=$_POST["name"];
					$mailp=$_POST["mail"];
					$msg11=$_POST["message"];
			   
			         $con=mysqli_connect("localhost","root","","examport");
					 $r=mysqli_query($con,"insert into contact(Name,Email,Message) values('$nam1','$mailp','$msg11')");
					 if($r)
					 {
						header("location:contact.php");
					 }
					 else
					 echo mysqli_error($con);

?>