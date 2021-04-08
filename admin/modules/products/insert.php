<?php 
	if (isset($_POST['btn_insert'])) {
		$name = $_POST['name'];
		$price = $_POST['price'];
		$color = $_POST['color'];
		$status = $_POST['status'];
		$type = $_POST['type'];
		$year = $_POST['year'];
		$size = $_POST['size'];
		$trademark = $_POST['trademark'];
		$description = $_POST['editor'];


		// $folder = "../publish/images/";
		// $file = $_FILES['image_product'];
		// $path = $folder.$file['name'];
		// move_uploaded_file($file['tmp_name'],$path);

		$sql = "INSERT INTO product VALUES(null,'$name','$price','$color','$status','$description','$year','$type','$size','$trademark')";
		
		$result = mysqli_query($conn,$sql);
		$id  =  mysqli_insert_id($conn);
		if ($result == false) {
			echo "ERROR :".mysqli_error($conn);
		}
		else{
			header("location:index.php?module=products&action=insert_image2&id=$id");
		}
	}
?>	
<?php 
	$tittle = "Thêm Sản Phẩm";
	require_once("layout/header.php");
 ?>
 	<style type="text/css">
 		h2{
 			text-align: center;
 			border-bottom: 3px double #DBB5B5;
 		}

 		.list_products form{
 			
 		}
 		.list_products{
 			width: 100%;
 			height: 1050px;
 			
 		}
 		.list_products input{
 			margin-left: 50px;

 			padding-top: 5px;
 			padding-bottom: 5px;
 		}
 		.div_form_insert_products{
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
 			bottom: 450px;
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
 	<h2>Thêm Sản Phẩm</h2><br>
 	<div class="div_form_insert_products"><br>
 	<form method="POST" enctype="multipart/form-data">
 		<label id="lb_name">
 			<i style="color: black;font-size: 20px;" class="fa fa-font"></i> Tên sản phẩm :
 			<input style="height: 40px;" type="text" name="name" placeholder="Tên Sản Phẩm" required>
 		</label>
 		<label id="lb_price">
 			<i style="color: black;font-size: 20px;" class="fa fa-money"></i> Giá sản phẩm :
 			<input style="height: 40px;" type="number" name="price" placeholder="Giá Sản Phẩm" min="1" step="any" required>
 		</label>
 		<br><br>
 		<label id="lb_color">
 			<i class="fa fa-tachometer" style="color: black;font-size: 20px;"></i> Màu sản phẩm :
 			<select class="sl_insert" name="color" style="padding: 10px 10px;margin-left: 45px;width: 140px;">
 				<option value="0">Đen</option>
 				<option value="1">Xanh Dương</option>
 				<option value="2">Đỏ</option>
 				<option value="3">Vàng</option>
 				<option value="4">Nâu</option>
 				<option value="5">Cam</option>
 				<option value="6">Xanh Lá Cây</option>
 				<option value="7">Trắng</option>
 				<option value="8">Tím</option>
 				<option value="9">Bạc</option>
 				<option value="10">Hồng</option>
 				<option value="11">Ngẫu Nghiên</option>
 			</select>
 		</label>
 		<label id="lb_status">
 			<i  class="fa fa-spinner" style="font-size: 20px;"></i> Tình Trạng:
 			<select name="status" style="padding: 10px 10px;margin-left: 75px;">
 				<option value="1">Còn Hàng</option>
 				<option value="0">Hết Hàng</option>
 				<option value="2">Hàng Sắp về</option>
 				<option value="-1">Không Kinh Doanh</option>
 			</select>
 		</label>
 		<br><br>
 		<label id="lb_type">
 			<i class="fa fa-window-restore" style="font-size: 20px;"></i> Loại:
 			<select class="sl_insert" name="type" style="padding: 10px 10px;margin-left: 115px;">
 				<?php 
 					$sql = "SELECT id,name_type FROM type";
 					$result = mysqli_query($conn,$sql);
 					if ($result == false) {
 						echo "ERROR :".mysqli_error($conn);
 					}
 					elseif (mysqli_num_rows($result)  > 0) {
 						foreach ($result as $row) {
 							$id_type_insert = $row['id'];
 							echo "<option value='$id_type_insert'>";
 								echo $row['name_type'];
 							echo "</option>";
 						}
 					}
 				 ?>
 			</select>
 		</label>
 		
 		<label id="lb_year">
 			<i class="fa fa-calendar" style="font-size: 20px;"></i>	Năm Sản Xuất :
 			<input style="padding: 10px 10px;margin-left: 50px;" type="number" name="year" placeholder="VD :2021">
 		</label>
 		<br><br>
 		<label id="lb_size">
 			<i class="fa fa-tasks" style="font-size: 20px;"></i>  Kích Cỡ :	
 			<select class="sl_insert" name="size" style="padding: 10px 10px;margin-left: 85px;">
 				<?php 
 					$sql = "SELECT id,name_size FROM size";
 					$result = mysqli_query($conn,$sql);
 					if ($result == false) {
 						echo "ERROR :".mysqli_error($conn);
 					}
 					elseif (mysqli_num_rows($result)  > 0) {
 						foreach ($result as $row) {
 							$id_size_insert = $row['id'];
 							echo "<option value='$id_size_insert'>";
 								echo $row['name_size'];
 							echo "</option>";
 						}
 					}
 				 ?>
 			</select>
 		</label>
 		<label id="lb_trademark">
 			<i class="fa fa-linode" style="font-size: 20px;"></i>Thương Hiệu :
 			<select name="trademark" style="padding: 10px 10px;margin-left: 55px;">
 				<?php 
 					$sql = "SELECT id,name_trademark FROM trademark";
 					$result = mysqli_query($conn,$sql);
 					if ($result == false) {
 						echo "ERROR :".mysqli_error($conn);
 					}
 					elseif (mysqli_num_rows($result)  > 0) {
 						foreach ($result as $row) {
 							$id_trademark_insert = $row['id'];
 							echo "<option value='$id_trademark_insert'>";
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
 			<i class="fa fa-picture-o" style="font-size: 20px;"></i> Ảnh sản Phẩm :<br><br>
 			<img style="margin-left: 300px;" src="image/logo5.jpg" width="220px;" height="180px;" id="preview_image"><br>
 			<input style="margin-left: 300px;border: 0px;" onchange="change_image()" type="file" name="image_product" accept="image/*" id="file_image" required>
 		</label> -->
 		<br>
 		<br>
 		<br>
 		<label id="lb_description">
 			<span  id="sp_1_products"><i class="fa fa-comments" style="font-size: 20px;"></i>Mô tả:</span><br>	
 			<textarea class="ckeditor" name="editor">
 				<p><strong>Chất Liệu :</strong></p>
 			</textarea>
 		</label>
 		<br><br>
 		<button type="submit" name="btn_insert">Thêm Sản Phẩm</button>
 	</form>
 	</div>
 </div>
<!--  <script type="text/javascript">
 	function change_image(){
 		let vImage = document.getElementById('preview_image');
 		let vFile = document.getElementById('file_image');
 		let url = URL.createObjectURL(vFile.files[0]);
 		vImage.src = url;
 	}
 </script> -->
 <?php 
	require_once("layout/footer.php");
 ?>