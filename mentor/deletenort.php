<?php
   
    $id=$_REQUEST["a"];
	$con=mysqli_connect("localhost","root","","examport");
	
	$r=mysqli_query($con,"delete from norifications where Id='$id'");
	if($r)
	  header("location:delnortify.php");
?>