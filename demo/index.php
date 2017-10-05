<?php require_once("nic/connect.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Tin9a5 - Diễn dần công nghệ thông tin</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/css/main.css"/>

	<meat name="viewport" content="width=device-width,initial-scale=1"/>
</head>
<body>
	<?php require_once("temp/menu.php");?>

	<div id="main">
		<div id="list">&raquo; Câu Hỏi Diễn Đàn</div>
		<?php
			$page=empty($_GET["page"]) ? 1 :($_GET["page"]);

               $totalposts=get_total_post();

               $startfrom= ($page -1) * $postpage; // bien chay 
               // tran chay tu 1, nhung limit trong ysal lai chay tu page 0 den -1
               $totalpage=round($totalposts/$postpage); // lay ve tong so trang

			$sql="SELECT posts.id,posts.title,posts.content,posts.excerpt,posts.user,posts.datetime,posts.cat_id,category.id as cid ,category.title as name FROM posts,category WHERE posts.cat_id=category.id ORDER BY id DESC LIMIT $startfrom,$postpage";
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
		                   href="index.php?page=<?php echo ($i+1); ?>"><?php echo $i+1;?></a>
		                <?php endfor; ?>
		              <?php endif; ?>	
		              <li><a href="#" class="active">&raquo; </a></li>
		        </ul>

			</div><!--next-->

    <div id="new-list">
    	<div id="new-left">
    		<div id="list">&raquo; Video Dạy Học </div>
    		<table>
    			<tr>
    				<td><img src="img/icon/next.png" width="15px" height="15px"> <a href="#">Học Html Cơ Bản - part1</a></td>
    				<td>Html cơ bản</td>
    			</tr>
    			<tr>
    				<td><img src="img/icon/next.png" width="15px" height="15px"> <a href="#">Học Html Cơ Bản - part1</a></td>
    				<td>Html cơ bản</td>
    			</tr>
    			<tr>
    				<td><img src="img/icon/next.png" width="15px" height="15px"> <a href="#">Học Html Cơ Bản - part1</a></td>
    				<td>Html cơ bản</td>
    			</tr>
    			<tr>
    				<td><img src="img/icon/next.png" width="15px" height="15px"> <a href="#">Học Html Cơ Bản - part1</a></td>
    				<td>Html cơ bản</td>
    			</tr>
    			<tr>
    				<td><img src="img/icon/next.png" width="15px" height="15px"> <a hrfe="#">Học Html Cơ Bản - part1</a></td>
    				<td>Html cơ bản</td>
    			</tr>
    			<tr>
    				<td><img src="img/icon/next.png" width="15px" height="15px"> <a hrfe="#">Học Html Cơ Bản - part1</a></td>
    				<td>Html cơ bản</td>
    			</tr>
    			<tr>
    				<td><img src="img/icon/next.png" width="15px" height="15px"> <a hrfe="#">Học Html Cơ Bản - part1</a></td>
    				<td>Html cơ bản</td>
    			</tr>
    			<tr>
    				<td><img src="img/icon/next.png" width="15px" height="15px"> <a hrfe="#">Học Html Cơ Bản - part1</a></td>
    				<td>Html cơ bản</td>
    			</tr>
    		</table>
    	</div><!--new-left-->

    	<div id="new-right">
    		<div id="list">&raquo; Chuyên Mục Blog </div>
    		<div class="new-right-left">
    			<div id="list-1">List Category</div>
    			<?php
    				$sql1="SELECT * FROM category";
    				$query=mysqli_query($conn,$sql1);
    				while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC)) : 
    			?>
    				<li><a href="category-menu.php?id=<?php echo $rs['id']; ?>"><font color="red">&rsaquo;</font> <?php echo $rs['title']; ?></a></li>

    			<?php endwhile; ?>
    		</div><!--new-right-left-->

    		<div class="new-right-right">
    			<div id="list-1"> Tạo Blog New</div>
    			<li><a href="create-posts.php"><font color="red">&rsaquo;</font> Tạo Bài Viết Mới</a></li>
    			<li><a href="create-menu.php"><font color="red">&rsaquo;</font> Tạo Category</a></li>
    		</div><!--new-right-right-->
    		
    	</div><!--new-right-->
	<div style="clear:left;"></div>

    </div><!--new-list-->
	<div id="bottom">
	<div style="clear:left;"></div>
		<h2> Blog Tin9a5</h2>
		
	</div><!--bottom-->

</body>
</html>