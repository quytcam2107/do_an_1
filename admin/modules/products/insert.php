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
		$description = $_POST['description'];


		$folder = "../publish/images/";
		$file = $_FILES['image_product'];
		$path = $folder.$file['name'];
		move_uploaded_file($file['tmp_name'],$path);

		$sql = "INSERT INTO product VALUES(null,'$name','$price','$color','$status','$path','$description','$year','$type','$size','$trademark','1')";
		$result = mysqli_query($conn,$sql);
		if ($result == false) {
			echo "ERROR :".mysqli_error($conn);
		}
		else{
			header("location:index.php?module=products&action=list");
		}
	}
?>	
<?php 
	$tittle = "Thêm Thương Hiệu";
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
 	<h2>Thêm Thương Hiệu</h2><br>
 	<div class="div_form_insert_products"><br>
 	<form method="POST" enctype="multipart/form-data">
 		<label id="lb_name">
 			<i style="color: black;font-size: 20px;" class="fab fa-product-hunt"></i> Tên sản phẩm :
 			<input style="height: 40px;" type="text" name="name" placeholder="Tên Sản Phẩm" required>
 		</label>
 		<label id="lb_price">
 			<i style="color: black;font-size: 20px;" class="fas fa-money-check-alt"></i> Giá sản phẩm :
 			<input style="height: 40px;" type="number" name="price" placeholder="Giá Sản Phẩm" min="1" step="any" required>
 		</label>
 		<br><br>
 		<label id="lb_color">
 			<i class="fas fa-palette" style="color: black;font-size: 20px;"></i> Màu sản phẩm :
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
 			</select>
 		</label>
 		<label id="lb_status">
 			<i  class="fas fa-surprise" style="font-size: 20px;"></i> Tình Trạng:
 			<select name="status" style="padding: 10px 10px;margin-left: 75px;">
 				<option value="1">Còn Hàng</option>
 				<option value="0">Hết Hàng</option>
 				<option value="2">Hàng Sắp về</option>
 				<option value="-1">Không Kinh Doanh</option>
 			</select>
 		</label>
 		<br><br>
 		<label id="lb_type">
 			<i class="fab fa-tumblr-square" style="font-size: 20px;"></i> Loại:
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
 			<i class="fas fa-calendar-minus" style="font-size: 20px;"></i>	Năm Sản Xuất :
 			<input style="padding: 10px 10px;margin-left: 50px;" type="number" name="year" placeholder="VD :2021">
 		</label>
 		<br><br>
 		<label id="lb_size">
 			<i class="fas fa-text-width" style="font-size: 20px;"></i>  Kích Cỡ :	
 			<select class="sl_insert" name="size" style="padding: 10px 10px;margin-left: 85px;">
 				<option value="1">S</option>
 				<option value="2">M</option>
 				<option value="3">L</option>
 				<option value="4">XL</option>
 				<option value="5">XXL</option>
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
 		<label id="lb_image">
 			<i class="far fa-images" style="font-size: 20px;"></i>Ảnh sản Phẩm :<br><br>
 			<img style="margin-left: 300px;" src="image/logo5.jpg" width="220px;" height="180px;" id="preview_image"><br>
 			<input style="margin-left: 300px;border: 0px;" onchange="change_image()" type="file" name="image_product" accept="image/*" id="file_image" required>
 		</label>
 		
 		<br>
		<hr>
 		<br>
 		<label id="lb_description">
 			<span  id="sp_1_products"><i class="fas fa-comment-medical" style="font-size: 20px;"></i>Mô tả:</span><br>	
 			<textarea name="description" style="margin-left: 50px;" cols="95" rows="10"></textarea>
 		</label>
 		<br><br>
 		<button type="submit" name="btn_insert">Cập Nhật</button>
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