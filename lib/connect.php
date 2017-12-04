<?php
    $ketnoi['host'] = 'localhost';
    $ketnoi['dbname'] = 'blog'; //Đây là tên của Database
    $ketnoi['username'] = 'root'; //Tên sử dụng Database
    $ketnoi['password'] = '';//Mật khẩu của tên sử dụng Database
    $conn = mysqli_connect(
        "{$ketnoi['host']}",
        "{$ketnoi['username']}",
        "{$ketnoi['password']}",
        "{$ketnoi['dbname']}"
    )
    or
        die("Không thể kết nối database");
    mysqli_set_charset($conn,'utf8');
?>