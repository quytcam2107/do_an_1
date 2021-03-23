<?php 
	$origin_type = $name_type = "";
	if (isset($_POST['btn'])) {
		$name_type = $_POST['name_type'];
		$sql = "INSERT INTO type VALUES(NULL,'$name_type')";
		$result = mysqli_query($conn,$sql);
		if($result == false){
			echo "ERROR: ".mysqli_error($conn);
		}else{
			header("location:index.php?module=type&action=list");
		}
	}
 ?>
<?php 
	$tittle = "Thêm Loại";
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
 			height: 180px;
 			background: #92E6F8;
 			margin: auto;
 			border: 1px solid black;
 			border-radius: 10px;
 		}
 		button{
 			margin-left: 180px;
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
 			margin-bottom: 15px;
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
 	<h2>Thêm Loại</h2><br>
 	<div class="div_form_insert_type"><br>
 	<form method="POST">
 		<table>
 			<tr>
 				<td><span class="sp1_insert_type"><i class="fas fa-bahai fas_insert"></i>   Tên Loại :</span></td>
 				<td><input style="padding-left: 8px;" type="text" name="name_type" placeholder="Tên Loại" size="40" required></td>
 			</tr>
 			<tr>
 				<td colspan="2"><button type="submit" name="btn">Thêm Loại</button></td>
 			</tr>
 		</table>
 	</form>
 	</div>
 </div>
 <?php 
	require_once("layout/footer.php");
 ?>
 <?php 
	require_once("layout/footer.php");
 ?>