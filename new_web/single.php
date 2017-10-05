<?php require_once("temp/ad/header_single.php");?>
<?php require_once("temp/menu.php");?>

<div id="main">

	<div id="main-left">

		<?php
		
			$id=$_GET["id"];
			$sql="SELECT * FROM posts WHERE id='{$id}'";
			$query=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):
		?>
		<div id="list">
			<div id="list-title">Xem Bài Viết</div>
		</div>
		<h1 style="margin-bottom:20px;"><?php echo $row['title']; ?></h1>
		<?php echo $row["content"]; ?>

	<?php endwhile;?>
	</div><!--main-right-->


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