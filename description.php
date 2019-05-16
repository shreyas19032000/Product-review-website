
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php
        include 'home.css';
    ?>
<style type="text/css">
    .boxed {
  border: 1px solid green ;
}
</style>
    

</head>
<body>
    <?php
include 'header.php';
    ?>
    <div>
    <?php
    session_start();
    include('dbconnect1.php');
    @$uid = $_SESSION['uid'];
    @$uname = $_SESSION['uname'];
    $pid;
    if (isset($_GET['id'])) {
            $pid = $_GET['id'];
        } else {
            $pid = 1;
        }

        $sql = "SELECT * FROM product_info Where pid='$pid'";
        $res_data = mysqli_query($conn,$sql);
        while($row = mysqli_fetch_array($res_data))
        {
            echo "<img src=".$row['image']." alt=".$row['image'].">"."<br>";
            echo $row['description'].'<br>';
            echo $row['name'].'<br>';
            echo "Brand :".' '.$row['brand'].'<br>';
            echo "Cost :".' '.$row['cost'].'<br>';
            echo "";
     
        }


        
        mysqli_close($conn);
?> 
    </div>
    <div class="boxed">
        <?php
        include 'dbconnect1.php';
        $review="SELECT * FROM review Where pid='$pid' and authorize='1'";
        $res_data = mysqli_query($conn,$review);
        while($row = mysqli_fetch_array($res_data))
        {
            echo "".$row['review']."<br>";
            echo "".$row['uname']."     ".$row['add_time']."<br>";
            echo ""."<hr>";
        }
        mysqli_close($conn);   
        ?>

     
    </div>

    <div>
    <?php
    if($_SESSION['uid'] != null)
    {
        echo '  <form action="addreview.php" method="post">
                <input type="hidden" name="pid" value="'.$pid.'">
                <input type="hidden" name="uid" value="'.$uid.'">
                <input type="hidden" name="uname" value="'.$uname.'">
                <textarea name="review"></textarea>
                <input type="submit" name="submit" value="Add Review">
                </div>
                </form>
                ';
    }else{
        echo '<textarea name="review"></textarea>
              <a type="button" href="userlogin.php">Add Review</a>';    
    }    
    ?>
    </div>
    <div class="footer">
  <h2>
    <?php
      include 'footer.php';
    ?>

  </h2>
</div>

</body>
</html>
