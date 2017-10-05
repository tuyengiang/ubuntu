<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
	<div id="list-new">&raquo; Danh Sách Thành Viên</div>
	<?php
		if(isset($_POST["delete"])){
			$id=$_POST["delete"];
			$sql="DELETE FROM user WHERE id='{$id}'";
			$query=mysqli_query($conn,$sql);
			if($query){
				echo "<h1> Xóa Tài Khoản Thành Công </h1>";
			}else{
				echo "<h1> Xóa Tài Khoản Thất Bại</h1>";
			}

		}
	?>

	<form action="" method="post">
	<table>
		<thead>
			<th>ID</th>
			<th>TÊN HIỂN THỊ</th>
			<th>HỌ</th>
			<th>TÊN USER</th>
			<th>PASSWORD</th>
			<th>EMAIL</th>
			<th>DATE</th>
			<th>FEMAL</th>
			<th>TÙY CHỌN</th>
		</thead>
		<tbody>
			<?php
			  require_once("inc/lip.php");
				$sql="SELECT * FROM user";
				$rs=mysqli_query($conn,$sql);
				while($row=mysqli_fetch_array($rs,MYSQLI_ASSOC)){
			?>
			<tr>
				<td><?php echo $row["id"];?></td>
				<td><?php echo $row["ten"];?></td>
				<td><?php echo $row["hoten"];?></td>
				<td><?php echo $row["user"];?></td>
				<td><?php echo $row["pass"];?></td>
				<td><?php echo $row["email"];?></td>
				<td><?php echo $row["brith"];?></td>
				<td><?php if($row["femal"]==1){
						echo "Nam";
					}else{
						echo "Nữ";
					}
				?>
				</td>
				<td>
             		<a href="edit-login.php?id=<?php echo $row['id']; ?>"><button type="submit" id="button">Edit</button></a>
					<form method="post">
						<input type="hidden" name="delete" value="<?php echo $row['id'] ?>" />
						<button type="submit" onclick="return confirm('bạn chắc chắn muốn xóa ? ');" id="button">Delete</button>
				   </form>
             	</td>

			</tr>
		<?php }?>
		</tbody>
	</table>
	</form>
</div><!--main-->
<div style="clear:left;">


<?php require_once("tem/bottom.php"); ?>
