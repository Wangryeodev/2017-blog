<!DOCTYPE html>
<html lang="vi">
<head>
	<meta charset="UTF-8">
	<?php 
		if (isset($id)) {
			require('lib/connect.php');
			$result = mysqli_query($conn,"select title from post where post_id='$id'");
			$data = mysqli_fetch_array($result);
			echo "<title>$data[0]</title>";
			mysqli_close($conn);
		}
		else
		{
			echo"<title>#Learning_log</title>";
		}
	?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="css/topBar.css">
	<link rel="stylesheet" type="text/css" href="css/content.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/post.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
	<div class="container-fluid" id="bigMomContainer">