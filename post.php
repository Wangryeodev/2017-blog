<?php
	$id = $_GET["id"];
session_start();
if (isset($_SESSION['username'])) {
	require('templates/header.php');
	require('templates/topbar.php');
?>
		<?php 
			require('templates/post_content.php');
		?>
<?php 
	require('templates/footer.php');
?>
</body>
</html>
<?php 
}
else
{
	$_SESSION["status"] = "Bạn không đủ quền xem nội dung, hãy đăng nhập!";
	header('Location: login.php');
}
?>