<?php 
	$id = $name = $price = $color = $status = $image = $description = $year = $type = $size = $trademark = "";
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM product WHERE id ='$id'";
		$result = mysqli_query($conn,$sql);
		if ($result == false){
			echo "ERROR ".mysqli_error($conn);
		}else if(mysqli_num_rows($result) ==1){
			$row = mysqli_fetch_assoc($result);
			$name = $row['name'];
			$price = $row['price'];
			$color = $row['color'];
			$status = $row['status'];
			$description = $row['description'];
			$year = $row['year_manufacturing'];
			$type = $row['id_type'];
			$size = $row['id_size'];
			$trademark = $row['id_trademark'];
		}
		else{
			header("Location:index.php?module=products&action=list");
		}
	}

	else{
		header("location:index.php?module=products&action=list");
	}
	if (isset($_POST['btn_edit'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];
		$color = $_POST['color'];
		$status = $_POST['status'];
		$type = $_POST['type'];
		$year = $_POST['year'];
		$size = $_POST['size'];
		$trademark = $_POST['trademark'];
		$description = $_POST['editor'];

		// if ($_FILES['image_product']['size'] > 0) {
		// 	$folder = "../publish/images/";
		// 	$file = $_FILES['image_product'];
		// 	$path = $folder.$file['name'];
		// 	move_uploaded_file($file['tmp_name'],$path);

		// }
		
		$sql = "UPDATE product SET name = '$name',price = '$price',color='$color',status = '$status',description = '$description',year_manufacturing = '$year',id_type='$type',id_size = '$size',id_trademark = '$trademark' WHERE id = '$id' ";
		$result = mysqli_query($conn,$sql);
		if ($result == false) {
			echo "ERROR :".mysqli_error($conn);
		}
		else{
			header("location:index.php?module=products&action=edit_img2&id=$id");
		}
	}
	
?>	
<?php 
	$tittle = "Sửa Sản Phẩm";
	require_once("layout/header.php");
 ?>
 	<style type="text/css">
 		h2{
 			text-align: center;
 			border-bottom: 3px double #DBB5B5;
 		}
 		.list_products form{
 			
 		}
 		.list_products input{
 			margin-left: 50px;

 			padding-top: 5px;
 			padding-bottom: 5px;
 		}
 		.div_form_edit_products{
 			width: 850px;
 			height: 108vh;
 			background: #D9F0F5;
 			margin: auto;
 			/*border: 1px solid black;*/
 			border-radius: 10px;
 			position: relative;
 		}
 		button{
 			margin-left: 350px;
 			border: 0px;
 			background: #B5B1B3;
 			border-radius: 5px;
 			padding-top: 5px;
 			padding-bottom: 5px;
 		}
 		button:hover{
 			background: white;
 		}
 		button:active{
 			background: white;
 			color: red;
 			font-weight: bolder;
 		}
 		#lb_name{
 			
 		}
 		#lb_price{
 			margin-left: 120px;
 		}
 		#lb_color{
 			margin-left: 0px;
 		}
 		#lb_status{
 			margin-left: 120px;
 		}
 		#lb_type{
 			
 		}
 		#lb_size{
 			
 		}
 		#lb_year{
 			margin-left: 122px;
 		}
 		#lb_trademark{
 			margin-left: 205px;
 		}
 		#lb_description{
 			margin-top: 200px;
 		}
 		#lb_image{
 			
 		}
 		#sp_1_products{
 			position: absolute;
 			bottom: 220px;

 			left:350px;
 		}
 		img {
		  display: block;
		  max-width:230px;
		  max-height:125px;
		  width: auto;
		  height: auto;
		  border: 1px solid black;
		}
		select{
			border-radius: 5px;
			border: 1px solid pink;
			background: #7B7B7B;
			color: white;

		}
		option{
			background: #D5D1D1;
			color: black;

		}
		input{
			border-radius: 2px;
			border: 1px solid pink;
		}
 	</style>
 <div class="list_products">
 	<h2>Sửa Sản Phẩm</h2><br>
 	<div class="div_form_edit_products"><br>
 	<form method="POST" enctype="multipart/form-data">
 		<label id="lb_name">
 			<i style="color: black;font-size: 20px;" class="fab fa-product-hunt"></i> Tên sản phẩm :
 			<input style="height: 40px;" type="text" name="name" placeholder="Tên Sản Phẩm" value="<?php echo $name ?>" required>
 		</label>
 		<label id="lb_price">
 			<i style="color: black;font-size: 20px;" class="fas fa-money-check-alt"></i> Giá sản phẩm :
 			<input style="height: 40px;" type="number" name="price" placeholder="Giá Sản Phẩm" min="1" step="any" value="<?php echo $price ?>" required>
 		</label>
 		<br><br>
 		<label id="lb_color">
 			<i class="fas fa-palette" style="color: black;font-size: 20px;"></i> Màu sản phẩm :
 			<select class="sl_edit" name="color" style="padding: 10px 10px;margin-left: 45px;width: 140px;">
 				<option value="0" <?php if($color == 0) echo "selected"; ?>>Đen</option>
 				<option value="1" <?php if($color == 1) echo "selected"; ?>>Xanh Dương</option>
 				<option value="2" <?php if($color == 2) echo "selected"; ?>>Đỏ</option>
 				<option value="3" <?php if($color == 3) echo "selected"; ?>>Vàng</option>
 				<option value="4" <?php if($color == 4) echo "selected"; ?>>Nâu</option>
 				<option value="5" <?php if($color == 5) echo "selected"; ?>>Cam</option>
 				<option value="6" <?php if($color == 6) echo "selected"; ?>>Xanh Lá Cây</option>
 				<option value="7" <?php if($color == 7) echo "selected"; ?>>Trắng</option>
 				<option value="8" <?php if($color == 8) echo "selected"; ?>>Tím</option>
 				<option value="9" <?php if($color == 9) echo "selected"; ?>>Bạc</option>
 				<option value="9" <?php if($color == 10) echo "selected"; ?>>Hồng</option>
 				<option value="9" <?php if($color == 11) echo "selected"; ?>>Ngẫu Nhiên</option>
 			</select>
 		</label>
 		<label id="lb_status">
 			<i  class="fas fa-surprise" style="font-size: 20px;"></i> Tình Trạng:
 			<select name="status" style="padding: 10px 10px;margin-left: 75px;">
 				<option value="1" <?php if($status == 1) echo "selected"; ?>>Còn Hàng</option>
 				<option value="0" <?php if($status == 0) echo "selected"; ?>>Hết Hàng</option>
 				<option value="2" <?php if($status == 2) echo "selected"; ?>>Hàng Sắp về</option>
 				<option value="-1" <?php if($status == -1) echo "selected"; ?>>Không Kinh Doanh</option>
 			</select>
 		</label>
 		<br><br>
 		<label id="lb_type">
 			<i class="fab fa-tumblr-square" style="font-size: 20px;"></i> Loại:
 			<select class="sl_edit" name="type" style="padding: 10px 10px;margin-left: 115px;">
 				<?php 
 					$sql = "SELECT id,name_type FROM type";
 					$result = mysqli_query($conn,$sql);
 					if ($result == false) {
 						echo "ERROR :".mysqli_error($conn);
 					}
 					elseif (mysqli_num_rows($result)  > 0) {
 						foreach ($result as $row) {
 							$id_type_edit = $row['id'];
 							if($id_type_edit == $type) $selected = "selected";
 							else $selected = "";
 							echo "<option value='$id_type_edit' $selected>";
 								echo $row['name_type'];
 							echo "</option>";
 						}
 					}
 				 ?>
 			</select>
 		</label>
 		
 		<label id="lb_year">
 			<i class="fas fa-calendar-minus" style="font-size: 20px;"></i>	Năm Sản Xuất :
 			<input style="padding: 10px 10px;margin-left: 50px;" type="number" name="year" placeholder="VD :2021" value="<?php echo $year ?>">
 		</label>
 		<br><br>
 		<label id="lb_size">
 			<i class="fas fa-text-width" style="font-size: 20px;"></i>  Kích Cỡ :	
 			<select class="sl_edit" name="size" style="padding: 10px 10px;margin-left: 85px;">
 				<?php 
 					$sql = "SELECT id,name_size FROM size";
 					$result = mysqli_query($conn,$sql);
 					if ($result == false) {
 						echo "ERROR :".mysqli_error($conn);
 					}
 					elseif (mysqli_num_rows($result)  > 0) {
 						foreach ($result as $row) {
 							$id_trademark_edit = $row['id'];
 							if($id_trademark_edit == $trademark) $selected = "selected";
 							else $selected = "";
 							echo "<option value='$id_trademark_edit' $selected>";
 								echo $row['name_size'];
 							echo "</option>";
 						}
 					}
 				 ?>
 			</select>
 		</label>
 		<label id="lb_trademark">
 			<i class="fas fa-registered i1" style="font-size: 20px;"></i>Thương Hiệu :
 			<select name="trademark" style="padding: 10px 10px;margin-left: 55px;">
 				<?php 
 					$sql = "SELECT id,name_trademark FROM trademark";
 					$result = mysqli_query($conn,$sql);
 					if ($result == false) {
 						echo "ERROR :".mysqli_error($conn);
 					}
 					elseif (mysqli_num_rows($result)  > 0) {
 						foreach ($result as $row) {
 							$id_trademark_edit = $row['id'];
 							if($id_trademark_edit == $trademark) $selected = "selected";
 							else $selected = "";
 							echo "<option value='$id_trademark_edit' $selected>";
 								echo $row['name_trademark'];
 							echo "</option>";
 						}
 					}
 				 ?>
 			</select>
 		</label><br>
 		<br>
 		<hr>
 		<!-- <label id="lb_image">
 			<i class="far fa-images" style="font-size: 20px;"></i>Ảnh sản Phẩm :<br><br>
 			<img style="margin-left: 300px;" src="<?php echo $path ?>" width="220px;" height="180px;" id="preview_image"><br>
 			<input style="margin-left: 300px;border: 0px;" onchange="change_image()" type="file" name="image_product" accept="image/*" id="file_image" >
 		</label> -->
 		
 		<br>
		<hr>
 		<br>
 		<label id="lb_description">
 			<span  id="sp_1_products"><i class="fas fa-comment-medical" style="font-size: 20px;"></i>Mô tả:</span><br>	
 			<textarea class="ckeditor" name="editor">
 				<?php 
 					echo $description;
 				 ?>
 			</textarea>
 			</textarea>
 		</label>
 		<br><br>
 		<button type="submit" name="btn_edit">Cập Nhật</button>
 	</form>
 	</div>
 </div>
 <script type="text/javascript">
 	function change_image(){
 		let vImage = document.getElementById('preview_image');
 		let vFile = document.getElementById('file_image');
 		let url = URL.createObjectURL(vFile.files[0]);
 		vImage.src = url;
 	}
 </script>
 <?php 
	require_once("layout/footer.php");
 ?>
 <?php 
