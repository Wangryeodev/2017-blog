<?php
	session_start();
	if (isset($_SESSION['username']) && isset($_SESSION['level']) && $_SESSION['level'] >= 2) {
		require('templates/admin_header.php');
		// Lấy dữ liệu cũ từ vị trí có edit_target

		require('../lib/connect.php');
		if (isset($_GET['edit_target'])) {
			$edit_target = $_GET['edit_target'];
		}
		else
		{
			header('location: post-manage.php');
		}	
			$get_data = "SELECT * FROM `post` WHERE `post_id`=$edit_target";
			$query_result = mysqli_query($conn, $get_data) or die('Không thể truy vấn');
			$data = mysqli_fetch_array($query_result, MYSQLI_ASSOC);
			$e_title = $data['title'];
			$e_content = $data['content'];
			$e_id = $data['post_id'];
		mysqli_close($conn);
		// Lấy dữ liệu xong
		if (isset($_POST["edit"])) {
			// Kiểm tra xem có tiêu đề chưa
			if (empty($_POST['txtTitle'])) {
				$_SESSION["edit_status"] = "Tiêu đề đang trống, hãy nhập tiêu đề";
			}
			else
			{
				$title = $_POST["txtTitle"];
				$_SESSION['title_edited'] = $_POST["txtTitle"];
			}
			// Kiểm tra đã nhập nội dung chưa
			if (empty($_POST['txtContent'])) {
				$_SESSION["edit_status"] = "Hãy viết nội dung";
			}
			else
			{
				$content = $_POST["txtContent"];
				$_SESSION['content_edited'] = $_POST["txtContent"];
			}
			// Kết nooid tới csdl
			require('../lib/connect.php');
			// Lấy ngày tháng năm
			date_default_timezone_set('Asia/Ho_Chi_Minh'); // Timezone
				$date = date('Y-m-d H:i:s');
			if ($title && $content) {
				// Request
				$edit = "UPDATE `post` SET `title`= '$title',`content`= '$content',`last_edit_date`='$date' WHERE `post_id` = $e_id";
				mysqli_query($conn, $edit) or die('Ghi dữ liệu bị lỗi');
				// Close database
				$_SESSION["edit_status"] = "Chỉnh sửa thành công";
				mysqli_close($conn);
				if (isset($_SESSION["edit_status"])) {
					unset($_SESSION["edit_status"]);
				}
				header('location: post-manage.php');
			}
		}
	}
	else
	{
		header('location: ../index.php');
	}
?>
	<div class="col-md-8 col-md-offset-2" id="add_post">
		<form action="edit-post.php?edit_target=<?php echo $e_id; ?>" method="POST">
			<h3>Chỉnh sửa bài viết</h3>
			<h5>Các thay đổi sẽ được lưu lại sau khi nhấn nút "Thay đổi"</h5>
			<div class="form-group">
			    <label >Tiêu đề</label>
			    <input type="text" name="txtTitle" class="form-control" value="<?php echo $e_title; ?>" >
			</div>
			<div class="form-group">
				<label >Nội dung</label>
			  	<textarea class="form-control" name="txtContent" rows="15" > <?php echo $e_content; ?> </textarea>
			  	<script>
                CKEDITOR.replace('txtContent');
            	</script>
			</div>
			  	<button type="submit" name="edit" class="btn btn-primary">Thay đổi</button>
		</form>
		<?php
			if (isset($_SESSION["edit_status"])) {
		?>
			<div class="alert alert-danger" id="errorForm" role="alert">
				<span aria-hidden="true">&times;</span>
                 <?php echo $_SESSION["edit_status"]; ?>
			</div>
		<?php } ?>
	</div>
<?php 
	require('templates/admin-footer.php');
?>