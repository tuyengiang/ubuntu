<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
	<div id="list-new">&raquo; Sửa Tài Khoản</div>
	<?php 
	require_once("inc/lip.php");
	$id=$_GET["id"];
	$sql="SELECT * FROM user WHERE id='{$id}'";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query,MYSALI_ASSOC);
	if(empty($row)){
		echo "<h1> Tài khoàn không tồn tại</h1>";
	}else{
		if($_SERVER["REQUEST_MEHTOD"]=="POST"){
			$ten=$_POST["ten"];
			$hoten=$_POST["hoten"];
			$email=$_POST["email"];
			$sql1="UPDATE user SET ten='{$ten}',hoten='{$hoten}',email='{$email}'";
			$query=mysqli_query($conn,$sql1);
			if($query){
				echo "<h1> Cập nhật thành công</h1>";
			}else{
				echo "<h1> Cập nhật thất bại </h1>";
			}
		}
	}

?>
<div class="login_img">
			<img src="img/anh.jpg">
		</div><!--login_img-->
		<div class="login_edit">
			<form method="post" action="">
				<table>
					<lable><h4>Họ Tên</h4>
						<input type="text" name="hoten" value="<?php echo $row["hoten"]; ?>">
					</lable>
					<lable><h4>Tên</h4>
						<input type="text" name="ten" value="<?php echo $row["ten"]; ?>">
					</lable>
					<lable><h4>Email</h4>
						<input type="text" name="hoten" value="<?php echo $row["email"]; ?>">
					</lable>
					<button type="submit">Cập Nhật</button>
				</table>
			</form>
		</div><!--login-edit-->
</div><!--main-->