<!-- Begin Footer -->
		<div class="col-sm-12" id="footer">
			<span>&copy; Created by Le Van Vuong</span> |
			<a href="login.php"><span class="footerTagA glyphicon glyphicon-user" aria-hidden="true"></span></a>
			<?php
				if (isset($_SESSION['username'])) {
					echo " | ";
					echo"<a href='logout.php'><span class='footerTagA glyphicon glyphicon-off' aria-hidden='true'></span></a>";
					echo " | Bạn đang truy cập website với tên truy cập là ";
					echo $_SESSION['username'];
				}
				else
				{
					echo " | Bạn đang truy cập website với vai trò là Khách.";
				}
			?>

		</div>
		<!-- End Footer -->
</div> <!-- đóng tab container mẹ -->