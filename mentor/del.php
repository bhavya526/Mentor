<?php
   
    $id=$_REQUEST["a"];
	$con=mysqli_connect("localhost","root","","examport");
	
	$r=mysqli_query($con,"delete from registration where id='$id'");
	if($r)
	  header("location:regdetails.php");
?>