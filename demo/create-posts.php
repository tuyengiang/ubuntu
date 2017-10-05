<?php require_once("nic/connect.php");

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$title=$_POST["title"];
		$content=$_POST["content"];
		$excerpt=$_POST["excerpt"];
		$user=$_POST["user"];
		$category=$_POST["category"];

		$sql = "INSERT INTO posts( title , content , excerpt , user,cat_id)
				VALUES('{$title}','{$content}','{$excerpt}','{$user}','{$category}')";

		$query=mysqli_query($conn,$sql);

		if($query){
			echo "<script type='text/javascript'>";
			echo "alert('Viết bài viết thành công')";
			echo "</script>";
		}else{
			echo "<script type='text/javascript'>";
			echo "alert('Viết bài viết không thành công')";
			echo "</script>";
		}
	}

?>
<?php require_once("temp/header_min.php") ?>
<?php require_once("temp/menu.php") ?>
<div id="main">
 	<div id="list" style="text-align:center;">&hearts; Tạo Bài Viết &hearts;</div>

 <form method="post">
 	 <label>Nhập Tiêu Đề
 		<input type="text" name="title" placeholder="Nhập Tiêu Đề">
 	</label>
 	<label>Nhập Nội Dung
 		<textarea class="textarea"  placeholder="Nhập Nội Dung Bài Viết" name="content"></textarea>
 	</label>
 	<label>Nhập ND Tóm Tắt
 		<textarea class="textarea" placeholder="Nhập Nội Dung Tóm Tắt" name="excerpt"></textarea>
 	</label>
 	<label>Chuyên Mục<br>
 		<select name="category">
 			<?php

 				$sql="SELECT * FROM category";
 				$query=mysqli_query($conn,$sql);
 				while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC)):
 			?>
 			<option value="<?php echo $rs['id']; ?>"><?php echo $rs['title']; ?></option>
 			<?php endwhile; ?>
 		</select>
 	</label><br>
 	<label>Nhập Bút Danh
 		<input type="text" name="user" placeholder="Nhập Bút Danh">
 	</label>
 	<center>
 		<button type="submit">Viết Bài Mới</button>
 	</center>
 </form>

</div><!--main-->
<?php require_once("temp/bottom.php") ?>