<?php 
	$error = $edit_name_type = "";
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "SELECT * FROM type WHERE id = '$id'";
		$result = mysqli_query($conn,$sql);
		if ($result == false) {
			echo "ERROR :".mysqli_error($conn);
		}
		else if(mysqli_num_rows($result) == 1) {
			$row = mysqli_fetch_assoc($result);
			$edit_name_type = $row['name_type'];
		}
	}
	if (isset($_POST['btn_edit_type'])) {
		if (empty($_POST['edit_name_type']) == false) {
			$edit_name_type = $_POST['edit_name_type'];
		}
		$sql = "UPDATE type SET name_type = '$edit_name_type' WHERE id = '$id'";
		$result = mysqli_query($conn,$sql);
		if ($result == false) {
			echo "ERROR :".mysqli_query($conn,$sql);
		}
		else{
			// if (mysqli_affected_rows($conn) == 0) {
			// 	$error = "Cập nhật thất bại ! bạn chưa thay đổi tên Loại".mysqli_error($conn);
			// }
			// else{
				header("location:index.php?module=type&action=list");
			// }
		}
	}
	if (isset($_POST['btn_edit_type2'])) {
		header("location:index.php?module=type&action=list");
	}
 ?>
<?php 
	$tittle = "Chỉnh Sửa";
	require_once("layout/header.php");
 ?>
 <style type="text/css">
 		h2{
 			text-align: center;
 			border-bottom: 3px double #DBB5B5;
 		}
 		.list_type form{
 			
 		}
 		.list_type input{
 			margin-left: 50px;

 			padding-top: 5px;
 			padding-bottom: 5px;
 		}
 		.div_form_insert_type{
 			width: 500px;
 			height: 200px;
 			background: #92E6F8;
 			margin: auto;
 			border: 1px solid black;
 			border-radius: 10px;
 		}
 		button{
 			margin-left: 250px;
 			margin-top: 10px;
 			border: 0px;
 			background: #B5B1B3;
 			border-radius: 5px;
 			padding-top: 5px;
 			padding-bottom: 5px;
 			width: 90px;
 		}
 		button:hover{
 			background: white;
 		}
 		button:active{
 			background: white;
 			color: red;
 			font-weight: bolder;
 		}
 		table{
 			width: 100%;
 		}
 		tr{
 			height: 40px;

 		}
 		td{
 			width: 300px;
 			
 			position: relative;
 		}
 		.sp1_insert_type{
 			font-weight: bolder;
 			font-size: 18px;
 			margin-bottom: 20px;
 			position: absolute;
 			top: -14px;
 		}
 		.fas.fas_insert{
 			color: #1333F8;
 		}
 		.fas.i2{
 			color: #ED3C13;
 		}
 		
 	</style>
 <div class="list_type">
 	<h2>Chỉnh Sửa Loại</h2><br>
 	<div class="div_form_insert_type"><br>
 	<form method="POST">
 		<table>
 			<tr>
 				<td><span class="sp1_insert_type"><i class="fas fa-bahai fas_insert"></i>    Tên Loại :</span></td>
 				<td><input type="text" name="edit_name_type" placeholder="Tên Thương Hiệu" size="40" required value="<?php echo $edit_name_type ?>"></td>
 			</tr>
 		</table>
 		<button type="submit" name="btn_edit_type">Cập Nhật</button>
 		<!-- <button type="submit" name="btn_edit_type2">Huỷ cập nhật</button> -->
 		
 	</form>
 	</div>
 </div>
<h4 style="text-align: center;color: red;"><?php echo $error; ?></h4>
 <?php 
	require_once("layout/footer.php");
 ?>