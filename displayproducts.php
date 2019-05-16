<?php
	include('dbconnect1.php');

        $sql = "SELECT * FROM product_info";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data))
        {
            echo "<img src=".$row['image']." alt=".$row['image'].">"."<br>";
            echo $row['name'].'<br>';
            echo "Cost :".' '.$row['cost'].'<br>';
            echo "<a href=description.php?id=".$row['pid'].">"."See More"."</a>"."<br>";

     
        }
        mysqli_close($conn);
?>
