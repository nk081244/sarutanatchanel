<?php
    include_once('connect.php'); //เรืยกใช้การเชื่อมต่อฐานข้อมูล
$id             = $_POST['id'];
$Product        = (isset($_POST['Product'])) ? $_POST['Product'] : '';
$detail         = $_POST['detail'];
$price          = $_POST['price'];
$img            = (isset($_POST['img'])) ? $_POST['img'] : '';

$upload =$_FILES['img'];

if($upload <> '') {   //not select file
//โฟลเดอร์ที่จะ upload file เข้าไป 
$path="img/";  

//เอาชื่อไฟล์ที่มีอักขระแปลกๆออก
	$remove_these = array(' ','`','"','\'','\\','/','_');
	$newname = str_replace($remove_these, '', $_FILES['img']['name']);
 
	//ตั้งชื่อไฟล์ใหม่โดยเอาเวลาไว้หน้าชื่อไฟล์เดิม
	$newname = time().'-'.$newname;
$path_copy=$path . $newname;
$path_link="img/".$newname;

//คัดลอกไฟล์ไปเก็บที่เว็บเซริ์ฟเวอร์
move_uploaded_file($_FILES['img']['tmp_name'],$path_copy);  	
	}

    //สร้าง str sql
    $str_sql = "INSERT INTO product (product, detail, price, img) 
                 VALUES ('$Product', '$detail', '$price','$newname')";
    






//ประมวลผลคำสั่ง sql
    $result = mysqli_query($conn,$str_sql);
    
    if($result){
        echo "lnsert complete";
        header("Location: menu1.php");  
    }else{
        echo "lnsert fail";
    }
    
mysqli_close($conn);
    
?>