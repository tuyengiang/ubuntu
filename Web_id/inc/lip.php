<?php 
session_start();
// Chứa các cấu hình + functions hay dùng 
	$conn = mysqli_connect( "localhost" , "root" , "root" , "Tin9a5" ); // dia chi truy cap / user name / password / ten db 
	if( $conn ){
		mysqli_set_charset($conn ,  "utf8");
	}else{
		die( "Có lỗi xảy ra khi kết nối vào csdl : " . mysqli_error( $conn ) );
	}
	
$postpage= 6;//so bai tren 1 trang



function checklogin(){
	global $_SESSION;
	if (empty($_SESSION['username'])){
		echo"da login ma doi vao";
		header("location:login.php");
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