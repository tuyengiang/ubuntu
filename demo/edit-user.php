<?php require_once("nic/connect.php");
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$id=$_GET['id'];
		$sql="SELECT * FROM login WHERE id='{$id}'";
		$query=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
		if($row){
			echo "<script type='text/javascript'>";
			echo "alert('User Không tồn tại')";
			echo "</script>";
		}else{
			$hoten=$_POST['hoten'];
			$ten=$_POST['ten'];
			$sdt=$_POST['sdt'];
			$que=$_POST['que'];

			$sql1="UPDATE login SET hoten='{$hoten}',ten='{$ten}',que='{$que}',sdt='{$sdt}'";
			$query1=mysqli_query($conn,$sql1);
			if($query1){
				echo "<script type='text/javascript'>";
				echo "alert('Cập Nhật Thành Công')";
				echo "</script>";
			}else{
				echo "<script type='text/javascript'>";
				echo "alert('Cập Nhật Thất Bại')";
				echo "</script>";
			}

		}
	}


 ?>
<?php require_once('temp/header_min.php'); ?>
<?php require_once('temp/menu.php'); ?>

<div id="main">
		<div id="list" style="text-align:center;">&hearts; Cập Nhật Thông Tin &hearts;</div>
		<form method="post">
			<label>Nhập Họ Đệm
				<input type="text" name="hoten" placeholder="
				Nhập họ đệm">

			</label>
			<label>Nhập Tên
				<input type="text" name="ten" placeholder="
				Nhập tên của bạn">

			</label>
			<label>Quê Quán
				<input type="text" name="que" placeholder="
				Nhập Quê (Tỉnh , Thành Phố )">
			</label>
			<label>Nhập Số Điện Thoại
				<input type="text" name="sdt" placeholder="
				Nhập số diện thoại">

			</label>
			<center>
 		<button type="submit">Cập Nhật</button>
 		</center>

		</form>

</div><!--main-->
<?php require_once('temp/bottom.php'); ?>