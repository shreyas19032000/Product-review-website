<?php
session_start();
if($_POST['review'] != null)
{
	include('dbconnect1.php');
	$pid = $_POST['pid'];
	$uid = $_POST['uid'];
	$uname = $_POST['uname'];
	$ret=$_POST['review'];

	$curtime = date("d-M-Y H:m:s");
	$sql= "INSERT into review (pid,uid,uname,review,authorize,add_time) VALUES ('$pid','$uid','$uname','$ret',0,'$curtime')";
	$res_data = mysqli_query($conn,$sql);
	if($res_data)
	{
		
		header("location:home.php");
	}
	else
	{
		echo "error".mysqli_error($conn);
	}
}
else
{
	echo "Please Add Review";
}