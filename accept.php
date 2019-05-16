
<?php
include 'dbconnect1.php';
$rid=$_GET['id'];
$sql = "UPDATE review set  authorize=1 where rid='$rid'";
$res_data = mysqli_query($conn,$sql);
 
        mysqli_close($conn);

header("location: reviewvalidate.php");
?>