<div id="header">
		<div id="logo-web">
			<img src="img/logo.jpg">
		</div><!--logo-web-->
		<div id="menu">
			<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="#">HỌC HTML</a></li>
				<li><a href="#">HỌC CSS</a></li>
				<li><a href="#">HỌC JAVACRIP</a></li>
				<li><a href="#">LIÊN HỆ</a></li>
			</ul>
		</div><!--menu-->
		<div id="map">
			<div class="map-title"><?php
				if(isset($_SESSION["user"]) && $_SESSION["user"]=="admin"){
					echo "<font color='blue' style='font-weight:bold;border-left:dotted 2px #DC143C;border-top:dotted 2px #DC143C;border-bottom:dotted 2px #DC143C;'>WELLCOME </font>"."<a href='admin.php'><font color='#DC143C' style='font-weight:bold;border-right:dotted 2px #DC143C;border-top:dotted 2px #DC143C;border-bottom:dotted 2px #DC143C;'>".$_SESSION["user"]."</font></a>";
				}else{
					if(isset($_SESSION["user"]) && $_SESSION["user"]){
						echo "<font color='blue' style='font-weight:bold;border-left:dotted 2px #DC143C;border-top:dotted 2px #DC143C;border-bottom:dotted 2px #DC143C;'>WELLCOME </font>"."<a href='admin.php'><font color='#DC143C' style='font-weight:bold;border-right:dotted 2px #DC143C;border-top:dotted 2px #DC143C;border-bottom:dotted 2px #DC143C;'>".$_SESSION["user"]."</font></a>";
					}
			  }
			?></div>
		</div><!--map-->
	</div><!--header-->
	<!--man hinh 600 -->
	<div id="header-menu">
	  	<ul>
				<li><a href="home.php">HOME</a></li>
				<li><a href="#">HỌC HTML</a></li>
				<li><a href="#">HỌC CSS</a></li>
				<li><a href="#">HỌC JAVACRIP</a></li>
				<li><a href="#">LIÊN HỆ</a></li>
			</ul>
	</div>
	 