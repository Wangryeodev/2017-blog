<?php 
  session_start();
  if (isset($_SESSION['username']) && isset($_SESSION["level"]) && $_SESSION["level"] >= 2) {
    require('templates/admin_header.php');
?>
<!-- Content -->
	<div class="col-md-8 col-md-offset-2" id="userContent">
    <div class="newUser">
      <a href="register.php"><span id="newUserBtn">Thành viên mới</span></a>
    </div>
    <hr>
		<div class="table-responsive" id="user_table">
  			<table class="table table-bordered table-hover">
  				<tr class="success" id="tbTopLine">
  					<td id="tbUserID">STT</td>
  					<td id="tbUserName">Username</td>
  					<td id="tbFullname">Full Name</td>
  					<td id="tbEmail">Email</td>
  					<td id="tbLevel">Level</td>
  					<td id="tbDelete">Delete</td>
  				</tr>
          <?php 
          // kết nối tới server
            require('../lib/connect.php');
          // Truy Vấn
            $query = "select username, email, fullname, gender, level from user";
            $query_result = mysqli_query($conn,$query) or die('Không nhận được dữ liệu từ máy chủ!');
            $stt = 0;
            while($data = mysqli_fetch_assoc($query_result))
            {
      				echo"<tr>";
                ++$stt;
      					echo"<td>$stt</td>";
      					echo"<td>$data[username]</td>";
      					echo"<td>$data[fullname]</td>";
      					echo"<td>$data[email]</td>";
                $showLevel = "";
                if ($data['level'] == 2) {
                  $showLevel = "Admin";
                }
                else
                {
                  $showLevel = "Bình thường";
                }
      					echo"<td>$showLevel</td>";
                if ($_SESSION["level"] > $data['level'] ) {
                    $canDelete = TRUE;
                }
                else
                {
                    $canDelete = FALSE;
                }
                if ($canDelete) {
      					echo"<td><a href='delete-user.php?target=$data[username]' onclick='return show_mess();'><span class='deleteBtn'>Delete</span></a></td>";
                }
                else
                {
                  echo "<td>Can't Delete</td>";
                }
      				echo"</tr>";
            }
          // Đóng database
            mysqli_close($conn);
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