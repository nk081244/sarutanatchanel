<?php
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $db_name  = 'adminphp';
    $conn = mysqli_connect($host, $username, $password, $db_name);
    mysqli_query($conn, "SET NAMES 'utf8' ");
?>