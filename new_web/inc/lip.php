<?php 
	session_start();
	$conn=mysqli_connect("localhost","root","root","Tin9a5");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}else{
		die ("Không thể kết nối database"). mysqli_error($conn);
	}
	$postpage= 4;//so bai tren 1 trang
	function checklogin(){
		global $_SESSION;
		if (empty($_SESSION['user'])){
			echo"Đã login Đâu Mà vào";
			header("location:dangnhap.php");
		}
	}

	function get_total_post(){
		global $conn;
		$sql="SELECT COUNT(id) AS total FROM posts";
		$rs=mysqli_query($conn,$sql);
		$total=mysqli_fetch_array($rs,MYSQLI_ASSOC);
		return $total["total"];
	}


 ?>