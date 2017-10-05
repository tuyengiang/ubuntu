<?php require_once('nic/connect.php');?>
<?php require_once('temp/header_ad.php');?>
<div id="page-login">
	<a href="index.php"><div id="page-title"><br>
		<div class="logo-title">B</div>
		<div class="text">Log Tin9a5</div>
	</div></a><!--page-title-->
	<div id="page-body">
		
		<div id="list" style="text-align:center;">&hearts; Đăng Nhập &hearts;</div>

		<?php
			if(isset($_POST['ok'])){
				$user=$_POST['user'];
				$pass=$_POST['password'];

				if($user==NULL || $pass==NULL){
					echo "<h4> &hearts; Mời Nhập Username & Password &hearts;</h4>";
				}else{
					$sql="SELECT * FROM login WHERE user='{$user}' AND password='{$pass}'";
					$query=mysqli_query($conn,$sql);
					$row=mysqli_fetch_array($query,MYSQLI_ASSOC);
					if($user!='user' && $pass!='password'){
						echo "<h4> &hearts; Username & Password Không Đúng &hearts;</h4>";
					}else{
						$_SESSION["user"]=$user;
						header("location:thanhvien.php");
					}
					if($user=="admin" && $pass=="123456a@"){
						$_SESSION["user"]=$user;
						header('location:admin.php');
					}
				}
			}

		?>

		<center><form method="post" action="">
			<input type="text" name="user" placeholder="Nhập Username" required=""/>
			<input type="password" name="password" placeholder="Nhập Password" required="" /><br>
			<button type="submit" name="ok">Đăng Nhập</button>
		</form></center>

		<center><ul>
			<li><a href="quenmk.php" title="Quên Mật Khẩu">Quên Mật Khẩu</a></li>
			<li><a href="dangky.php" title="Đăng Ký">Đăng Ký</a></li>
		</ul></center>
	</div><!--page-body-->

</div><!--page-login-->