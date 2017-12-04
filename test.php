<?php 
	require('lib/connect.php');
            $query = "SELECT `last_edit_date`,`content` FROM `post` WHERE `post_id`=3";
            $query_result = mysqli_query($conn,$query) or die('Không nhận được dữ liệu từ máy chủ!');
            $data = mysqli_fetch_array($query_result, MYSQLI_ASSOC);
			echo strtotime($data['last_edit_date']);
?>
			