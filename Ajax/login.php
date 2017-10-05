<?php
	if($_SERVER["REQUEST_METHOD"]=="POST"){
		$user=$_POST["user"];
		$pass=$_POST["pass"];
		if($user==NULL && $pass==NULL){
			echo "Moi Nhap User Va Pass";
		}else{
			if($user=="admin" && $pass=="24101997"){
				echo "WelCome Admin";
			}else{
				echo "Chu la ai";
			}
		}
	}
?>