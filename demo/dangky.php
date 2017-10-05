<?php require_once('nic/connect.php');
 	if($_SERVER["REQUEST_METHOD"]=="POST"){
 			$user=$_POST['user'];
 			$pass=$_POST['password'];
 			$ngay=$_POST['ngay'];
 			$thang=$_POST['thang'];
 			$nam=$_POST['nam'];
 			$email=$_POST['email'];
 			$femal=$_POST['femal'];

 			$sql="INSERT INTO login(user,password,ngay,thang,nam,email,femal)
 				VALUES('{$user}','{$pass}','{$ngay}','{$thang}','{$nam}','{$email}','{$femal}')
 			";
 			$query=mysqli_query($conn,$sql);
 			if($query){
					echo "<script type='text/javascript'>";
					echo "alert('Đăng Ký Thành Công')";
					echo "</script>";
			}else{
					echo "<script type='text/javascript'>";
					echo "alert('Đăng Ký Thất Bại')";
					echo "</script>";
			}
 	}



?>
<?php require_once('temp/header_ad.php');?>
<div id="page-register">
	<a href="index.php"><div id="page-title"><br>
		<div class="logo-title">B</div>
		<div class="text">Log Tin9a5</div>
	</div></a><!--page-title-->
	<div id="page-body">
		<div id="list" style="text-align:center;">&hearts; Đăng Ký &hearts;</div>
		<form method="post">
			<center><input type="text" name="user" placeholder="Nhập Username" required=""/>

			<input type="password" name="password" placeholder="Nhập Password" required=""/>

			<input type="email" name="email" placeholder="Nhập email" required="" /><br>
			</center>
			<label>

				<select name="ngay">
					<option value="ngay">Ngày</option>
					<?php
						for($i=1;$i<=31;$i++){
							echo "<option value='$i'>".$i."</option>";
						} 
					?>
				</select>
				<select name="thang">
					<option value="thang">Tháng</option>
					<?php
						for($i=1;$i<=12;$i++){
							echo "<option value='$i'>".$i."</option>";
						} 
					?>
				</select>
				<select name="nam">
					<option value="nam">Năm</option>
					<?php
						for($i=1970;$i<=DATE('Y');$i++){
							echo "<option value='$i'>".$i."</option>";
						} 
					?>
				</select>
			</label><br>
			<label> 
			<select name="femal">
					<option>Giới Tính</option>
					<option value="1">Nam</option>
					<option value="0">Nữ</option>
			</select>
			</label>

			<br>
			<center>
				<button type="submit">Đăng Ký</button>
				<a href="dangnhap.php"><button type="submit">Đăng Nhập</button></a>
			</center>
		</form>
	</div><!--page-body-->

</div><!--page-login-->