<?php require_once('nic/connect.php');  ?>
<?php	
	if(isset($_SESSION['user'])){
		unset($_SESSION['user']);
		header('location:index.php');
	}

?>