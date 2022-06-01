
<?php
SESSION_START();

$name=$_REQUEST["a"];
$degree=$_SESSION["degreeteach"];
$sem=$_SESSION["courseteach"];
$DOB=$_REQUEST["b"];
$subname=$_SESSION["subteach"];
$code=$_SESSION["subcode"];
$roll=$_REQUEST["c"];

$ex=$_POST["ex"];
if($ex>=71 && $ex<80)
$exg="A1";
elseif($ex>=61 && $ex<71)
$exg="A2";
elseif($ex>=51 && $ex<61)
$exg="B1";
elseif($ex>=41 && $ex<51)
$exg="B2";
elseif($ex>=31 && $ex<41)
$exg="C1";
elseif($ex>=28 && $ex<31)
$exg="C2";
elseif($ex>=20 && $ex<28)
$exg="D";
else
$exg="E";

$in=$_POST["in"];

if($in>=18 && $in<20)
$ing="A1";
elseif($in>=15 && $in<18)
$ing="A2";
elseif($in>=12 && $in<15)
$ing="B1";
elseif($in>=10 && $in<12)
$ing="B2";
elseif($in>=9 && $in<10)
$ing="C1";
elseif($in>=7 && $in<9)
$ing="C2";
else
$ing="D";

$total=$ex+$in;
if($total>32)
$remark="P";
else
$remark="F";



$con=mysqli_connect("localhost","root","","examport");
$r=mysqli_query($con,"update result SET Rollno='$roll',category='Regular' where name='$name' and DOB='$DOB' and
                        course='$degree' and semester='$sem'");

$sele=mysqli_query($con,"select * from result where name='$name' and DOB='$DOB' and
                        course='$degree' and semester='$sem'");
if($row=mysqli_fetch_array($sele))
{
    if($row["pcode1"]==$code)
	{
	    $querun=mysqli_query($con,"update result SET sub1='$subname',ex1='$ex',exg1='$exg',in1='$in',ing1='$ing',remark1='$remark'
		where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
		if($querun)
		{
		  $_SESSION["sub"]==$subname;
		  header("location:teacherupload.php");
		}
		
	}
	
	if($row["pcode2"]==$code)
	{
	    $querun=mysqli_query($con,"update result SET sub2='$subname',ex2='$ex',exg2='$exg',in2='$in',ing2='$ing',remark2='$remark'
		where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
		if($querun)
		{
		  $_SESSION["sub"]==$subname;
		  header("location:teacherupload.php");
		}
	}
	
	if($row["pcode3"]==$code)
	{
	    $querun=mysqli_query($con,"update result SET sub3='$subname',ex3='$ex',exg3='$exg',in3='$in',ing3='$ing',remark3='$remark'
		where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
		if($querun)
		{
		  $_SESSION["sub"]==$subname;
		  header("location:teacherupload.php");
		}
	}
	
	if($row["pcode4"]==$code)
	{
	    $querun=mysqli_query($con,"update result SET sub4='$subname',ex4='$ex',exg4='$exg',in4='$in',ing4='$ing',remark4='$remark'
		where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
		if($querun)
		{
		  $_SESSION["sub"]==$subname;
		  header("location:teacherupload.php");
		}
	}
	
	if($row["pcode5"]==$code)
	{
	    $querun=mysqli_query($con,"update result SET sub5='$subname',ex5='$ex',exg5='$exg',in5='$in',ing5='$ing',remark5='$remark'
		where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
		if($querun)
		{
		  $_SESSION["sub"]==$subname;
		  header("location:teacherupload.php");
		}
	}
	
	if($row["pcode6"]==$code)
	{
	    $querun=mysqli_query($con,"update result SET sub6='$subname',ex6='$ex',exg6='$exg',in6='$in',ing6='$ing',remark6='$remark'
		where name='$name' and DOB='$DOB' and course='$degree' and semester='$sem'");
		if($querun)
		{
		  $_SESSION["sub"]==$subname;
		  header("location:teacherupload.php");
		}
	}
	
}

?>