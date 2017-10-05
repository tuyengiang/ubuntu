<div id="menu-con">
	  <!--tim-kiem-->
	  <div id="list">&raquo; Tìm Kiếm </div>
	  	<form method="post">
	  		<input type="search" name="search" placeholder="Bạn tìm gì nào !!!">
	  		<button type="submit">Search</button>
	  	</form>
	  <!--dang-nhap-->
	  <div id="list">&raquo; Đăng Nhập &hearts; Đăng Ký </div>
	  <div id="menu-login">
	  	 <ul>
	  	 	<li><a href="dangnhap.php">Đăng Nhập</a></li>
	  	 	<li><a href="dangky.php">Đăng Ký</a></li>

	  	 </ul>
	  </div>

	  <!-- Danh Mục đăng nhập -->
	  <div id="list">Quyền Của 
	  		<?php
		      if(isset($_SESSION['user']) && $_SESSION['user']){
		      	  echo "<font color='white' class='b'>".$_SESSION['user']. "</font>";
		      }else{
		      	 echo "<h4 class='b'> Bạn chưa đăng nhập </h4>";
		      }
		     ?> </div>
	   <li><a href="create-posts.php">Tạo Bài Viết</a></li>
	   <li><a href="create-menu.php">Tạp Chuyên Mục</a></li>
	   <li><a href="menu.php">Quản Lý Danh Mục</a></li>
	   
	  	<!--Danh muc-->
	  <div id="list">&raquo; Danh Mục Web</div>
 		<?php
                  $sql="SELECT * FROM category";
                  $query=mysqli_query($conn,$sql);
                  while($rs=mysqli_fetch_array($query,MYSQLI_ASSOC)){
             ?>
                <ul><li><a href="list.php?id=<?php echo $rs["id"]; ?>"> <?php echo $rs["name"]; ?> </a></li></ul>
                
           <?php } ?>
         <!--lien he-->
        <div id="list">&raquo; Liên Hệ </div>
        <p> <font color="red">Admin: </font> Nguyễn Tuyển Giảng</p>
        <p> <font color="red">SĐT: </font> 0965.565.742</p>
        <p> <font color="red">Email: </font> Nguyentuyengiangbn@gmail.com</p>
	</div><!--menu-con-->