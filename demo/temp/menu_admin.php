<div  id="top">
		<div class="top-text">ĐH Kinh Tế - Kỹ Thuật CN Hà Nội</div>
		<div class="login">
			<ul>
				<li><a href="dangky.php">Đăng Ký</a></li>
				<li><a href="dangnhap.php">Đăng Nhập</a></li>
			</ul>
		</div><!--login-->
	</div><!--top-->

	<div id="header">
	 <div class="header">
			<div id="logo">
				<div class="logo-title">B</div>
				<div class="text">Log Tin9A5</div>
			</div><!--logo-->
			<div id="search">
				<form method="post" action="search">
					<input type="search" placeholder="Bạn Tìm Gì nào" name="search">
					<button type="submit" class="btn btn-success">Tìm</button>
				</form>
			</div><!--search-->
	 </div><!--header-class-->
	</div><!--header-->
	<div id="menu">
			<ul>
				<li><a href="index.php">Trang Chủ</a></li>
				<li><a href="#">Quản Trị</a>
					<ul class="sub-menu">
						<li><a href="create-posts.php">Viết Bài</a></li>
						<li><a href="create-menu.php">Tạo Category</a></li>
					</ul>
				</li>
				<li><a href="#">Lịch Học</a></li>
				<li><a href="#">Tài Liệu
					<ul class="sub-menu">
					<?php

			 				$sql="SELECT * FROM category";
			 				$query=mysqli_query($conn,$sql);
			 				while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC)):
 					?>
						<li><a href="category-menu.php?id=<?php echo $rs['id']; ?>"><?php echo $rs['title']; ?></a></li>
					<?php endwhile; ?>
					</ul>

				</a></li>
				<li><a href="#">Media</a>
					<ul class="sub-menu">
						<li><a href="#">Mp3</a></li>
						<li><a href="#">Video Html 5</a></li>
						<li><a href="#">Video Php</a></li>
						<li><a href="#">Video Javascript</a></li>
						<li><a href="#">Video Mysql</a></li>
						
					</ul>

				</li>

			</ul>
	</div><!--menu-->