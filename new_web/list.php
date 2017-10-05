<?php require_once("temp/ad/header_list.php");?>
<?php require_once("temp/menu.php");?>
<div id="main">
	<div id="main-left">
	<div id="list">
			<div id="list-title">New</div>
	</div>
	<?php 
		$id=$_GET['id'];
		$page=empty($_GET["page"]) ? 1 :($_GET["page"]);

             	 $totalposts=get_total_post();

               	$startfrom= ($page -1) * $postpage; // bien chay 
              	 // tran chay tu 1, nhung limit trong ysal lai chay tu page 0 den -1
               	$totalpage=round($totalposts/$postpage); // lay ve tong so trang

		$sql="SELECT posts.id,posts.title as ten,posts.content ,posts.cat_id,posts.datetime,category.id as id,category.title FROM posts,category WHERE category.id=posts.cat_id AND category.id='{$id}' ORDER BY posts.id DESC LIMIT $startfrom,$postpage ";
		$query=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):

	?>
		
	<div class="main-content">
			<div class="main-img">
				<img src="img/anh.jpg" title="Hình Ảnh" alt="Đây có ảnh">
			</div><!--main-img-->
			<div class="main-left-content">
					<div class="main-title">
					<a href="single.php?id=<?php echo $row['id'];?>" title="<?php echo $row['ten'];?>"><?php echo $row['ten'];?></a>
					</div><!--main-title-->
					<div class="main-node">
						<font color="red">Date: </font><?php echo $row["datetime"]; ?><br></div>
			</div><!--main-left-content-->

		</div><!--main-content-->
		<?php endwhile;?>

		<!--trang viết-->
		<div id="page">
				<ul>
					<li><a href="#">&laquo; </a></li>
					<?php if($totalpage > 0) : ?>
		                <?php for($i=0;$i<$totalpage;$i++): ?>
		                   <li><a class="<?php echo ($i+1) == $page ? "active" : "" ;?>" 
		                   href="list.php?page=<?php echo ($i+1); ?>"><?php echo $i+1;?></a>
		                <?php endfor; ?>
		              <?php endif; ?>	
		              <li><a href="#">&raquo; </a></li>
		        </ul>

			</div><!--next--> 
	</div><!--main-left-->

	<div id="main-right">
		<div id="search">
			<div id="list">
				<div id="list-title">Tìm Kiếm</div>
			</div>
			<div class="search-back">
				<form method="post" action="search.php">
					<input type="search" name="search" placeholder="Tìm Kiếm">
				</form>
			</div><!--search-back-->
			<div style="clear:left;"></div>
		</div><!--search-->
			<div style="clear:left;"></div>

		<div id="category">
			<div id="list">
				<div id="list-title">Chuyên Mục</div>
			</div>
			<ul>
				<?php
					$sql="SELECT * FROM category";
					$query=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) :
				?>
				<li><a href="list.php?id=<?php echo $row['id']; ?>">
						<?php echo $row['title']; ?>
					</a>
				</li>
			<?php endwhile;?>
			</ul>
		</div><!--category-->
	</div><!--main-right-->

</div><!--main-->
<div style="clear:left;"></div>


<?php require_once("temp/bottom.php");?>