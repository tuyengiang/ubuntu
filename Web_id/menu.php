<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
	<div id="list-new">&raquo; Danh Sách Chuyên Mục</div>
	<?php 
  if(isset($_POST["delete"])  ){
		$id = $_POST["delete"];
		$sql = "DELETE FROM category WHERE id = {$id}";
		$rs = mysqli_query( $conn, $sql );
		if( $rs ){
			echo "<h1>Xóa thành công ! </h1>";
		}else{
			echo "<h1>Xóa thất bại ! <h1>";
		}
	}
 
 ?>
 <table>
          <caption>Quản Lý Danh Mục</caption>
          <thead>
          	  <th>Id</th>
          	  <th>Tên Thư Mục</th>
          	  <th>Giới Thiệu</th>
          	  <th>Tùy Chọn</th>
          </thead>
          <tbody>
            <?php $query="SELECT * FROM category";
                  $sql=mysqli_query($conn,$query);
                  while($row=mysqli_fetch_array($sql,MYSQLI_ASSOC)){
             ?>
             <tr>
             	<td><?php echo $row["id"]; ?></td>
             	<td><?php echo $row["name"]; ?></td>
             	<td><?php echo $row["de"]; ?></td>
             	<td>
             		<a href="edit-menu.php?id=<?php echo $row['id']; ?>"><button type="submit" id="button">Edit</button></a>
					<form method="post">
						<input type="hidden" name="delete" value="<?php echo $row['id'] ?>" />
						<button type="submit" id="button" onclick="return confirm('bạn chắc chắn muốn xóa ? ');" >Delete</button>
				   </form>
             	</td>
             </tr>
            <?php } ?>
          </tbody>
	</table>
	<center>
	   <form>
	      <button type="submit" id="buttom-new">
					<a href="create-menu.php">Tạo Mới</a>
		  </button>
	   </form>
	 </center>
</div>
</div><!--main-->
    <div style="clear:left;">

<?php require_once("tem/bottom.php") ?>

