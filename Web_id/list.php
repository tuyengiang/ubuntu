<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
	<?php 
		if(isset($_POST["delete"])  ){
			$id = $_POST["delete"];
			$sql = "DELETE FROM posts WHERE id = {$id}";
			$rs = mysqli_query( $conn , $sql );
			if( $rs ){
				echo "<h1>Xóa thành công ! </h1>";
			}else{
				echo "<h1>Xóa thất bại ! <h1>";
			}
		}
	?>

	<?php
      $id = $_GET["id"];
      $sql="SELECT * FROM category WHERE id = {$id}";
      $rs=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)) {
   ?>
	<div id="list-new">&raquo; <?php echo $row["name"]; ?></div>
  <?php } ?>
  <?php
  		$page=empty($_GET["page"]) ? 1 :($_GET["page"]);

               $totalposts=get_total_post();

               $startfrom= ($page -1) * $postpage; // bien chay 
               // tran chay tu 1, nhung limit trong ysal lai chay tu page 0 den -1
               $totalpage=round($totalposts/$postpage); // lay ve tong so trang
        $id1=$_GET["id"];
        $query = "SELECT posts.id,posts.excerpt,posts.content,posts.user_id,posts.create_date,posts.title,category.id AS cid,category.name FROM posts,category WHERE posts.cat_id=category.id AND category.id ='{$id1}' LIMIT $startfrom,$postpage";

        $rs1 = mysqli_query( $conn , $query );

        while( $row2= mysqli_fetch_array( $rs1 , MYSQLI_ASSOC ) ){
      ?>
      <div id="content">
	   <div class="content-img"><img src="img/logo.jpg"></div>
	   <div class="content-title">
	   <a href="single.php?id=<?php echo $row2["id"];?>"><b><?php echo $row2["title"]; ?></b></a>
	   </div>
	   <div class="content-edit">
	   		<a href="edit-posts.php?id=<?php echo $row2['id']; ?>"><button type="submit" id="button">Edit</button></a>

					<form method="post">
						<input type="hidden" name="delete" value="<?php echo $row2['id'] ?>" />

						<button type="submit" id="button" onclick="return confirm('bạn chắc chắn muốn xóa ? ');">Delete</button>
					</form>

	   </div><!--content-edit-->

	</div><!--content-->
	<?php }?>
    
</div><!--main-->
 <div style="clear:left;">


<?php require_once("tem/bottom.php"); ?>