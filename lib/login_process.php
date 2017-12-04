<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 // Nếu tồn tại user thì chuyển hẳn đến trang admin
if (isset($_SESSION["username"])){
  header('Location: admin');
} 
//Xử lý đăng nhập
if (isset($_POST['login'])) 
{
    //Kết nối tới database
    include('lib/connect.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    // Tạo session user vs pass tạm thời để dùng cho trường hợp đăng nhập thất bại.
    $_SESSION["username_tamthoi"] = $username;
    $_SESSION["password_tamthoi"] = $password;  
    
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
        $_SESSION["status"] = "Hãy nhập đủ thông tin đăng nhập!";
        header('Location: login.php');
    }
     
    // mã hóa pasword
    $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($conn,"SELECT * FROM user WHERE username='$username'");
     $row = mysqli_fetch_array($query);
    if (mysqli_num_rows($query) == 0) {
        $_SESSION["status"] = "Thất bại! Tên đăng nhập không tồn tại!";
        header('Location: login.php');
    }
    else // Nếu tồn tại
    {
    //So sánh 2 mật khẩu có trùng khớp hay không
	    if ($password != $row['password']) {
	          $_SESSION["status"] = "Thất bại! Bạn đã nhập sai mật khẩu!";
	          header('Location: login.php');
	     }
	     else
	    {
	        $_SESSION["username"] = $username;
            $_SESSION["level"] = $row['level'];
            $_SESSION["fullname"] = $row['fullname'];
	            header('Location: admin');
	    }
    }
    mysqli_close($conn);
}
?>