<?php
include 'dbconnect1.php';
$rid=$_GET['id'];
$sql = "DELETE from review  where rid='$rid'";
$res_data = mysqli_query($conn,$sql);
 
        mysqli_close($conn);

header("location: reviewvalidate.php");
?>