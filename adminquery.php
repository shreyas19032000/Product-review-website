<?php

if($_POST)
{
	include 'dbconnect1.php';
	$username=$_POST['username'];
	$pwd=$_POST['pwd'];
	$check_admin="SELECT name,password FROM admin_info WHERE name='$username' and password='$pwd'";
	$result=mysqli_query($conn,$check_admin);
	If($result)
	{
		include 'adminpage.php';
		

	}
	else
	{
		echo "Error".mysqli_error($conn);
	}
}
?>