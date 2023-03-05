
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" type="text/css" >
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
        <div class="content">
            <div class="table">
            <form action="insert1.php" method="post" enctype="multipart/form-data">
                <table>
                    <tr>
                        <td>ชื่อสินค้า</td>
                        <td><input type="text" name="Product"  required></td>
                    </tr>
                    <tr>
                        <td>รายละเอียด</td>
                        <td><textarea name="detail" id="" cols="30" rows="10" required></textarea></td>
                    </tr>
                    <tr>
                        <td>ราคา</td>
                        <td><input type="text" name="price"  required></td>
                    </tr>
                    <tr>
                        <td>รูปภาพ</td>
                        <td><input type="file" name="img" ></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><input type="submit" value="ตกลง"></td>
                    </tr>
                    <input type="hidden" value="28" name="id">
                </table>



            </form>
            </div>
            </div> 
            </div> 
          







</html>