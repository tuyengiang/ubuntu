
<?php require_once("temp/ad/header_ad.php");?>
<?php require_once("temp/menu.php");?>

<div id="main">
	<div id="main-left">
		<div id="list">
			<div id="list-title">Viết Bài Mới</div>
		</div>
		<?php
			if($_SERVER["REQUEST_METHOD"]=="POST"){

				$title=$_POST['title'];
				$excerpt=$_POST['excerpt'];
				$content=$_POST['content'];
				$category=$_POST['category'];


				$sql="INSERT INTO posts (title,  content, excerpt, cat_id)
				 VALUES('{$title}', '{$content}','{$excerpt}', '{$category}')";

				$query=mysqli_query($conn,$sql);

				if($query){
						echo "<script type='text/javascript'>";
						echo "alert('Viết Bài Thành Công');";
						echo "</script>";
				}else{
						echo "<script type='text/javascript'>";
						echo "alert('Viết Bài Thất Bại');";
						echo "</script>";
				}

			}
		?>
		<form method="post">
			<label><h4>Tên Bài</h4><br>
				<input type="text" name="title" placeholder="Nhập tên bài viết">
			</label>
			<label><h4>Nội Dung Tóm Tắt</h4><br>
				<textarea name="excerpt" placeholder="Nhập nội dung tóm tắt"></textarea>
			</label>
			<label><h4>Nội Dung bài Viết</h4><br>
				<textarea name="content" placeholder="Nhập nội dung"></textarea>
			</label>
			<label><h4>Chuyên Mục</h4><br>
				<select name="category">
					<option>Chọn Chuyên Mục</option>
					<?php 
						$sql="SELECT * FROM category";
						$query1=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC)) :
					?>
					<option value="<?php echo $row['id']; ?>">
							<?php echo $row["title"]; ?>
					</option>
				<?php endwhile;?>
				</select>
			</label><br>
			<button type="submit">Viết Bài Mới</button>
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