<!DOCTYPE html>
<html>
<head>
	<title>Trang quang cao</title>
	<meta charset="utf-8"/>
	<style>
		#popbackground{
			width:100%;
			height:100%;
			background:black;
			opacity:0.7;
			position:fixed;/*co dinh vo tri theo trinh duyet*/
		}
		#close{
			position:absolute;
			top:5px;
			right:40px;
			width:30px;
			height:30px;
			cursor:pointer;
			background:yellow;
			border-radius:50%;
		}
		#popinfo{
			width:600px;
			height:500px;
			background:white;
			padding:0.3em;
			border-radius:0.5em;
			margin:20px 50px;
		}
		#popcenter{
			position:absolute;
			top:5%;
		}
		#img{
			width:100%;
			height:400px;
			border:2px solid white;
		}
		#img img{
			width:99%;
			height:400px;
		}
		button{
			width:30%;
			height:40px;
			background:green;
			color:white;
			font-weight:bold;
			border:none;
			border-radius:0.5em;
			cursor:pointer;
			margin-top:20px;
		}

	</style>
	<script src="js/jquery.js"></script>
	<script src="js/quangcao.js"></script>
</head>
<body>
	<div id="popbackground">
		<div id="popcenter">
			<div id="popinfo">
				<img src="img/x.png" id="close">
				<div id="img">
					<img src="img/2.jpg">
					<center>
						Ô men. Anh Đã Vào :)))
					</center>
				</div>
			</div>

		</div>

	</div>
</body>
</html>