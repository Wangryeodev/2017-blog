<?php 
  session_start();
  if (isset($_SESSION['username']) && isset($_SESSION['level']) >= 2) {
    require('templates/admin_header.php');
?>

<!-- Content -->
	<div class="col-md-8 col-md-offset-2" id="postContent">
		<div class="newPost">
			<a href="add-post.php"><span id="newPostBtn">Bài đăng mới</span></a>
		</div>
		<hr>
		<h4>Danh sách bài đăng</h4>
		<div class="table-responsive" id="user_table">
  			<table class="table table-bordered table-hover">
  				<tr class="success" id="tbTopLine">
  					<td id="tbID">STT</td>
  					<td id="tbTitle">Tiêu đề</td>
  					<td id="tbDate">Ngày đăng</td>
  					<td id="tbAuthor">Người đăng</td>
  					<td id="tbEdit">Sửa</td>
  					<td id="tbDelete">Xóa</td>
  				</tr>
          <?php 
          // kết nối tới server
            require('../lib/connect.php');
          // Truy Vấn
            $query = "select post_id, title, date_post, author from post";
            $query_result = mysql_query($query) or die('Không nhận được dữ liệu từ máy chủ!');
            $stt = 0;
            while($data = mysql_fetch_assoc($query_result))
            {
      				echo"<tr>";
                ++$stt;
      					echo"<td>$stt</td>";
      					echo"<td>$data[title]</td>";
      					echo"<td>$data[date_post]</td>";
      					echo"<td>$data[author]</td>";
      					echo"<td><a href='edit-post.php?target=$data[post_id]'><span class='deleteBtn'>Sửa</span></a></td>";
      					echo"<td><a href='delete-post.php?target=$data[post_id]' onclick='return show_mess_2();'><span class='deleteBtn'>Delete</span></a></td>";
      				echo"</tr>";
            }
          // Đóng database
            mysql_close($conn);
          ?>
  			</table>
		</div>
	</div>

<?php 
    require('templates/admin-footer.php');
  }
  else
  {
    header('location: ../index.php');
  }
?>