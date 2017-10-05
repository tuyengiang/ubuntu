<?php require_once("inc/lib.php");?>

<!DOCTYPE html>
<html>
<head>
	<title>Trang Chủ</title>
	<meta charet="utf-8"/>
	<!--style-->
	<link rel="stylesheet" type="text/css" href="js/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/awesome/css/font-awesome.min.css">
	<!--jquery-->
	<script src="js/jquery.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/main.js"></script>

</head>
<body>
	<div id="header">
		<div id="menu-top">
			<ul>
				<li><a href="index.php" class="active">
					<i class="fa fa-windows"></i>
				</a></li>
				<li><a href="#" class="menu-1">CODE WEB</a></li>
				<li><a href="#">VIDEO</a></li>
				<li><a href="#">LIÊN HỆ</a></li>

			</ul>

		</div><!--menu-top-->
		<div id="search">
			<form>
				<button id="tim-kiem"><i class="fa fa-search fa-2x"></i></button>
			</form>
		</div><!--search-->

	</div><!--header-->

	<div style="clear:left;"></div>
	<div id="slider-top">
		<ul class="bxslider">
			<li><a href="#"><img src="img/002.png"></a>
				<p><a href="#">Công Nghệ</a></p>
			</li>
			<li><a href="#"><img src="img/1.jpg"></a>
				<p><a href="#">Công Nghệ</a></p>
			</li>
			<li><a href="#"><img src="img/2.jpg"></a>
				<p><a href="#">Công Nghệ</a></p>
			</li>
			<li><a href="#"><img src="img/3.jpg"></a>
				<p><a href="#">Công Nghệ</a></p>
			</li>
			<li><a href="#"><img src="img/4.jpg"></a>
				<p><a href="#">Công Nghệ</a></p>
			</li>
		</ul>

	</div><!--slider-top-->
	<div style="clear:left;"></div>

	<div id="main">
		<div id="main-left">
		     <div id="main-left-1">
			<div id="title">BÀI MƠÍ<hr>
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
			<div class="main-left-content">
				<div class="main-left-content-img">
					<img src="img/002.png">
				</div><!--main-left-content-img-->
				<div class="main-left-content-title">
					<a href="single.php?id=<?php echo $row["id"]?>" title="<?php echo $row['title']?>"><?php echo $row['title']?></a>
				</div><!--main-left-content-title-->
				<div class="main-left-content-excerpt">
					<?php echo $row['excerpt'];?>
				</div><!--main-left-content-excerpt-->

			</div><!--main-left-content-->
			<?php endwhile; ?>
			<div style="clear:left"></div>
			<center><div class="button"><a href="#">Xem Thêm</a></div></center>

		    </div><!--main-left1-->
		    <div id="main-left-2">
		    	<div id="title">Video Học Tập<hr></div>
		    	<div class="main-left-2-list">
		    		<div class="main-left-2-list-img">
		    			<iframe width="100%" height="450" src="https://www.youtube.com/embed/i920BvFJILM" frameborder="0" allowfullscreen></iframe>
		    		</div><!--main-left2-list-img-->
		    		<div class="main-left-2-list-title">
		    			<a href="#">Html Cơ Bản Dành Cho Người Mới Học</a>
		    		</div><!--main-left2-list-title-->

		    	</div><!--main-left-2-list-->
		    	<div class="main-left-2-content">
		    		<div class="main-left-2-content-img">
		    			<iframe width="100%" height="150" src="https://www.youtube.com/embed/i920BvFJILM" frameborder="0" allowfullscreen></iframe>
		    		</div><!--main-left-2-content-img-->
		    		<div class="main-left-2-content-title">
		    			Video Huong Dan
		    		</div><!--main-left-2-content-title-->

		    	</div><!--main-left-2-content-->
		    	<div class="main-left-2-content">
		    		<div class="main-left-2-content-img">
		    			<iframe width="100%" height="150" src="https://www.youtube.com/embed/i920BvFJILM" frameborder="0" allowfullscreen></iframe>
		    		</div><!--main-left-2-content-img-->
		    		<div class="main-left-2-content-title">
		    			Video Huong Dan
		    		</div><!--main-left-2-content-title-->

		    	</div><!--main-left-2-content-->
		    	<div class="main-left-2-content">
		    		<div class="main-left-2-content-img">
		    			<iframe width="100%" height="130" src="https://www.youtube.com/embed/i920BvFJILM" frameborder="0" allowfullscreen></iframe>
		    		</div><!--main-left-2-content-img-->
		    		<div class="main-left-2-content-title">
		    			Video Huong Dan
		    		</div><!--main-left-2-content-title-->

		    	</div><!--main-left-2-content-->

		    </div><!--main-left-2-->
		</div><!--main-leftt-->


		<div id="main-right">
			<div id="title">BÀI HOT NHẤT THÁNG<hr>
			</div>

		</div><!--main-right-->


	</div><!--main-->
	<div style="clear:left;"></div>

	<div id="bottom">
		<h3><i class="fa fa-user"> </i> Tuyển Giảng</h3>
		<hr style="background:#ddd;width:100%;">
		<br>
		<h3>Copyright 2017 &copy; Wordpress</h3>
	</div><!--bottom-->
</body>
</html>