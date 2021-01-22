<?php 
	$origin_trademark = $name_trademark = "";
	if (isset($_POST['btn'])) {
		$name_trademark = $_POST['name_trademark'];
		$origin_trademark = $_POST['origin_trademark'];
		$sql = "INSERT INTO trademark VALUES(NULL,'$name_trademark','$origin_trademark')";
		$result = mysqli_query($conn,$sql);
		if($result == false){
			echo "ERROR: ".mysqli_error($conn);
		}else{
			header("location:index.php?module=trademark&action=list");
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
 		.list_trademark form{
 			
 		}
 		.list_trademark input{
 			margin-left: 50px;

 			padding-top: 5px;
 			padding-bottom: 5px;
 		}
 		.div_form_insert_trademark{
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
 		.sp1_insert_trademark{
 			font-weight: bolder;
 			font-size: 18px;
 			margin-bottom: 20px;
 			position: absolute;
 			top: -14px;
 		}
 		.fas.i1{
 			color: #1333F8;
 		}
 		.fas.i2{
 			color: #ED3C13;
 		}
 	</style>
 <div class="list_trademark">
 	<h2>Thêm Thương Hiệu</h2><br>
 	<div class="div_form_insert_trademark"><br>
 	<form method="POST">
 		<table>
 			<tr>
 				<td><span class="sp1_insert_trademark"><i class="fas fa-registered i1"></i>    Thương Hiệu :</span></td>
 				<td><input type="text" name="name_trademark" placeholder="Tên Thương Hiệu" size="40" required></td>
 			</tr>
 			<tr>
 				<td><span class="sp1_insert_trademark"><i class="fas fa-asterisk i2"></i>    Xuất Xứ :</span></td>
 				<td><input type="text" name="origin_trademark" placeholder="Nơi Xuất Xứ" size="40" required></td>
 			</tr>
 			<tr>
 				<td colspan="2"><button type="submit" name="btn">Thêm Thương Hiệu</button></td>
 			</tr>
 		</table>
 	</form>
 	</div>
 </div>
 <?php 
	require_once("layout/footer.php");
 ?>