<?php

	echo $fname=$_GET['filename'];

	//mo file

	$file=fopen('upload/'.$fname, "rb");

	
	header("Content-Type: image/jpeg,image/png,image/gif,application/octet-stream");

	header("content-Disposition: attachment,inline; filename='".$fname."'");


	// doc file va hien thi khung dowload ra man hinh
	fpassthru($file);
	
	fclose($file);

	

?>