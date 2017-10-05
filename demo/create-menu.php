<?php require_once("nic/connect.php");

	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$title=$_POST["title"];
		$content=$_POST["content"];
		$sql = "INSERT INTO category ( title , content )
			VALUES('{$title}','{$content}')";
		$query=mysqli_query($conn,$sql);

		if($query){
			echo "<script type='text/javascript'>";
			echo "alert('Tạo thành công')";
			echo "</script>";
		}else{
			echo "<script type='text/javascript'>";
			echo "alert('Tạo không thành công')";
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
 		<textarea placeholder="Nhập Nội Dung Bài Viết" name="content"></textarea>
 	</label>
 	
 	<center>
 		<button type="submit">Tạo Category</button>
 	</center>
 </form>

</div><!--main-->
<?php require_once("temp/bottom.php") ?>