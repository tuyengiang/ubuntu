<div id="main">
	 <div id="main-left">
		<div id="list">
			<div id="list-title">Bài Viết Mới</div>
		</div>
		<?php
			$page=empty($_GET["page"]) ? 1 :($_GET["page"]);

               $totalposts=get_total_post();

               $startfrom= ($page -1) * $postpage; // bien chay 
               // tran chay tu 1, nhung limit trong ysal lai chay tu page 0 den -1
               $totalpage=round($totalposts/$postpage); // lay ve tong so trang

			$sql="SELECT * FROM posts ORDER BY id DESC LIMIT $startfrom,$postpage";
			$query=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
		?>
		<div class="main-content">
			<div class="main-img">
				<img src="img/anh.jpg" title="Hình Ảnh" alt="Đây có ảnh">
			</div><!--main-img-->
			<div class="main-left-content">
					<div class="main-title">
					<a href="single.php?id=<?php echo $row['id'];?>" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a>
					</div><!--main-title-->
					<div class="main-node">
						<font color="red">Date: </font><?php echo $row["datetime"]; ?>
					</div><!--main-node-->
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
			                   href="index.php?page=<?php echo ($i+1); ?>"><?php echo $i+1;?></a>
		               	 <?php endfor; ?>
		              <?php endif; ?>	
		              <li><a href="#">&raquo; </a></li>
		        </ul>

		</div><!--next-->
		
		<div style="clear:left;"></div>
		</div><!--main-left-->
		<div id="main-right">
			<div id="list">
				<div id="list-title">Chuyên Mục</div>
			</div>

			<ul>
			<?php
				$sql="SELECT * FROM category";
				$query=mysqli_query($conn,$sql);
				while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC)): 
			?>
				<li><a href="list.php?id=<?php echo $rs['id'];?>" title="<?php echo $rs['title'];?>"><?php echo $rs['title']; ?></a>
			<?php endwhile;?>
			</ul>

		</div><!--main-right-->

		<div style="clear:left;"></div>
	</div><!--main-->