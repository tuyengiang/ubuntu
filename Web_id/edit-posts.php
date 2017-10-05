<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
  <div id="list-new">&raquo; Sửa Bài Viết </div>
  <?php
	$id1 =$_GET["id"];

	$sql = "SELECT * FROM posts WHERE id = {$id1}";

	$query =mysqli_query( $conn , $sql );

	$rs1 = mysqli_fetch_array( $query , MYSQLI_ASSOC );

	if( empty($rs1) ){
		echo "Bài viết không tại ";
		return;
	}
		
	if( $_SERVER["REQUEST_METHOD"] == "POST" ){

				$title = $_POST["title"];
				$content = $_POST["content"];
				$excerpt = $_POST["excerpt"];
				$cat_id=$_POST["category"];

		$sql ="UPDATE posts SET title='{$title}',excerpt='{$excerpt}',content='{$content}',cat_id='{$cat_id}' WHERE id={$id1} ";

		$row = mysqli_query( $conn , $sql);

		if( $row ){
			echo " <h1>Sửa Thành Công</h1>";
		}else{
			echo "<h1>Sửa Thất Bại</h1>" .mysqli_error($conn);
		}
	
}
?>
	 	<h1>Chỉnh sửa bài viết : <?php echo $rs1["title"] ?></h1>
 	

<form action="" method="post" accept-charset="utf-8">
	<labe> <h4>Tiêu đề </h4>
		<input type="text" name="title" value="<?php echo $rs1["title"] ?>" id="title">
	</labe>

	<label>
		<h4>Tóm tắt</h4>
		<textarea name="excerpt"><?php echo $rs1["excerpt"];?></textarea>
	</label>

	<label>
		<h4>Nội dung</h4>
		<textarea name="content"><?php echo $rs1["content"];?></textarea>
	</label>
	<label>
             	<h4>Thể Loại</h4>
                  
	             	<select name="category">
	             	<option>Chọn Danh Mục</option>
	             	<?php
	             	   $sql="SELECT * FROM category";
	             	   $rs2=mysqli_query($conn,$sql);
	             	   while($rw=mysqli_fetch_array($rs2,MYSQLI_ASSOC)){
             	   ?>
	             	  <option <?php if($rw["id"]==$rs1["cat_id"]){echo "selected";}; ?>

	             	    value="<?php echo $rw["id"]; ?>"><?php echo $rw["name"]; ?></option>
	             	 <?php } ?>
	             	</select>
	             
            </label>

	<center>
     <button type="submit" id="buttom-new">
					<a href="index.php">Về Home</a>
	</button>

	<button type="submit" id="buttom-new">Cập nhật</button></center>
</form>
</div><!--main-->
    <div style="clear:left;">
    <div style="clear:left;">

<?php require_once("tem/bottom.php"); ?>