<?php
if($_POST)
{
	if (session_status()!=PHP_SESSION_ACTIVE) {
		include 'userlogin.php';
	}
	else
	{
		echo "review added";
	}
}
?>