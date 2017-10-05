<?php require_once("inc/lip.php"); ?>
<?php require_once("tem/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php"); ?>
<div id="main">
	<?php 
		$id=$_GET["id"];
		$sql="select * from posts where id='{$id}'";
		$query=mysqli_query($conn,$sql);
		while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) :
	?>
	<div id="list-new"> <a href="index.php"><font color="white">Home</font></a> &rsaquo; <?php echo $row["title"]; ?></div>

	<div class="single">
		<c style="margin:5px 5px;"><?php echo $row["content"]; ?></c>
	</div><!--single-->
	<?php endwhile; ?>
	<div id="list-new">&raquo; Bài Viết Cùng Chuyên Mục</div>
	<?php
		$page=empty($_GET["page"]) ? 1 :($_GET["page"]);

               $totalposts=get_total_post();

               $startfrom= ($page -1) * $postpage; // bien chay 
               // tran chay tu 1, nhung limit trong ysal lai chay tu page 0 den -1
               $totalpage=round($totalposts/$postpage); // lay ve tong so trang

		$sql1="select * from posts LIMIT $startfrom,$postpage";

		$query1=mysqli_query($conn,$sql1);
		while($row1=mysqli_fetch_array($query1,MYSQLI_ASSOC)) :
	?>
	<div id="menu-con">
	   <li><a href="single.php?id=<?php echo $row1["id"]; ?>"><?php echo $row1["title"]; ?></a></li>
	</div><!--menu-con-->

	<?php endwhile; ?>
</div><!--main-->
<div style="clear:left;">
<?php require_once("tem/bottom.php"); ?>