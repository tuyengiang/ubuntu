<?php require_once('nic/connect.php'); ?>
<?php require_once('temp/header_min.php');?>
<?php require_once('temp/menu.php'); ?>
<div id="main">
		<div id="list">&raquo; Bài viết</div>
		<?php
			$id=$_GET['id'];
			$page=empty($_GET["page"]) ? 1 :($_GET["page"]);

               $totalposts=get_total_post();

               $startfrom= ($page -1) * $postpage; // bien chay 
               // tran chay tu 1, nhung limit trong ysal lai chay tu page 0 den -1
               $totalpage=round($totalposts/$postpage); // lay ve tong so trang
			$sql="SELECT posts.id,posts.title,posts.content,posts.excerpt,posts.user,posts.datetime,posts.cat_id,category.id as cid ,category.title as name FROM posts,category WHERE posts.cat_id=category.id AND category.id='{$id}' ORDER BY id DESC LIMIT $startfrom,$postpage";

			$query=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) :
		?>
		<div class="main-content">
			<div class="content-img">
				<img src="img/anh.jpg">
			</div><!--content-img-->
			<div class="content-nd">

				<div class="content-title">
				    <a href="single.php?id=<?php echo $row['id']; ?>"><img src="img/icon/next.png" width="15px" height="15px"> <?php echo $row['title']; ?></a>
				</div><!--content-title-->

				<div class="content">
					<?php echo $row['excerpt']; ?>
					
				</div><!--content-->

				<div class="content-date">
					<font color="red" style="font-weight:bold;">Time: </font><?php echo $row['datetime'];?>
						 &hearts; 
					<font color="red" style="font-weight:bold;">You: </font><?php echo $row['user'];?>
					 	&hearts; 
					<font color="red" style="font-weight:bold;">Mục: </font><a href="category-menu.php?id=<?php echo $row['cid']; ?>"><?php echo $row['name'];?></a>

				</div><!--content-date-->

			</div><!--content-nd-->
			
		</div><!--main-->


			<div style="clear:left;"></div>
		<?php endwhile; ?>
</div><!--main-->
<!--Hien thi so trang-->
	
			<div id="page">
				<ul>
					<li><a href="#" class="active">&laquo; </a></li>
					<?php if($totalpage > 0) : ?>
		                <?php for($i=0;$i<$totalpage;$i++): ?>
		                   <li><a class="<?php echo ($i+1) == $page ? "active" : "" ;?>" 
		                   href="category-menu.php?page=<?php echo ($i+1); ?>"><?php echo $i+1;?></a>
		                <?php endfor; ?>
		              <?php endif; ?>	
		              <li><a href="#" class="active">&raquo; </a></li>
		        </ul>

			</div><!--next-->
<?php require_once("temp/bottom.php"); ?>