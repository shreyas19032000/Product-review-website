<?php
if($_POST)
{
	include 'dbconnect1.php';
	$name=$_POST['name'];
	$email_id=$_POST['email_id'];
	$pwd=$_POST['pwd'];
	$sql="INSERT INTO user_info (name,email_id,password) VALUES ('$name','$email_id','$pwd')";
	$result=mysqli_query($conn,$sql );
	If($result)
	{ 
		include 'userlogin.php';
		

	}
	else
	{
		echo "Error".mysqli_error($conn);
	}
}
?>