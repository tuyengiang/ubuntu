<!DOCTYPE html>
<html>
<head>
	<title>Slide anh</title>
	<meta charset="utf-8"/>
	<style>
		
		#slider{
			width:500px;
			height:300px;
			margin:auto;
			margin-top:50px;
			overflow:hidden;
		}
		#slider ul {
			list-style-type:none;
			float:left;
			width:1500px;
		}
		#slider ul li{
			width:500px;
			height:300px;
		}
		#slider ul li img{
			width:500px;
			height:300px;

		}
	</style>
</head>
<body>

	<div id="slider">
		<ul>
			<li><a href="#"><img src="img/1.jpg"></a></li>
			<li><a href="#"><img src="img/2.jpg"></a></li>
			<li><a href="#"><img src="img/3.jpg"></a></li>
			<li><a href="#"><img src="img/2.jpg"></a></li>
		</ul>
	</div><!--slider-->
<script src="js/jquery.js"></script>
<script src="js/slideimg.js"></script>
</body>
</html>