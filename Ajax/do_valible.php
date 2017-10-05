<?php
	//lay thong tin usser va email
	$user=isset($_POST['username']) ? $_POST['username']:flase;
	$email=isset($_POST['email']) ? $_POST['email']:false;

	//ket noi database
	$conn=mysqli_connect("localhost","root","root","test");
	if($conn){
		mysqli_set_charset($conn,"utf8");
	}else{
		die("Chua ket noi database").mysqli_error($conn);
	}
	// khai bao bien loi
	$error=array(
		'error'=>'success'.
		'username'=>"";
		'email'=>""
	);

	//kiemtra ten dang nhap

	if($user){
		$sql="SELECT count(*) FROM member WHERE username=addslashes($user)";
		$query=mysqli_query($conn,$sql);
		if($query){
			$row=mysqli_fetch_array($conn,MYSQLI_ASSOC);
			if((int)$row['count']>0){
				$error['username']="User đã tồn tại";
			}
		}else{
			die('{error:"bad_request"}');
		}
	}
	if($email){
		$sql="SELECT count(*) FROM member WHERE username=addslashes($email)";
		$query=mysqli_query($conn,$sql);
		if($query){
			$row=mysqli_fetch_array($conn,MYSQLI_ASSOC);
			if((int)$row['count']>0){
				$error['email']="Email đã tồn tại";
			}
		}else{
			die('{error:"bad_request"}');
		}
	}

	//them vao database

	$sql1="INSERT INTO member (username,email)
		VALUES('{$user}','{$email}');
	";


	//tra ve cho client
	die(josn_encode($error));

?>