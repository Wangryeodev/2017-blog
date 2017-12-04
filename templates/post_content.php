<!-- Begin Content -->
		<div class="col-sm-8 col-sm-offset-2" id="content">
			<div id="fullPost">
				<?php
				// Kết nối
				require('lib/connect.php');
				// Truy vấn
				$getData = "SELECT `title`, `content`, `date_post`, `author` FROM `post` WHERE `post_id`='$id'";
				$result = mysqli_query($conn, $getData) or die('Lấy dữ liệu lỗi');
				$dataPost = mysqli_fetch_assoc($result);
				$newDate = date("d/m/Y", strtotime($dataPost['date_post'])); // chuyển định dạng ngày
				echo"<hr>";
				echo"<h2 id='postTitle'>$dataPost[title]</h2>";
				echo"<hr>";
				echo"<p id='postContent'>$dataPost[content]</p>";
				echo"<hr>";
				echo"<div class='col-sm-4 col-sm-offset-8' id='postInfo'>";
					echo"<span id='postTime'>$newDate</span>";
					echo"<span id='postAuthor'>$dataPost[author]</span>";
				echo"</div>";
				// Đóng Database
				mysqli_close($conn);
				?>
			</div>
		</div>
		<!-- End Content -->