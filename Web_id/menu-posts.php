<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
	<div id="list-new">&raquo; Danh sách bài viết</div>
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
		$page=empty($_GET["page"]) ? 1 :($_GET["page"]);

               $totalposts=get_total_post();

               $startfrom= ($page -1) * $postpage; // bien chay 
               // tran chay tu 1, nhung limit trong ysal lai chay tu page 0 den -1
               $totalpage=round($totalposts/$postpage); // lay ve tong so trang

		$sql="SELECT * FROM  posts LIMIT $startfrom,$postpage";
		$query=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){ 
	?>
	<div id="content">
	   <div class="content-img"><img src="img/logo.jpg"></div>
	   <div class="content-title">
	   <a href="single.php?id=<?php echo $row["id"];?>"><b><?php echo $row["title"]; ?></b></a>
	   </div>
	   <div class="content-edit">
	   		<a href="edit-posts.php?id=<?php echo $row['id']; ?>"><button type="submit" id="button">Edit</button></a>

					<form method="post">
						<input type="hidden" name="delete" value="<?php echo $row['id'] ?>" />

						<button type="submit" id="button" onclick="return confirm('bạn chắc chắn muốn xóa ? ');">Delete</button>
					</form>

	   </div><!--content-edit-->

	</div><!--content-->
<?php } ?>
    <?php if($totalpage > 0) : ?>
		<div id="next">
				<ul>
	                <li>Next</li>
	                <?php for($i=0;$i<$totalpage;$i++): ?>
	                   <li><a class="<?php echo ($i+1) == $page ? "active" : "" ;?>" 
	                   href="menu-posts.php?page=<?php echo ($i+1); ?>"><?php echo $i+1;?></a>
	                <?php endfor; ?>
	              </ul>
		</div><!--next-->
 <?php endif; ?>
</div><!--main-->
    <div style="clear:left;">


<?php require_once("tem/bottom.php"); ?>