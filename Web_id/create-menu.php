<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
	<div id="list-new">&raquo; Tạo Chuyên Mục Mới </div>
	<?php 
     if( $_SERVER["REQUEST_METHOD"] == "POST" ){
      
 			$name=$_POST["name"];
 			$desc=$_POST["de"];
            $sql="INSERT INTO category (name,de)
				 VALUES('{$name}','{$desc}')";
		    $rs=mysqli_query($conn,$sql);
		    if($rs){
		    	echo "<h1>Thêm Thành Công</h1>";
		    }else{
		    	echo "<h1>Thêm Thất Bại</h1>";
		    }
      }
 ?>
   <form action="" method="post">
   	  <lable><h4>Nhập tên danh mục:</h4>
             <input type="text" name="name" placeholder="Nhập Tên" id="title">
   	  </lable>
   	  <lable><h4>Phần giới thiệu</h4>
             <textarea name="de" placeholder="Giới Thiệu"></textarea>
   	  </lable>
   	  <center>
            <button type="submit" id="buttom-new"><a href="menu.php">Quản Lý</button>
            <button type="submit" id="buttom-new">Tạo</button>
   	  </center>

   </form>
</div>
</div><!--main-->
<div style="clear:left;">


<?php require_once("tem/bottom.php"); ?>