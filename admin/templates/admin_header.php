<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<title>Trang quản lý</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="icon" href="../favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon"/>
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="../css/admin.css">
	<link rel="stylesheet" type="text/css" href="css/user.css">
	<link rel="stylesheet" type="text/css" href="css/post_manage.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
	<script type="text/javascript" src="../lib/ckeditor/ckeditor.js"></script>
	<script language="javascript">
		function show_mess()
		{
			if (confirm("Bạn có muốn xóa thành viên này?")) 
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		function show_mess_2()
		{
			if (confirm("Bạn có muốn xóa bài viết này?")) 
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	</script>
</head>
<body>
	<div class="container-fluid" id="rootDiv">
		<!-- Begin Banner -->
		<div class="col-md-8 col-md-offset-2" id="banner">
			<p id="fullNameUser"><?php 
				if (isset($_SESSION["fullname"])) {
					echo $_SESSION["fullname"];
				}
				else
				{
					echo "Root Admin";
				}
			?></p>
			<a href="../index.php"><span class="bannerBtn">Home</span></a>
			<a href="../logout.php"><span class="bannerBtn">Logout</span></a>
		</div>
		<!-- End Banner -->
		<!-- Begin menu -->
		<div class="col-md-8 col-md-offset-2" id="menuRow">
			<a href="post-manage.php"><span class="col-md-6 menuButton" >Quản lý bài đăng</span></a>
			<a href="user-manage.php"><span class="col-md-6 menuButton" >Quản lý thành viên</span></a>
		</div>
		<!-- end menu -->