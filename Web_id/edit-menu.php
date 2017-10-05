<?php require_once("inc/lip.php"); ?>
<?php require_once("admin/header.php"); ?>
<?php require_once("tem/menu.php"); ?>
<?php require_once("tem/danhmuc.php") ?>
<div id="main">
	<div id="list-new">&raquo; Sửa Chuyên Mục</div>
	<?php
	   $id=$_GET["id"];
	   $sql="SELECT * FROM category WHERE id='{$id}'";
	   $query=mysqli_query($conn,$sql);
	   $rs1=mysqli_fetch_array($query,MYSQLI_ASSOC);
	   
	   if(empty($rs1)){
	   	  echo "Danh mục không tồn tại <br>";
	   }else{
	   	    if($_SERVER["REQUEST_METHOD"]=="POST"){
	   	    	$name=$_POST["name"];
	   	    	$desc=$_POST["de"];

	   	    	$sql= "UPDATE category SET name='{$name}', de='{$desc}' WHERE id='{$id}' ";
	   	    	$query=mysqli_query($conn,$sql);
	   	    if($query){
	   	    	echo "<h1>Cập nhật thành công</h1>";
	   	    }else{
	   	    	echo"<h1> Cập nhật thất bại</h1>";
	   	    }
	   	  }
	   	    
	    }
 ?>
 		<h1>Chỉnh sửa: <?php echo $rs1["name"]; ?></h1>
     <form action="" method="post">
       <table>
           <lable><h4>Tên Danh Mục</h4>
                <input type="text" name="name" placeholder="Nhập tên cần sửa" value="<?php echo $rs1["name"]; ?>" id="title">
            </lable>
            <lable><h4>Giới Thiệu</h4>
                <textarea name="de" placeholder="Chỉnh sửa giới thiệu"><?php echo $rs1["de"]; ?></textarea>
             </lable>
             <center>
                  <button type="submit">
                  <a href="menu.php">Về Q Lý</a></button>
                  <button type="submit">Cập Nhật</button>
             </center>
       </table>
  </form>
</div><!--main-->
<div style="clear:left;">

<?php require_once("tem/bottom.php") ?>
