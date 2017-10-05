<?php require_once("inc/lip.php"); ?>
<?php 
   	if(isset($_SESSION["user"])){
   		unset($_SESSION["user"]); // xoa tai khoan
   	}
   	header('location:home.php');

?>