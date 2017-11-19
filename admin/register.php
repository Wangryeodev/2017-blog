<?php 
	require('templates/admin_header.php');
?>
<?php 
	//Xử lý
session_start();
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
    if (!$username || !$password || !$email || !$fullName) {
        $_SESSION["regStatus"] = "Hãy nhập đủ thông tin đăng nhập!";
        header('Location: register.php');
    }
	    // mã hóa pasword
	    $password = md5($password);
	     
	    //Kiểm tra tên đăng nhập có tồn tại không
	    $query = mysql_query("SELECT * FROM user WHERE username='$username'");
	    $row = mysql_fetch_array($query);
	    if (mysql_num_rows($query) == 0) {
	     mysql_query("INSERT INTO user(user_id, username, password, email, fullname, gender, level) VALUES (1,'$username','$password','$email','$fullname',1,2)") or die('Không đăng kí được');
	     mysql_query($reg) or die('Không đăng kí được');
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
}
	mysql_close($conn);
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