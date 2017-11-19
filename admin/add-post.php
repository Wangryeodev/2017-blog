<?php 
	session_start();
	require('templates/admin_header.php');
	if (isset($_POST["post"])) {
		// Kiểm tra xem có tiêu đề chưa
		if (empty($_POST['txtTitle'])) {
			$_SESSION["post_status"] = "Bài viết chưa có tiêu đề";
		}
		else
		{
			$title = $_POST["txtTitle"];
		}
		// Kiểm tra đã nhập nội dung chưa
		if (empty($_POST['txtContent'])) {
			$_SESSION["post_status"] = "Bài viết chưa có nội dung";
		}
		else
		{
			$content = $_POST["txtContent"];
		}
		// Kiểm tra xem có tác giả chưa
		if (isset($_SESSION["fullname"])) {
			$author = $_SESSION["fullname"];
		}
		else
		{
			$author = "Admin";
		}
		
		// Kết nooid tới csdl
		require('../lib/connect.php');
		// Lấy ngày tháng năm
		date_default_timezone_set('Asia/Ho_Chi_Minh'); // Timezone
			$date = date('Y-m-d H:i:s');
		// Kiểm tra xem năm hiện tại có lớn hơn năm lớn nhất trong bảng hay không
		// Nếu lớn hơn thì tạo 1 năm mói
			$yearCheck = date("Y", strtotime($date));
			// Kết nối SQL, tìm max trong table year
			$resultMaxYear = mysql_query("SELECT MAX(year) FROM year");
			$maxYear = mysql_fetch_array($resultMaxYear);
			// So Sánh
			if ($yearCheck > $maxYear[0]) {
				$AddYear = "INSERT INTO `year` (`year_id`, `year`) VALUES (NULL, '$yearCheck')";
				mysql_query($AddYear);
			}
		// lấy riêng năm
			$year = date('Y');
		if ($title && $content) {
			// Request
			mysql_query("INSERT INTO post(title, content, date_post, year, author) VALUES ('$title','$content','$date','$year','$author')") or die('Ghi lỗi');
			// Close database
			$_SESSION["post_status"] = "Đăng thành công";
			if (isset($_SESSION["post_status"])) {
				unset($_SESSION["post_status"]);
			}
			header('location: post-manage.php');
		}
	}
?>
	<div class="col-md-8 col-md-offset-2" id="add_post">
		<form action="add-post.php" method="POST">
			<h3>Thêm bài viết</h3>
			<div class="form-group">
			    <label >Tiêu đề</label>
			    <input type="text" name="txtTitle" class="form-control">
			</div>
			<div class="form-group">
				<label >Nội dung</label>
			  	<textarea class="form-control" name="txtContent" rows="15"></textarea>
			  	<script>
                CKEDITOR.replace( 'txtContent' );
            </script>
			</div>
			  	<button type="submit" name="post" class="btn btn-default">Đăng</button>
		</form>
		<?php
			if (isset($_SESSION["post_status"])) {
		?>
			<div class="alert alert-danger" id="errorForm" role="alert">
				<span aria-hidden="true">&times;</span>
                 <?php echo $_SESSION["post_status"]; ?>
			</div>
		<?php } ?>
	</div>
<?php 
	require('templates/admin-footer.php');
?>