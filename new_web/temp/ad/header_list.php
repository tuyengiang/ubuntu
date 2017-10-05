<?php require_once("inc/lip.php");?>
<!DOCTYPE html>
<html>
<head>
	<?php
		
			$id=$_GET["id"];
			$sql="SELECT * FROM category WHERE id='{$id}'";
			$query=mysqli_query($conn,$sql);
			while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)):

		
	?>
	<title><?php echo $row["title"]; ?></title>
	<?php endwhile;?>

	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/main2.css">
	<script src="js/jquery.js"></script>
	<script src="js/slide.js"></script>
</head>
<body>
	<div id="header">
		<div id="text-logo">Web Design</div><!--text-logo-->
		<div id="text-note">Code Thứ Gì Đó Tuyệt Vời</div><!--text-note-->
	</div><!--header-->