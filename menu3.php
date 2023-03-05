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
        <img src="chanel.png" class="logonav">
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
$id =$_GET['id'];
    $str_sql = "SELECT * FROM product where id=$id "  ;
    
  
    $result = mysqli_query($conn,$str_sql);
    $data = mysqli_fetch_array($result);
    ?>

<div class="content">
            <div class="table">
            <form action="update.php" method="post" enctype="multipart/form-data">  
          <input type="hidden" name="id" value = "<?php echo $data ['id']; ?>">
          <input type="hidden" name="img2" value="<?php echo $data ['img']; ?>">
                <table>
                    <tr>
                        <td>ชื่อสินค้า</td>
                        <td><input type="text" name="product"  value = "<?php echo $data ['product']; ?>" required ></td>
                    </tr>
                    <tr>
                        <td>รายละเอียด</td>
                        <td><textarea name="detail" id="" cols="30" rows="10" value = "<?php echo $data ['detail']; ?>"required><?php echo $data ['detail']; ?></textarea></td>
                    </tr>
                    <tr>
                        <td>ราคา</td>
                        <td><input type="text" name="price"  value = "<?php echo $data ['price']; ?>" required></td>
                    </tr>
                    <tr>
                        <td>รูปภาพ</td>
                        <td><input type="file" name="img" value = "<?php echo $data ['img']; ?>"></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="ตกลง"></td>
                    </tr>
                </table>









 
   <?php
   mysqli_close($conn);
?>
        <!-- </div>  
        <hr>
        <br>
        <h4 style="text-align:center;">นางสาวศรุตา อินรัมย์ รหัส630112358060</h4>
        <br>
        </div>  -->     
    </div>
</body>
</html>