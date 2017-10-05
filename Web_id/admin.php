<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header_login.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc_login.php") ?>
<div id="main">
	<div id="title">
		<div class="title-img">
			<img src="img/logo.jpg">
		</div><!--ttle-img-->
		<div class="title-title">
			<?php
		      if(isset($_SESSION['user']) && $_SESSION['user']){
		      	  echo "<h3><font color='blue'>WElLCOME <//font><font color='red' class='b'>".$_SESSION['user']. "</font></h3>";
		      }else{
		      	 echo "<h3><h4 class='b'> Bạn chưa đăng nhập </h4></h3>";
		      }
		     ?>
		     <a href="logout.php"><button type="submit" style="margin-left:0;">Đăng Xuất</button></a>
		</div>
	</div><!--title-->
	<div id="main-hile">
			<div id="list-new">&raquo; Danh Sách Bài Viết </div>
			<?php
			 	$page=empty($_GET["page"]) ? 1 :($_GET["page"]);

		               $totalposts=get_total_post();

		               $startfrom= ($page -1) * $postpage; // bien chay 
		               // tran chay tu 1, nhung limit trong ysal lai chay tu page 0 den -1
		               $totalpage=round($totalposts/$postpage); // lay ve tong so trang
				$sql="SELECT * FROM posts LIMIT $startfrom,$postpage";
				$query=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) :
			?>
			<div id="content">
					<div class="content-img">
					  <img src="img/logo.jpg">
					 </div>
					 <div class="content-title">
					 	<a href="single.php?id=<?php echo $row['id']; ?>"><b><?php echo $row['title']; ?></b></a>
					 </div>
					 <div class="content-edit">
			   		<a href="edit-posts.php?id=<?php echo $row2['id']; ?>"><button type="submit" id="button">Edit</button></a>

							<form method="post">
								<input type="hidden" name="delete" value="<?php echo $row2['id'] ?>" />

								<button type="submit" id="button" onclick="return confirm('bạn chắc chắn muốn xóa ? ');">Delete</button>
							</form>

			   </div><!--content-edit-->

			</div><!--content-->


		<?php endwhile; ?>
		<?php if($totalpage > 0) : ?>
			<div id="next">
					<ul>
		                <li style="background:#DC143C; color:white; font-weight:bold; width:100px; border:1px solid #DC143C;">Page</li>
		                <?php for($i=0;$i<$totalpage;$i++): ?>
		                   <li><a class="<?php echo ($i+1) == $page ? "active" : "" ;?>" 
		                   href="admin.php?page=<?php echo ($i+1); ?>"><?php echo $i+1;?></a>
		                <?php endfor; ?>
		              </ul>
			</div><!--next-->
		    <?php endif; ?>	
 </div>
</div><!--main-->
<div style="clear:left;" >
<?php require_once("tem/bottom.php"); ?>