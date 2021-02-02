<?php 
	$info = "";
	$sql = "SELECT * FROM type";
	$result = mysqli_query($conn,$sql);
	if (isset($_GET['info'])) {
		$info = $_GET['info'];
	}
 ?>
<?php 
	$tittle = "Quản lý Loại";
	require_once("layout/header.php");
 ?>
 <!-- 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" /> -->
 	<style type="text/css">
 		table{
 			width: 950px;
 			
 			 		}
 		table,tr,td,th{
 			border: 1px solid black;
 			border-collapse: collapse;
 		 }
 		 tr,td,th{
 		 	width: 150px;
 		 	text-align: center;
 		 }

 		.h2_trademark_1{
 			border-bottom: 3px double #DBB5B5;
 		}
 		.insert_trademark{
 			text-decoration: none;
 			font-size: 15px;
 			color: #2020EE;
 			font-family: sans-serif;
 		}
 		.a_trademark_1{
 			text-decoration: none;
 			font-size: 20px;
 			color: #433ADF;
 		}
 		.a_trademark_1:hover{
 			color: #114943;
 		}
 		.a_trademark_2:hover{
 			color: black;
 		}
 		.a_trademark_2{
 			text-decoration: none;
 		}
 		.fas.fas2{
 			color: #08ECD4;
 			font-size: 20px;
 		}
 		.fas.fas2:hover{
 			color: #114943;
 		}
 		.far.fas3{
 			color: red;
 			font-size: 20px;
 		}
 		.far.fas3:hover{
 			color: black;
 			font-size: 20px;
 		}
 		
 	</style>

 	<div>
 			<h2 class="h2_trademark_1" style="text-align: center;">Quản Lý Loại</h2><br>
 			<i style="font-size: 18px;color:#F01035;" class="fa fa-plus-circle fa_3"></i>  <a class="insert_trademark" href="index.php?module=type&action=insert">Thêm Loại</a><br><br>
 			<table >
 			<tr>
 			<th>ID</th>
 			<th>Tên Loại</th>
 			<th>Hành Động</th>
 			</tr>
 			<?php 
 				if($result == false) {
 					echo "Kết Nối Thất Bại".mysqli_error($conn);
 				}
 				else{
 					if (mysqli_num_rows($result) == 0){
 						echo "<tr><th colspan='3'>Danh Sách Thương Hiệu Rỗng</th></tr>";
 					}
 					else{
 						
 						foreach ($result as $value) {
 							$id = $value['id'];
 							echo "<tr>";
 							echo "<td>".$id."</td>";
 							echo "<td>".$value['name_type']."</td>";
 							echo "<td>";
 								echo "<label>";
 								echo "<a class='a_trademark_1' href='index.php?module=type&action=edit&id=$id'><i class='fa fa-pencil-square-o fa1'></i>&nbspSửa</a>";
 								echo "</label>";
 								echo "<label>";
 								echo "<a class='a_trademark_2' href='index.php?module=type&action=delete&id=$id'><i class='fa fa-trash-o fa2'></i>&nbspXoá</a>";
 								echo "</label>";
 							echo "</td>";
							echo "</tr>";
 						}
 						
 					}
 				}
 			 ?>
 		</table>
 		<h4 style="color: red;" class="h4_trademark_1">
 			<?php echo $info; ?>
 		</h4>
 	</div>
 <?php 
	require_once("layout/footer.php");
 ?>
 <a style="float: left"></a>