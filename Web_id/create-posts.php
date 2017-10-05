<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
	<div id="list-new">&raquo; Viết Bài Mới</div>
	<?php 
   require_once("inc/lip.php");
	if( $_SERVER["REQUEST_METHOD"] == "POST" ){
		
		$title = $_POST["title"];
		$content = $_POST["content"];
		$excerpt = $_POST["excerpt"];
		$cat_id=$_POST["category"];
		$sql = "INSERT INTO posts( title , content , excerpt , user_id,cat_id )
			      VALUES  ( '{$title}' , '{$content}' , '{$excerpt}' , 1 ,$cat_id) ";
		$query = mysqli_query( $conn , $sql );
		if( $query ){
			echo " <h1>Viết Bài Thành Công</h1>";
		}else{
			echo "<h1>Viết Bài Thất Bại</h1>"  . mysqli_error($conn);
		}
	}
 ?>
   <form method="post">
		<label>
				<h4>Nhập tên bài viết</h4>
					<input type="text" name="title" placeholder="Nhập tiêu đề">
			</label>

			<label>
				<h4>Nhập tóm tắt</h4>
				<textarea name="excerpt" placeholder="Nhập tóm tắt ở đây"></textarea>
			</label>

			<label>
				<h4>Nhập nội dung</h4>
				<textarea name="content" placeholder="Nhập nội dung "></textarea>
			</label>
            <label>
             	<h4>Thể Loại</h4>
                  
	             	<select name="category">
	             	<option>Chọn Danh Mục</option>
	             	<?php
	             	   $sql="SELECT * FROM category";
	             	   $rs=mysqli_query($conn,$sql);
	             	   while($rw=mysqli_fetch_array($rs,MYSQLI_ASSOC)){
             	   ?>
	             	  <option value="<?php echo $rw["id"]; ?>"><?php echo $rw["name"]; ?></option>
	             	 <?php } ?>
	             	</select>
	             
            </label>

            <center> <button type="submit">
					<a href="index.php">Về trang admin</a>
			</button>
			<button type="submit">
				Viết bài mới
			</button></center>
			

		</form>
	</div><!--create-post-->
</div><!--create-->
<div style="clear:left">
<?php require("tem/bottom.php"); ?>