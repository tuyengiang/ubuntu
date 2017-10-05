<?php require_once("nic/connect.php");
	
		if(isset($_POST["delete"])  ){
			$id = $_POST["delete"];
			$sql = "DELETE FROM posts WHERE id = {$id}";
			$rs = mysqli_query( $conn , $sql );
			if($rs){
				echo "<script type='text/javascript'>";
				echo "alert('Xóa Thành Công')";
				echo "</script>";
			}else{
				echo "<script type='text/javascript'>";
				echo "alert('Xóa Không Thành Công')";
				echo "</script>";
			}

		}
	
?>
<?php require_once("temp/header_min.php");?>
<?php require_once("temp/menu.php");?>
<div id="main">
<div id="list" style="text-align:center;">&hearts; Bài Viết Của Thành Viên &hearts;</div>
	<table>
		<thead>
			<th>ID</th>
			<th>NAME</th>
			<th>NỘI DUNG</th>
			<th>ND TÓM TẮT</th>
			<th>USER</th>
			<th>MỤC</th>
			<th>TIME</th>
			<th>XÓA</th>
			<th>SỬA</th>
		</thead>
		<tbody>
		<?php
			$sql="SELECT posts.id,posts.title,posts.content,posts.excerpt,posts.user,posts.datetime,posts.cat_id,category.id as cid ,category.title as name FROM posts,category WHERE category.id=posts.cat_id";
			$query=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)) :

		?>
			<tr>
				<td><?php echo $row['id'];?></td>
				<td><?php echo $row['title'];?></td>
				<td><?php echo $row['content'];?></td>
				<td><?php echo $row['excerpt'];?></td>
				<td><?php echo $row['user'];?></td>
				<td><?php echo $row['name'];?></td>
				<td><?php echo $row['datetime'];?></td>
				<td>
					<form method="post">
						<input type="hidden" name="delete" value="<?php echo $row['id'] ?>" />
						<button type="submit" id="button" onclick="return confirm('bạn chắc chắn muốn xóa ? ');">Delete</button>
					</form>
				</td>
				<td>
				<a href="edit-posts.php?id=<?php echo $row['id'];?>"><button type="submit" id="button">Edit</button></a></td>
			</tr>
		<?php endwhile;?>
		</tbody>
	</table>
	<center><a href="create-posts.php"><button type="submit">Viết Bài Mới</button></a></center>

</div><!--main-->
<?php require_once("temp/bottom.php");?>

