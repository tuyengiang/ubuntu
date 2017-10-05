<?php require_once("temp/ad/header_ad.php");?>
<?php require_once("temp/menu.php");?>
<?php 	
		$id=$_GET['id'];
		$sql="SELECT * FROM posts WHERE id='{$id}'";
		$query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
		if(empty($row)){
					echo "<script type='text/javascript'>";
					echo "alert('Bài Viết Không Tồn Tại');";
					echo "</script>";
		}else{
			if($_SERVER["REQUEST_METHOD"]=="POST"){

				$title=$_POST['title'];
				$excerpt=$_POST['excerpt'];
				$content=$_POST['content'];
				$category=$_POST['category'];

				$sql1="UPDATE posts SET title='{$title}',exceprt='{$excerpt}',content='{$content}',cat_id='{$category}' WHERE id='{$id}'";

				$query1=mysqli_query($conn,$sql);

				if($query1){
					echo "<script type='text/javascript'>";
					echo "alert('Cập Nhật Thành Công');";
					echo "</script>";
				}else{
					echo "<script type='text/javascript'>";
					echo "alert('Cập Nhật Thất Thất Bại');";
					echo "</script>";
				}

		}
	}

?>

<div id="main">
	<div id="main-left">
		<div id="list">
			<div id="list-title">Sửa Bài Viết</div>
		</div>
		
		<form method="post">
			<label><h4>Tên Bài Viết</h4><br>
				<input type="text" name="title" value="<?php echo $row['title'];?>">
			</label>
			<label><h4>Nội Dung Tóm Tắt</h4><br>
				<textarea name="excerpt"><?php echo $row['excerpt']; ?></textarea>
			</label>
			<label><h4>Nội Dung</h4><br>
				<textarea name="content"><?php echo $row['content']; ?></textarea>
			</label>
			<label><h4>Chuyên Mục</h4><br>
				<select name="category">
					<?php 
						$sl="SELECT * FROM category";
						$que=mysqli_query($conn,$sl);
						while($rss=mysqli_fetch_array($que,MYSQLI_ASSOC)):
					?>
						<option <?php if($rss["id"]==$row["cat_id"]){echo "selected";}; ?>
						value="<?php echo $rss['id'];?>">
							<?php echo $rss['title'];?>

						</option>
					<?php endwhile; ?>
				</select>
			</label><br>
			<button type="submit">Cập Nhật</button>
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

<?php require_once("temp/bottom.php"); ?>