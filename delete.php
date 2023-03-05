<?php
    include_once('connect.php'); //เรืยกใช้การเชื่อมต่อฐานข้อมูล
   $id =    (isset($_GET['id'])) ? $_GET['id'] : '';


    //สร้าง str sql
    $str_sql = "delete from product where id = $id";

    //ประมวลผลคำสั่ง sql
    $result = mysqli_query($conn,$str_sql);
    if($result){
        header("Location: menu1.php");
    }
    else{
        echo $id;
    }
    mysqli_close($conn);

?>