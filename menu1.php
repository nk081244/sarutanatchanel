<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>chanel</title>
    <link rel="stylesheet" href="index.css">
    

</head>
<body>
    <nav>
    <div class="nav-container">
    <a href="index.css">
        <img srt="chanel.png" class="logonav">
      </a>
     
      <div class="nav-profile">
        <div class="nav-profile-cart">
          <i class="fas fa-cart-shopping"></i>
        </div>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="sidebar">
      <a href="index.html" class="sidebar-items">
        หน้าแรก
      </a>
      <a href="menu1.php" class="sidebar-items">
        สินค้า
      </a>
      <a href="menu2.php" class="sidebar-items">
        เพิ่มสินค้า
      </a>
    </div>
    <?php
    include_once('connect.php');

    $str_sql = "SELECT * FROM product" or die("Error:" . mysqli_error());

   $result = mysqli_query($conn,$str_sql);
    ?>
   <div class="Pro_con">
<?php
   while($data = mysqli_fetch_array($result)){
    ?>
        
          <div class="product">
          <div class="product-items" style="text-align: center;">
          <img src="img/<?=$data['img']?>" width='150' height='150' border='1' >
          <?php echo $data['product'] ?><br>
          <?php echo $data['detail'] ?><br>
          <?php echo $data['price'] ?><br>
   
           <a href="menu3.php?id=<?php echo $data['id'];?>">Edit</a>
            <a href="delete.php?id=<?php echo $data['id'];?>" onclick="return confirm('ยืนยัน');" >Delete</a>
          </div>
    
    <?php
   }
   ?>
   </div>
   <?php
   mysqli_close($conn);
?>
        <!-- </div>  
        <hr>
        <br>
        <h4 style="text-align:center;">นางสาวศรุตา อินรัมย์ รหัส 630112358060</h4>
        <br>
        </div>  -->     
    </div>
</body>
</html>