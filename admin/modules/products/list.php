<?php 
	$result_page = mysqli_query($conn,"SELECT COUNT(`id`) AS 'tong_sp' FROM product");
			$product = mysqli_fetch_assoc($result_page);
			$total_product = $product['tong_sp'];
			$limit = 5;
			$total_page = ceil($total_product/$limit);
			if(isset($_GET['page'])){
				$page = $_GET['page'];
			}else{
				$page = 1;
			}
			if($page > $total_page){
				$page = $total_page;
			}
			if($page < 1){
				$page = 1;
			}
			$offset = ($page - 1) *$limit;
 			$sql = "SELECT * FROM product LIMIT $offset,$limit";

 			if (isset($_POST['button_search'])) {
				$keyword = trim($_POST['input_search']);
				$sql = "SELECT * FROM product WHERE name LIKE '%$keyword%' ";
				if (empty($keyword) == true) {
					$sql = "SELECT * FROM product LIMIT $offset,$limit";
				}
			}

 			$result = mysqli_query($conn,$sql);
 			$total = mysqli_num_rows($result);
 ?>
<?php 
	$tittle = "Quản lý sản phẩm";
	require_once("layout/header.php");
 ?>
 <style type="text/css">

 	.div_list_products{
 		width:100%;
 		height: auto;
 		
 		/*overflow: auto;*/
 		/*position: fixed;*/
 	}
 	table{
 		width: 100%;
 		border-collapse: collapse;
 		text-align: center;
 	}
 	tr,th,td{
 		border: 1px solid black;
 	}
 	#th_1{
 		width: 50px;
 		height: 20px;
 		
 		background: #A7A0A0;
 	}
 	#th_2{
 		width: 90px;
 		height: 30px;
 		background: #A7A0A0;
 	}
 	#th_3{
 		width: 70px;
 		height: 20px;
 		background: #A7A0A0;
 	}
 	#th_4{
 		width: 30px;
 		height: 20px;
 		background: #A7A0A0;
 	}
 	#th_5{
 		width: 60px;
 		height: 20px;
 		background: #A7A0A0;
 	}
 	#th_6{
 		width: 50px;
 		height: 20px;
 		background: #A7A0A0;
 	}
 	#th_7{
 		width: 80px;
 		height: 20px;
 		color: #0510E9;
 		background: #A7A0A0;
 	}

 	#td_1{
 		color: red;
 	}
 	.td_a{
 		width: 20px;
 	}
 	.h2_products_1{
 			border-bottom: 3px double #DBB5B5;
 	}
 	p{
 			text-align: center;
 	}
 	a{
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
 	.input1{
			border: 2px solid grey; 
    		-webkit-box-shadow: 
     		inset 0 0 4px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    		-moz-box-shadow: 
     		inset 0 0 4px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
   			box-shadow: 
      		inset 0 0 4px  rgba(0,0,0,0.1),
            0 0 16px rgba(0,0,0,0.1); 
    		padding: 5px;
    		background: white;
    		margin: 10px 0px 0px 290px;
    		border-radius: 15px;
    		font-family: Courier;
	}
	.hvr-shutter-in-horizontal {
		  padding: 5px 20px 5px 20px;
		  border-radius: 5px;
		  display: inline-block;
		  vertical-align: middle;
		  -webkit-transform: perspective(1px) translateZ(0);
		  transform: perspective(1px) translateZ(0);
		  box-shadow: 0 0 1px rgba(0, 0, 0, 0);
		  position: relative;
		  background: #4C4C4F;
		  -webkit-transition-property: color;
		  transition-property: color;
		  -webkit-transition-duration: 0.3s;
		  transition-duration: 0.3s;
		  font-family: Courier;

		}
		.hvr-shutter-in-horizontal:before {
		  content: "";
		  position: absolute;
		  z-index: -1;
		  top: 0;
		  bottom: 0;
		  left: 0;
		  right: 0;
		  background: #e1e1e1;
		  -webkit-transform: scaleX(1);
		  transform: scaleX(1);
		  -webkit-transform-origin: 50%;
		  transform-origin: 50%;
		  -webkit-transition-property: transform;
		  transition-property: transform;
		  -webkit-transition-duration: 0.2s;
		  transition-duration: 0.2s;
		  -webkit-transition-timing-function: ease-out;
		  transition-timing-function: ease-out;
		}
		.hvr-shutter-in-horizontal:hover, .hvr-shutter-in-horizontal:focus, .hvr-shutter-in-horizontal:active {
		  color: white;
		}
		.hvr-shutter-in-horizontal:hover:before, .hvr-shutter-in-horizontal:focus:before, .hvr-shutter-in-horizontal:active:before {
		  -webkit-transform: scaleX(0);
		  transform: scaleX(0);
		}
	.input1:hover{
			border: 2px solid #F70808;
	}
	.fa.fa1{
		color: #07D6EE;
	}
	.fa.fa2{
		color: red;
	}
	.fa.fa_3{
		color: #05929B;
		font-size: 20px;
	}
 </style>
 <div class="div_list_products">
 	<h2 class="h2_products_1" style="text-align: center;">Quản Lý Sản Phẩm</h2>
 	<form method="POST" class="form_search">
 		<input class="input1" type="text" name="input_search" placeholder="Bạn cần tìm gì ..." size="50">
		<button class="hvr-shutter-in-horizontal" type="submit" name="button_search">Tìm kiếm</button>
 	</form>
 	<i class="fa fa-plus-circle fa_3" aria-hidden="true"></i> <a style="text-decoration: none;font-family: sans-serif;font-size: 15px;color: blue;" href="index.php?module=products&action=insert">Thêm Sản Phẩm</a><br><br>
 	<span style="font-size: 20px;float: right;">
 	<?php 
 		echo "Có tổng :".$total_product." Sản Phẩm";
 	 ?>
 	 </span>
 	 <br>
 	 <h3>
 	 <?php 
 	 	if (empty($_POST['input_search']) == false) {
 	 		echo "Có  ".$total." kết quả tìm thấy cho : $keyword";
 	 	}
 		
 	 ?>
 	 </h3>
 	<table>
 		<tr>
 			<th id="th_1">ID</th>
 			<th id="th_2">Sản Phẩm</th>
 			<!-- <th id="th_3">Thương Hiệu</th> -->
 			<th id="th_4">Màu</th>
 			<th id="th_5">Giá</th>
 			<th id="th_6">Tình Trạng</th>
 			<th id="th_7" colspan="2">Hành Động</th>
 		</tr>	
 		<?php 
 			if ($result == false) {
 				echo "ERROR :".mysqli_error($conn);
 			}
 			else if(mysqli_num_rows($result) == 0){
 				echo "<th colspan='7'>Không có sản phẩm</th>";
 			}else{
 				foreach ($result as $value) {
 					$id = $value['id'];
 					echo "<tr>";
 						echo "<td id='td_1'>$id</td>";
 						echo "<td>";
 							$name = $value['name'];
 							echo "<p>$name</p>";
 							echo "<br>";
 							$sql2 = "SELECT * FROM image_product WHERE id = $id";
 							$result2 = mysqli_query($conn,$sql2);
 							$row2 = mysqli_fetch_assoc($result2);
 							$url2 = $row2['url'];
 							echo "<img src='$url2' width='100px;'>";
 						echo "</td>";
 						// echo "<td>";
 						// 	// $arrTrademark = array(0=>"Guuci",1=>"Dolce & Gabbana");
 						// 	// $trademark = $value['id_trademark'];
 						// 	// echo $arrTrademark[$trademark];
 						// 	echo $value['id_trademark'];
 						// echo "</td>";
 						echo "<td>";
 							$arrColor =array(0=>"Đen",1=>"Xanh Dương",2=>"Đỏ",3=>"Vàng",4=>"Nâu",5=>"Cam",6=>"Xanh Lá Cây",7=>"Trắng",8=>"Tím",9=>"Bạc");
 							$color = $value['color'];
 							echo $arrColor[$color];
 						echo "</td>";
 						echo "<td>".$value['price'].'  '.'VND'."</td>";
 						echo "<td>";
 							$arrStatus = array(1=>"Còn Hàng",0=>"Hết Hàng",2=>"Hàng Sắp Về",-1=>"Không Kinh Doanh");
 							$status = $value['status'];
 							echo $arrStatus[$status];
 						echo "</td>";
 						echo "<td class='td_a'>";
 							echo "<a class='a_change' href='index.php?module=products&action=edit&id=$id'><i class='fa fa-pencil-square-o fa1'></i>&nbspSửa</a>";
 							
 						echo "</td>";
 						echo "<td class='td_a'>";
 							
 							echo "<a class='a_change' href='index.php?module=products&action=delete_2&id=$id'><i class='fa fa-trash-o fa2'></i>&nbspXoá</a>";
 						echo "</td>";
 					echo "</tr>";
 				}
 			}
 		 ?>
 	</table>
 	<br>
 	<a href="?module=products&action=list&page=<?php echo ($page-1)?>">Trang trước</a>
	<span><?php echo " < $page > " ?></span>
	<a href="?module=products&action=list&page=<?php echo ($page+1) ?>">Trang sau</a>
 </div>
 <?php 
	require_once("layout/footer.php");
 ?>
