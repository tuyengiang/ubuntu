<?php require_once("temp/ad/header_ad.php");?>
<?php require_once("temp/menu.php"); ?>
<div id="main">
		<div id="main-left">
			<div id="list">
				<div id="list-title">Tạo Chuyên Mục</div>
			</div>
			<?php
				if($_SERVER["REQUEST_METHOD"]=="POST"){
					$title=$_POST['title'];
					$content=$_POST['content'];
					$sql="INSERT INTO category (title,content)
						   VALUES('{$title}','{$content}')
					";
					$query=mysqli_query($conn,$sql);
					if($query){
						echo "<script type='text/javascript'>";
						echo "alert('Chuyên Mục Đã Được Tạo');";
						echo "</script>";
					}else{
						echo "<script type='text/javascript'>";
						echo "alert('Tạo Chuyên Mục Thất Bại');";
						echo "</script>";
					}
				}
			?>
			<form method="post">
				<label><h4>Tên Chuyên Mục</h4><br>
					<input type="text" name="title" placeholder="Nhập Tên Chuyên Mục">
				</label>
				<label><h4>Giới Thiệu Về Chuyên Mục</h4><br>
					<textarea name="content" placeholder="Nhập Phần Giới thiệu"></textarea>
				</label><br>
				<button type="submit">Tạo Chuyên Mục</button>
			</form>

		</div><!--main-left-->

		<div id="main-right">
			<div id="search">
			<div id="list">
				<div id="list-title">Tìm Kiếm</div>
			</div>
			<div class="search-back">
				<form method="post" action="search.php">
					<input type="search" name="search" placeholder="Tìm Kiếm">
				</form>
			</div><!--search-back-->
			<div style="clear:left;"></div>
		</div><!--search-->
			<div style="clear:left;"></div>

		<div id="category">
			<div id="list">
				<div id="list-title">Chuyên Mục</div>
			</div>
			<ul>
				<?php
					$sql="SELECT * FROM category";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) :
				?>
				<li><a href="list.php?id=<?php echo $row['id']; ?>">
						<?php echo $row['title']; ?>
					</a>
				</li>
			<?php endwhile;?>
			</ul>
		</div><!--category-->
		</div><!--main-right-->
</div><!--main-->
<div style="clear:left;"></div>

<?php require_once("temp/bottom.php");?>