<?php
    include_once('connect.php'); //เรืยกใช้การเชื่อมต่อฐานข้อมูล
$product    = $_POST['product'];
$detail     = $_POST['detail'];
$price      = $_POST['price'];
$id         = $_POST['id'];
$img = (isset($_POST['img'])) ? $_POST['img'] : '';
$img2       = $_POST['img2'];
$upload     = $_FILES['img'];

if($upload <> '') {   
$path="img/";  


	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newname = str_replace($remove_these, '', $_FILES['img']['name']);
 
	
	$newname = time().'-'.$newname;
    $newname=$img2;
$path_copy=$path.$newname;
$path_link="img/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);  	
	}







//สร้าง str sql
    $str_sql = "UPDATE `product` SET `product` = '$product', `detail` = '$detail', `price` = '$price', `img` = '$newname' WHERE `product`.`id` = $id";

    //ประมวลผลคำสั่ง sql
    $result = mysqli_query($conn,$str_sql);
    if($result){
        header("Location: menu1.php");
    }
    mysqli_close($conn);

?>