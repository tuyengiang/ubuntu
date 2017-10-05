<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
	require_once('nic/connect.php');
	if(empty($search)){
		echo "<script type='text/javascript'>";
		echo "alert('Mời Nhập Cái Cần Tìm')";
		echo "</script>";
	}else{
		$search=$_GET['search'];
		$sql="SELECT * FROM posts WHERE title '%$search'";
		$query=mysqli_query($conn,$sql);
		$num = mysqli_num_rows($sql);

		if($num>0 && $search!=''){
			echo "Ket qua tra ve co ". $num . "Bài Viết ";
		}
	}
	


}
?>