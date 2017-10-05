<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
	<div id="list-new">&raquo; Đăng Nhập </div>
	<?php
		if(isset($_POST["user"])){
   				   $user=$_POST["user"];
                  $pass=$_POST["pass"];
   				if($user==NULL || $pass==NULL){
   					echo "<h1>Mời bạn nhập đầy đủ thông tin đăng nhập</h1>";
   				}else{
   					$sql="SELECT user,pass FROM user WHERE user='{$user}' AND pass='{$pass}'";
   					$query=mysqli_query($conn,$sql);
   					$row=mysqli_fetch_array($query,MYSQLI_ASSOC);

   					if($row==0){
   						echo "<h1>Tài khoản sai or mật khẩu không đúng</h1>";
   					}else{
   						$_SESSION['user']=$user;
   						header('location:login.php');
   					}

   					if($user=="admin" && $pass=="2410"){
   						$_SESSION['user']=$user;
   						header('location:admin.php');
   					}
   				}
   			}
	?>
	<form method="post" action="">
		<table>
			<lable><h4>Tên Đăng Nhập </h4>
			 	<input type="text" placeholder="Nhập tên đăng nhập" name="user">
			</lable>
			<lable><h4>Nhập Password</h4>
			 	<input type="password" placeholder="Nhập password" name="pass">
			</lable><br><br>
				<button type="submit">Đăng Nhập</button>
			<lable><br><br>
		     <a href="#"><font color="#DC143C" style="margin-left:10px;">Quên Mật Khẩu</font></a>
		     </lable>
		</table>
	</form>
</div><!--main-->