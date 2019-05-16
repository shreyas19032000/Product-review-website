<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="home.css">
</head>
<body>
	<?php
	include 'header.php';
	?>
	<?php
include 'dbconnect1.php';
$sql = "SELECT * FROM review Where authorize=0";
$res_data = mysqli_query($conn,$sql);
while($row = mysqli_fetch_array($res_data))
        {
            
            echo $row['review'].'<br>';
            echo "".$row['uname']."     ".$row['add_time']."<br>";


            echo "<a href=accept.php?id=".$row['rid'].">"."Accept"."</a>"." ";
            echo "<a href=reject.php?id=".$row['rid'].">"."Reject"."</a>"."<br>";
            echo ""."<hr>";
     
        }
?>
<div class="footer">
  <h2>
    <?php
      include 'footer.php';
    ?>

  </h2>
</div>
</body>
</html>


