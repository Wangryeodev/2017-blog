<?php 
  session_start();
  if (isset($_SESSION['username']) && isset($_SESSION['level']) && $_SESSION['level']>= 2) {
		$target = $_GET["target"];
		// Kết nối tới csdl
		require('../lib/connect.php');
		// Truy vấn
		$delete = "delete from post where post_id='$target'";
		mysqli_query($conn,$delete);
		// ĐÓng csdl
		mysqli_close($conn);
		header('location: post-manage.php');
	}
	else
	{
		header('location: ../index.php');
	}
?>