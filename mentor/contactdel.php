<?php
   
    $id=$_REQUEST["a"];
	$con=mysqli_connect("localhost","root","","examport");
	
	$r=mysqli_query($con,"delete from contact where Sno='$id'");
	if($r)
	  header("location:message.php");
?>