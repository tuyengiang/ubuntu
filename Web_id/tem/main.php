<div id="main">
		<div id="list-new">&raquo; Bài viết mới </div>
		<?php
               $page=empty($_GET["page"]) ? 1 :($_GET["page"]);

               $totalposts=get_total_post();

               $startfrom= ($page -1) * $postpage; // bien chay 
               // tran chay tu 1, nhung limit trong ysal lai chay tu page 0 den -1
               $totalpage=round($totalposts/$postpage); // lay ve tong so trang

               $sql="SELECT * FROM posts LIMIT $startfrom,$postpage";
               $query=mysqli_query($conn,$sql);

               while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)): ?>
		<div id="content">
			<div class="content-img">
				<img src="img/logo.jpg">
			</div><!--content-img-->
			<div class="content-title">
			   <a href="single.php?id=<?php echo $row["id"]; ?>"><b><font color="red" style="font-weight:bold;">&rsaquo; </font><?php echo $row["title"]; ?></b></a>
			</div><!--content-title-->
			<div class="content-excerpt">
			 <?php echo $row["excerpt"]; ?>
			</div><!--content-excerpt-->
		</div><!--content-->
	<?php endwhile; ?>
	<?php if($totalpage > 0) : ?>
	<div id="next">
			<ul>
                <li style="background:#DC143C; color:white; font-weight:bold; width:100px; border:1px solid #DC143C;">Page</li>
                <?php for($i=0;$i<$totalpage;$i++): ?>
                   <li><a class="<?php echo ($i+1) == $page ? "active" : "" ;?>" 
                   href="home.php?page=<?php echo ($i+1); ?>"><?php echo $i+1;?></a>
                <?php endfor; ?>
              </ul>
	</div><!--next-->
    <?php endif; ?>	
   </div><!--main-->
   
    <div style="clear:left;">

	<br>
	<!-- AMn hinh dien thoai -->
	<div id="danhmuc">
		<div id="list-new">&raquo; Danh Mục </div>
		<?php
                  $sql="SELECT * FROM category";
                  $query=mysqli_query($conn,$sql);
                  while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC)){
             ?>
                <div class="ic"><img src="img/yellow.png">
                <a href="list.php?id=<?php echo $rs["id"]; ?>"> <?php echo $rs["name"]; ?> </a></div>
                
           <?php } ?>
          
	</div><!--danhmuc-->
