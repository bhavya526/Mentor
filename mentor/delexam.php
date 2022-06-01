<?php
   
    $id=$_REQUEST["a"];
	$con=mysqli_connect("localhost","root","","examport");
	
	$r=mysqli_query($con,"delete from examform where id='$id'");
	if($r)
	  header("location:examformdetails.php");
?>