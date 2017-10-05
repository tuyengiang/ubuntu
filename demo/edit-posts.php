<?php require_once('nic/connect.php'); 
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$id=$_GET['id'];
		$sql="SELECT * FROM posts WHERE id='{$id}'";
		$query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
		if($row){
			echo "<script type='text/javascript'>";
			echo "alert('Bài Viết Không Tồn Tại')";
			echo "</script>";
		}else{
			$title=$_POST["title"];
			$content=$_POST["content"];
			$excerpt=$_POST["excerpt"];
			$user=$_POST["user"];
			$category=$_POST["category"];

			$sql="UPDATE posts SET title='{$title}',content='{$content}',excerpt='{$excerpt}',user='{$user}',cat_id='{$category}";
			$query=mysqli_query($conn,$sql);
			if($query){
				echo "<script type='text/javascript'>";
				echo "alert('Sửa Bài Thành Công')";
				echo "</script>";
			}else{
				echo "<script type='text/javascript'>";
				echo "alert('Sửa Bài Không Thành Công')";
				echo "</script>";
			}

		}
	}

?>

<?php require_once('temp/header_min.php');?>
<?php require_once('temp/menu.php');?>

<div id="main">

 	<?php
		$id1=$_GET['id'];
		$sql="SELECT * FROM posts WHERE id='{$id1}'";
		$query=mysqli_query($conn,$sql);
		while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC)):
?>

 	<div id="list" style="text-align:center;">&hearts; Sửa Bài : <?php echo $rs['title']; ?> &hearts;</div>
 <form method="post">
 	 <label>Nhập Tiêu Đề
 		<input type="text" name="title" placeholder="Nhập Tiêu Đề" value='<?php echo $rs['title'];?>'>
 	</label>
 	<label>Nhập Nội Dung
 		<textarea placeholder="Nhập Nội Dung Bài Viết" name="content"><?php echo $rs['content'];?></textarea>
 	</label>
 	<label>Nhập ND Tóm Tắt
 		<textarea placeholder="Nhập Nội Dung Tóm Tắt" name="excerpt" ><?php echo $rs['excerpt'];?></textarea>
 	</label>
 	<label>Chuyên Mục<br>
 		<select name="category">
	             	<option>Chọn Danh Mục</option>
	             	<?php
	             	   $sql="SELECT * FROM category";
	             	   $rs=mysqli_query($conn,$sql);
	             	   while($rw=mysqli_fetch_array($rs,MYSQLI_ASSOC)){
             	   ?>
	             	  <option <?php if($rw["id"]==$rs["cat_id"]){echo "selected";}; ?>

	             	    value="<?php echo $rw["id"]; ?>"><?php echo $rw["title"]; ?></option>
	             	 <?php } ?>
	            </select>
 	</label><br>
 	<label>Nhập Bút Danh
 		<input type="text" name="user" placeholder="Nhập Bút Danh" value='<?php echo $row['user'];?>'>
 	</label>
 	<?php endwhile;?>
 	<center>
 		<button type="submit">Viết Bài Mới</button>
 	</center>
 </form>


</div><!--main-->

<?php require_once('temp/bottom.php'); ?>