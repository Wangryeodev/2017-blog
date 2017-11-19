
<?php 
	// Xử lý đăng nhập
	require('lib/login_process.php');
?>
<?php 
	require('templates/header.php');
	require('templates/topbar.php');
?>
		<!-- Begin Content -->
		<div class="col-sm-8 col-sm-offset-2" id="content">
			<div class="loginForm col-sm-6 col-sm-offset-3">
				<form class="form-signin" method="POST" action="login.php?do=login">
			        <h2 class="form-signin-heading tieuDe">Đăng Nhập</h2>
			        <label>Tên Đăng Nhập</label>
			        <input type="text" name="txtUsername" value="<?php if ( isset($_SESSION["username_tamthoi"])) {
	                echo $_SESSION["username_tamthoi"];
	              } ?>" class="form-control" placeholder="Tên Đăng nhập"  required autofocus>
			        <label>Mật Khẩu</label>
			        <input type="password" name="txtPassword" value="<?php if ( isset($_SESSION["password_tamthoi"])) {
	                echo $_SESSION["password_tamthoi"];
	              } ?>" class="form-control" placeholder="*******" required>
			        <button class="btn btn-lg btn-block" id="loginButton" name="login" type="submit">Đăng nhập</button>
	      		</form>
	      	<div class="row">
                <?php if ( isset($_SESSION["status"])){ ?>
                <div class="alert alert-danger" id="loginNote" role="alert">
                  <span aria-hidden="true">&times;</span>
                  <?php echo $_SESSION['status']; ?>
                </div>
                <?php } ?>
            </div>
			</div>
		</div>
		<!-- End Content -->
<?php 
	require('templates/footer.php');
?>
</body>
</html>