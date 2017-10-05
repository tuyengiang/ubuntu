<!DOCTYPE html>
<html>
<head>
	<title>Trang Bảo Mật</title>
	<meta charset="utf-8"/>
	<style>
	*{
		font-family:"Segoe-UI";
		font-size:17px;
	}
		body{
			width:500px;
			margin:auto;
			background:#ddd;
		}
		h3{
			text-align:center;
			font-size:15px;
			border-radius:10px;
			background:green;
			color:white;
			width:100%;
			height:30px;
			bottom:0;
			line-height:30px;
		}
		#set{
			width:100%;
			height:150px;
			background:white;
			padding:40px 0;
			border-radius:10px;
			box-shadow:1px 1px 1px rgba(1,2,4,0.2);
		}
		input[type="password"]{
			border:none;
			border:1px solid #ddd;
			border-radius:10em;
			height:30px;
			width:200px;
			margin-top:5px;
			-moz-transition:all 0.5s;
			-webkit-transition:all 0.5s;
		}
		input[type="password"]:focus::-webkit-input-placeholder,input[type="password"]:valid::-webkit-input-placeholder{
			padding:0 10px;
		}
		input[type="password"]:focus{
			-moz-transition:all 0.5s;
			-webkit-transition:all 0.5s;
			width:220px;
		}
		button{
			width:100px;
			background:#DC143C;
			height:30px;
			border:none;
			color:white;
			font-weight:bold;
			margin-top:5px;
			border-radius:10px;
			-moz-transition:0.5s ease all;
			-webkit-transition:0.5s ease all;
		}
		button:hover{
			-moz-transition:0.5s ease all;
			-webkit-transition:0.5s ease all;
			background:green;
		}
		#note{
			width:100%;
			height:40px;
			margin-top:120px;
			background:#DC143C;
			color:white;
			border-radius:10px;
			font-weight:bold;
			line-height:40px;
		}
	</style>
</head>
<body>
<marquee id="note" behavior="Altermate;" direction="left"> &raquo; Chào mừng các bạn đến với trang web thông tin của mình &laquo;</marquee>
<?php
			if($_SERVER["REQUEST_METHOD"]=="POST"){
				$mk=$_POST["mk"];
				if($mk==NULL){
					echo "<h3>Mời Nhập Mật Khẩu</h3>";
				}else{
					if($mk=="2410"){
					header('location:home.php');
					}else{
						echo "<h3>Sai Mật Khẩu</h3>";
					}
				}
			}
		?>
<div id="set">
		<center><form action="" method="post">
			<table>
				<tr>
					<td><font color="red">&hearts; </font>Bảo Mật. Mời Nhập Password<font color="red"> &hearts;</font></td>
				</tr>
				<tr>
					<td><input type="password" name="mk" placeholder="Nhập Mật Khẩu"></td>
				</tr>
				<tr>
					<td><button type="submit">Xác Nhận</button></td>
				</tr>
				<tr>
					<td><br><br><center>Copyright Tuyển Giảng &trade;</center></td>
				</tr>
			</table>
		</form></center>
</div>
</body>
</html>