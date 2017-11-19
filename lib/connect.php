<?php
    $ketnoi['host'] = 'localhost';
    $ketnoi['dbname'] = 'k2354levu_blog'; //Đây là tên của Database
    $ketnoi['username'] = 'k2354levu_blog'; //Tên sử dụng Database
    $ketnoi['password'] = 'V_le123@@';//Mật khẩu của tên sử dụng Database
    $conn = mysql_connect(
        "{$ketnoi['host']}",
        "{$ketnoi['username']}",
        "{$ketnoi['password']}")
    or
        die("Không thể kết nối database");
    mysql_set_charset('utf8');
    @mysql_select_db(
        "{$ketnoi['dbname']}") 
    or
        die("Không thể chọn database");
?>