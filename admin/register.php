<?php
	session_start();
	if (isset($_SESSION['username']) && isset($_SESSION['level']) && $_SESSION['level']>= 2) {
	require('templates/admin_header.php'); 
	//Xử lý
	if (isset($_POST['register'])) 
	{
	    //Kết nối tới database
	    include('../lib/connect.php');
	     
	    //Lấy dữ liệu nhập vào
	    $username = addslashes($_POST['txtRegUserName']);
	    $password = addslashes($_POST['txtRegPassWord']);
	    $email = addslashes($_POST['txtRegEmail']);
	    $fullname = addslashes($_POST['txtRegFullName']);
	    $gender_temp = 1;
	    $level_temp = 1;
	    if ($_POST['genderPicker'] == 1) {
	    	$gender_temp = 1;
	    }
	    else
	    {
	    	$gender_temp = 2;
	    }
	    if ($_POST['levelPicker'] == 1) {
	    	$level_temp = 1;
	    }
	    else
	    {
	    	$level_temp = 2;
	    }
	    $gender = $gender_temp;
	    $level = $level_temp;
	    
	    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
	    if (!$username || !$password || !$email || !$fullname) {
	        $_SESSION["regStatus"] = "Hãy nhập đủ thông tin đăng nhập!";
	        header('Location: register.php');
	    }
		    // mã hóa pasword
		    $password = md5($password);
		     
		    //Kiểm tra tên đăng nhập có tồn tại không
		    $check_username = "SELECT * FROM user WHERE username='$username'";
		    $query = mysqli_query($conn, $check_username);
		    $row = mysqli_fetch_array($query);
		    if (mysqli_num_rows($query) == 0) {
		    	$reg = "INSERT INTO user(username, password, email, fullname, gender, level) VALUES ('$username','$password','$email','$fullname',$gender_temp,$level_temp)";
		     mysqli_query($conn, $reg) or die('Không đăng kí được');
		     // Xoa Session thong bao
		    if (isset($_SESSION['regStatus'])) {
				unset($_SESSION['regStatus']);
				}
		     header('Location: user-manage.php');
		 	}
		 	else
		 	{
		 		$_SESSION["regStatus"] = "Tên đăng nhập đã tồn tại!";
		        header('Location: register.php');
		 	}
		 mysqli_close($conn);
		}
	}
	else
	{
		header('Location: ../index.php');
	}
?>
	<div class="col-md-8 col-md-offset-2" id="registerForm">
		<form action="register.php?do=register" method="POST">
			<div class="form-group">
			    <label>Username</label>
			    <input type="text" class="form-control" name="txtRegUserName" placeholder="CongChuaMatTrang">
		  	</div>
		  	<div class="radio">
			  <label>
			    <input type="radio" name="levelPicker" id="radioLevel1" value="2" checked>
			    Admin
			  </label>
			  <label>
			    <input type="radio" name="levelPicker" id="radioLevel2" value="1">
			    Nomal
			  </label>
			</div>
		  	
		    <div class="form-group">
			    <label>Email address</label>
			    <input type="Email" class="form-control" name="txtRegEmail" placeholder="Email@gmail.com">
		    </div>
		    <div class="form-group">
			    <label>Password</label>
			    <input type="password" class="form-control" name="txtRegPassWord" placeholder="*******">
		    </div>
			<div class="form-group">
			    <label>Full name</label>
			    <input type="text" class="form-control" name="txtRegFullName" placeholder="Lê Ngọc Diệp">
		    </div>
		    <div class="radio">
			  <label>
			    <input type="radio" name="genderPicker" id="radioGender1" value="1" checked>
			    Nam
			  </label>
			  <label>
			    <input type="radio" name="genderPicker" id="radioGender2" value="2">
			    Nữ
			  </label>
			</div>
		    <button type="submit" name="register" class="btn btn-default">Đăng Kí</button>
		</form>
		<div class="row">
                <?php if ( isset($_SESSION["regStatus"])){ ?>
                <div class="alert alert-danger" id="regNote" role="alert">
                  <span aria-hidden="true">&times;</span></button>
                  <?php echo $_SESSION['regStatus']; ?>
                </div>
                <?php } ?>
            </div>
	</div>
<?php 
	require('templates/admin-footer.php');
?>