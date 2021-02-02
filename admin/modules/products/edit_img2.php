<?php 
	if (isset($_GET['id'])) {
		$id  = $_GET['id'];
		$sql2="SELECT * from image_product WHERE id = '$id'";
		$result2 =mysqli_query($conn,$sql2);
		if (mysqli_num_rows($result2)==1) {
			$row=mysqli_fetch_assoc($result2);
			$url1=$row['url'];
		}
		if (mysqli_num_rows($result2)==5) {
			$row=mysqli_fetch_assoc($result2);
			$url1=$row['url'];
			$row=mysqli_fetch_assoc($result2);
			$url2=$row['url'];
			$row=mysqli_fetch_assoc($result2);
			$url3=$row['url'];
			$row=mysqli_fetch_assoc($result2);
			$url4=$row['url'];
			$row=mysqli_fetch_assoc($result2);
			$url5=$row['url'];
		}
		if (mysqli_num_rows($result2)==4) {
			$row=mysqli_fetch_assoc($result2);
			$url1=$row['url'];
			$row=mysqli_fetch_assoc($result2);
			$url2=$row['url'];
			$row=mysqli_fetch_assoc($result2);
			$url3=$row['url'];
			$row=mysqli_fetch_assoc($result2);
			$url4=$row['url'];

		}
		if (mysqli_num_rows($result2)==2) {
			$row=mysqli_fetch_assoc($result2);
			$url1=$row['url'];
			$row=mysqli_fetch_assoc($result2);
			$url2=$row['url'];
		}
		if (mysqli_num_rows($result2)==3) {
			$row=mysqli_fetch_assoc($result2);
			$url1=$row['url'];
			$row=mysqli_fetch_assoc($result2);
			$url2=$row['url'];
			$row=mysqli_fetch_assoc($result2);
			$url3=$row['url'];
		}
	}
	if (isset($_POST['btn'])) {
		$folder = "../publish/images/";
		$file = $_FILES['img_1'];
		$path = $folder.$file['name'];
		move_uploaded_file($file['tmp_name'],$path);
		// $sql = "UPDATE  image_product SET url ='$path' WHERE id ='$id' And url='$url1'";
		if ($_FILES['img_1']['size'] > 0) {
			$folder = "../publish/images/";
			$file = $_FILES['img_1'];
			$path = $folder.$file['name'];
			move_uploaded_file($file['tmp_name'],$path);
			if (!empty($url1)) {
				$sql = "UPDATE  image_product SET url ='$path' WHERE id ='$id' AND url = '$url1'";
			}
			if (empty($url1)) {
				$sql = "INSERT INTO  image_product values('$id','$path')";
			}
			$result = mysqlI_query($conn,$sql);
		}
		
		if ($_FILES['img_2']['size'] > 0) {
			$folder = "../publish/images/";
			$file = $_FILES['img_2'];
			$path = $folder.$file['name'];
			move_uploaded_file($file['tmp_name'],$path);
			if (!empty($url2)) {
				$sql = "UPDATE  image_product SET url ='$path' WHERE id ='$id' ANd url = '$url2'";
			}
			if (empty($url2)) {
				$sql = "INSERT INTO  image_product values('$id','$path')";
			}
			
			$result = mysqlI_query($conn,$sql);
		}
		if ($_FILES['img_3']['size'] > 0) {
			$folder = "../publish/images/";
			$file = $_FILES['img_3'];
			$path = $folder.$file['name'];
			move_uploaded_file($file['tmp_name'],$path);
			if (!empty($url3)) {
				$sql = "UPDATE  image_product SET url ='$path' WHERE id ='$id' ANd url = '$url3'";
			}
			if (empty($url3)) {
				$sql = "INSERT INTO  image_product values('$id','$path')";
			}
			
			$result = mysqlI_query($conn,$sql);
		}
		if ($_FILES['img_4']['size'] > 0) {
			$folder = "../publish/images/";
			$file = $_FILES['img_4'];
			$path = $folder.$file['name'];
			move_uploaded_file($file['tmp_name'],$path);
			if (!empty($url4)) {
				$sql = "UPDATE  image_product SET url ='$path' WHERE id ='$id' ANd url = '$url4'";
			}
			if (empty($url4)) {
				$sql = "INSERT INTO  image_product values('$id','$path')";
			}
			
			$result = mysqlI_query($conn,$sql);
		}
		if ($_FILES['img_5']['size'] > 0) {
			$folder = "../publish/images/";
			$file = $_FILES['img_5'];
			$path = $folder.$file['name'];
			move_uploaded_file($file['tmp_name'],$path);
			if (!empty($url5)) {
				$sql = "UPDATE  image_product SET url ='$path' WHERE id ='$id' ANd url = '$url5'";
			}
			if (empty($url5)) {
				$sql = "INSERT INTO  image_product values('$id','$path')";
			}
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
		<img src="<?php if(empty($url1) == false) echo $url1;else echo "../publish/images/original.png"; ?>" width="100px" id="preview_image">
		<input type="file" name="img_1" accept="image/*" id="file_image" onchange="change_image()"><br>

		<img src="<?php if(empty($url2) == false) echo $url2;else echo "../publish/images/original.png"; ?>" width="100px" id="preview_image2">
		<input type="file" name="img_2" accept="image/*" id="file_image2" onchange="change_image2()"><br>

		<img src="<?php if(empty($url3) == false) echo $url3;else echo "../publish/images/original.png"; ?>" width="100px" id="preview_image3">
		<input type="file" name="img_3" accept="image/*" id="file_image3" onchange="change_image3()"><br>

		<img src="<?php if(empty($url4) == false) echo $url4;else echo "../publish/images/original.png"; ?>" width="100px" id="preview_image4">
		<input type="file" name="img_4" accept="image/*" id="file_image4" onchange="change_image4()"><br>

		<img src="<?php if(empty($url4) == false) echo $url5;else echo "../publish/images/original.png"; ?>" width="100px" id="preview_image5">
		<input type="file" name="img_5" accept="image/*" id="file_image5" onchange="change_image5()"><br>
		<button type="submit" name="btn">Thêm Sản Phẩm</button>
	</form>
	<br>
	<h5 style="color: red;"> * Lưu ý : Các ảnh của sản phẩm không được trùng nhau</h5>
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