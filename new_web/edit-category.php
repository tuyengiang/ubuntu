<?php require_once("temp/ad/header_ad.php");?>
<?php require_once("temp/menu.php");?>
<?php
		$id=$_GET['id'];
		$sql="SELECT * FROM category WHERE id='{$id}'";
		$query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
		if(empty($row)){
					echo "<script type='text/javascript'>";
					echo "alert('Chuyên Mục Không Tồn Tại');";
					echo "</script>";
		}else{

			if($_SERVER["REQUEST_METHOD"]=="POST"){

				$title=$_POST['title'];
				$content=$_POST['content'];
				$sql1="UPDATE category SET title='{$title}',content='{$content}' WHERE id='{$id}'";
				$query1=mysqli_query($conn,$sql1);

				if($query){
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
			<div id="list-title">Sửa Chuyên Mục</div>
		</div>
		
		<form method="post" action="">
			<label><h4>Tên Chuyên Mục</h4><br>
				<input type="text" name="title" value="<?php echo $row['title'];?>">
			</label>
			<label><h4>Phần Giới Thiệu</h4><br>
				<textarea name="content"><?php echo $row['content']; ?></textarea>
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
