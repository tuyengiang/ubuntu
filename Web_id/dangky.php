<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
	<div id="list-new">&raquo; Đăng Ký</div>
	<?php require_once("inc/lip.php"); 

     if($_SERVER["REQUEST_METHOD"]=="POST"){
     	$user=$_POST["user"];
     	$pass=$_POST["pass"];
     	$ten=$_POST["ten"];
     	$hoten=$_POST["hoten"];
     	$email=$_POST["email"];
     	$date=$_POST["brith"];
     	$gioitinh=$_POST["femal"];

     	$sql="INSERT INTO user (ten,hoten,user,pass,email,brith,femal)
             VALUES('{$ten}','{$hoten}','{$user}','{$pass}','{$email}','{$date}','{$gioitinh}')
     	";
     	$query=mysqli_query($conn,$sql);

     	if($query){
     		echo "<h1> Đăng ký thành công </h1>";
     	}else{
     		echo "<h1> Đăng ký thất bại </h1>";
     	}

     }
?>
		<table>
			<form method="post" action="">
				<label><h4>Tên</h4>
						<input type="text" name="ten" placeholder="Nhập Tên" id="name">

						<input type="text" name="hoten" placeholder="Nhập Ho" id="name"></td>
				</label>
				<lable><h4>Nhập Username</h4>
						<input type="text" name="user" placeholder="Nhập tên tài khoản"></td>
				<lable>
				<lable><h4>Nhập Password</h4>
						<input type="password" name="pass" placeholder="Nhập Password"></td>
				</lable>
				<lable><h4>Nhập Lại Password</h4>
						<input type="password" name="pass" placeholder="Nhập lại password"></td>
				</lable>
				<lable><h4>Nhập Email</h4>
						<input type="text" name="email" placeholder="Nhập email@gmail.com"></td>
				</lable>
				<lable><h4>Brithday</h4>
						<input type="date" name="brith">
				</lable>
				<lable><h4>Giới Tính</h4>
				
						<select name="femal">
						    <option>Giới Tính</option>
							<option value="1">Nam</option>
							<option value="0">Nữ</option>
						</select>
				</lable>
				<br>
				<center><button type="submit">Đăng Ký</button></center>
			</form>
		</table>
</div><!--main-->
<div style="clear:left;">


<?php require_once("tem/bottom.php"); ?>