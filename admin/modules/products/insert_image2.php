<?php 
	if (isset($_GET['id'])) {
		$id  = $_GET['id'];
	}
	if (isset($_POST['btn'])) {
		$folder = "../publish/images/";
		$file = $_FILES['img_1'];
		$path = $folder.$file['name'];
		move_uploaded_file($file['tmp_name'],$path);
		$sql = "INSERT INTO image_product VALUES('$id','$path')";
		$result = mysqlI_query($conn,$sql);
		if ($result == false) {
			echo "ERROR".mysqli_error($conn);
		}



		if ($_FILES['img_2']['size'] > 0) {
			$folder = "../publish/images/";
			$file = $_FILES['img_2'];
			$path = $folder.$file['name'];
			move_uploaded_file($file['tmp_name'],$path);
			$sql = "INSERT INTO image_product VALUES('$id','$path')";
			$result = mysqlI_query($conn,$sql);
		}
		if ($_FILES['img_3']['size'] > 0) {
			$folder = "../publish/images/";
			$file = $_FILES['img_3'];
			$path = $folder.$file['name'];
			move_uploaded_file($file['tmp_name'],$path);
			$sql = "INSERT INTO image_product VALUES('$id','$path')";
			$result = mysqlI_query($conn,$sql);
		}
		if ($_FILES['img_4']['size'] > 0) {
			$folder = "../publish/images/";
			$file = $_FILES['img_4'];
			$path = $folder.$file['name'];
			move_uploaded_file($file['tmp_name'],$path);
			$sql = "INSERT INTO image_product VALUES('$id','$path')";
			$result = mysqlI_query($conn,$sql);
		}
		if ($_FILES['img_5']['size'] > 0) {
			$folder = "../publish/images/";
			$file = $_FILES['img_5'];
			$path = $folder.$file['name'];
			move_uploaded_file($file['tmp_name'],$path);
			$sql = "INSERT INTO image_product VALUES('$id','$path')";
			$result = mysqlI_query($conn,$sql);
		}
		header("location:index.php?module=products&action=list");
	}
 ?>
<?php 
	$tittle = "Thêm hình ảnh";
	require_once 'layout/header.php';
 ?>
<div>
	<form method="POST" enctype="multipart/form-data">
		<img src="../publish/images/original.png" width="100px" id="preview_image">
		<input type="file" name="img_1" accept="image/*" id="file_image" onchange="change_image()"><br>
		<img src="../publish/images/original.png" width="100px" id="preview_image2">
		<input type="file" name="img_2" accept="image/*" id="file_image2" onchange="change_image2()"><br>
		<img src="../publish/images/original.png" width="100px" id="preview_image3">
		<input type="file" name="img_3" accept="image/*" id="file_image3" onchange="change_image3()"><br>
		<img src="../publish/images/original.png" width="100px"  id="preview_image4">
		<input type="file" name="img_4" accept="image/*" id="file_image4" onchange="change_image4()"><br>
		<img src="../publish/images/original.png" width="100px"  id="preview_image5">
		<input type="file" name="img_5" accept="image/*" id="file_image5" onchange="change_image5()"><br>
		<button type="submit" name="btn">Đăng</button>
	</form>
</div>
 <script type="text/javascript">
 	function change_image(){
 		let vImage = document.getElementById('preview_image');
 		let vFile = document.getElementById('file_image');
 		let url = URL.createObjectURL(vFile.files[0]);
 		vImage.src = url;
 	}
 	function change_image2(){
 		let vImage = document.getElementById('preview_image2');
 		let vFile = document.getElementById('file_image2');
 		let url = URL.createObjectURL(vFile.files[0]);
 		vImage.src = url;
 	}
 	function change_image3(){
 		let vImage = document.getElementById('preview_image3');
 		let vFile = document.getElementById('file_image3');
 		let url = URL.createObjectURL(vFile.files[0]);
 		vImage.src = url;
 	}
 	function change_image4(){
 		let vImage = document.getElementById('preview_image4');
 		let vFile = document.getElementById('file_image4');
 		let url = URL.createObjectURL(vFile.files[0]);
 		vImage.src = url;
 	}
 	function change_image5(){
 		let vImage = document.getElementById('preview_image5');
 		let vFile = document.getElementById('file_image5');
 		let url = URL.createObjectURL(vFile.files[0]);
 		vImage.src = url;
 	}
 </script>
 <?php 
	require_once 'layout/footer.php';
 ?>