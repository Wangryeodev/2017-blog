<?php 
  session_start();
  if (isset($_SESSION['username']) && isset($_SESSION['level']) && $_SESSION['level'] >= 2) {
    require('templates/admin_header.php');
?>
		<!-- begin content -->
		<div class="col-md-8 col-md-offset-2" id="admin_content">
			<h2>Đây là trang quản lý bài đăng và thành viên </h2>
		</div>
		<!-- end content -->
<?php 
		require('templates/admin-footer.php');
	}
	else
	{
		header('location: ../index.php');
	}
?>