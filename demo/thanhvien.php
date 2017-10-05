<?php require_once('nic/connect.php'); 
	checklogin();
?>
<?php require_once('temp/header_admin.php'); ?>
<?php require_once('temp/menu_admin.php'); ?>
<div id="thongtin">
		<div id="thongtin-img">
				<img src="img/anh.jpg">
		</div>
		<div id="thongtin-user">
				<?php
				      if(isset($_SESSION['user']) && $_SESSION['user']){
				      	  echo "<h3><font color='blue'>WElLCOME <//font><font color='red' class='b'>".$_SESSION['user']. "</font></h3>";
				      }else{
				      	 echo "<h3><h4 class='b'> Bạn chưa đăng nhập </h4></h3>";
				      }
				     ?>
				     <a href="logout.php"><button type="submit" style="margin-left:0;" id="button">Đăng Xuất</button></a>
				     <a href="edit-user.php"><button type="submit" style="margin-left:0;" id="button">Thêm</button></a>
		   </div>
		</div>
</div><!--thontin-->

