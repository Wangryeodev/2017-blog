<?php
	$id = $_GET["id"];
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