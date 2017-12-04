<!-- Begin Content -->
		<div class="col-sm-8 col-sm-offset-2" id="content">
			<?php
				require('lib/connect.php');
				// lay nam
				$query_get_year = "SELECT `year` FROM year ORDER BY year DESC";
				$get_year = mysqli_query($conn,$query_get_year);

				while($year = mysqli_fetch_assoc($get_year))
				{
					echo"<h1 class='tagYear'>$year[year]</h1>";
					// Lay bai dang
					$query_get_post_info = "SELECT `post_id`, `title`,`date_post` FROM `post` WHERE `year`='$year[year]' ORDER BY post_id DESC ";
					$result = mysqli_query($conn, $query_get_post_info);
					$num_row = mysqli_num_rows($result);
					if ($num_row == 0) {
						echo "<h4 style='color:#e74c3c'>Không có bài đăng nào trong năm $year[year].</h4>";
					}
					while($data = mysqli_fetch_assoc($result))
					{
						echo"<p>- <a href='post.php?id=$data[post_id]'>$data[title]</a></p>";
					}// end while content in year
				} // End while year
			mysqli_close($conn);
			?>
			
		</div>
		<!-- End Content -->