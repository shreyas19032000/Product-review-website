<?php
if($_POST)
{
	include 'dbconnect1.php';
	$email_id=$_POST['email_id'];
	$pwd=$_POST['pwd'];
	$check_user="SELECT * FROM user_info WHERE email_id='$email_id' and password='$pwd'";
	$result=mysqli_query($conn,$check_user);
	$row = mysqli_fetch_array($result);
	If($result)
	{
		session_start();
		$_SESSION['uname'] = $row['name'];
		$_SESSION['uid'] = $row['uid'];
		echo "Logged In";
		header("location: home.php");
	}
	else
	{
		echo "Error".mysqli_error($conn);
	}
}
?>