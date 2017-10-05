<?php require_once("temp/ad/header_ad.php");?>
<?php
	if(isset($_POST['delete'])){
		$id=$_POST['delete'];
		$sql="DELETE FROM category WHERE id='{$id}'";
		$query=mysqli_query($conn,$sql);
		if($query){
				echo "<script type='text/javascript'>";
				echo "alert('Xóa Thành Công');";
				echo "</script>";
		}else{
				echo "<script type='text/javascript'>";
				echo "alert('Xóa Thất Bại');";
				echo "</script>";
		}
	}
?>
<?php require_once("temp/menu.php");?>
<div id="search">
		<div id="list">
			<div id="list-title">Tìm Kiếm</div><!--list-title-->
		</div><!--list-->
		<div class="search-back">
			<form method="post" action="search">
				<input type="search" name="search" placeholder="Tìm Kiếm">
			</form>
		</div>
</div><!--search-->

<div id="main">
		<div id="list">
			<div id="list-title">Chuyên Mục</div><!--list-title-->
		</div><!--list-->
		<?php
			$sql="SELECT * FROM category";
			$query=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
		?>
		<div class="category">
			<div class="category-title"><a href="list.php?id=<?php echo $row['id'];?>" title="<?php echo $row['title'];?>"><font color="red">&raquo; </font><?php echo $row['title'];?></a>
			</div><!--category-title-->
			<div class="category-content">
				<i><?php echo $row['content'];?></i><br>
			</div><!--category-content-->
			<form method="post">
					<input type="hidden" name="delete" id="button" value="<?php echo $row['id'] ?>" />
					<button type="submit" id="button" onclick="return confirm('bạn chắc chắn muốn xóa ? ');">Delete</button>
				</form>
						<a href="edit-category.php?id=<?php echo $row['id'];?>"><button id="button" type="submit">Edit</button></a><br>
		</div><!--category-->
		<?php endwhile;?>
</div><!--main-->

<div style="clear:left;"></div>
<?php require_once("temp/bottom.php"); ?>