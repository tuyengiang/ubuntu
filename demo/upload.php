<?php require_once('nic/connect.php');
	if($_SERVER['REQUEST_METHOD']=='POST'){
		if($_FILES['file']['size'] >( 4*1024*1024) ){
			echo " Bạn chỉ upload file < 4MB";
		}else{
			move_uploaded_file($_FILES['file']['tmp_name'],"upload/".$_FILES['file']['name']);
			echo "<script language='javascript'>";
			echo "alert('Upload Thành Công')";
			echo "</script>";
		}
	}

?>
<?php require_once("temp/header_ad.php"); ?>

<div id="page-login">
	<div id="page-title"><br>
		<a href="index.php"><div class="logo-title">B</div></a>
		<div class="text">Log Tin9a5</div>
	</div><!--page-title-->
	<div id="list" style="text-align:center;"> &hearts; Upload &hearts;</div>

	<form method="post" enctype="multipart/form-data" style="margin-top:100px;">
		<center><input type="file" name="file"><button type="submit">Upload</button></center>
	</form>

</div><!--main-->


