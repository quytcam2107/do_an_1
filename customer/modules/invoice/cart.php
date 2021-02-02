<?php 
	if (!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_SESSION['cart'][$id])) {
			$_SESSION['cart'][$id] +=1;
		}
		else{
			$_SESSION['cart'][$id] =1;
		}
		header("location:index.php?module=invoice&action=cart");
	}
 ?>
<?php 
$tittle = "Giỏ Hang";
	require_once 'layout/header.php';
 ?>
 <style type="text/css">
 	.div_cart{
 		width: 1400px;
 		height: 100%;
 		margin: auto;
 		
 	}
 	.div_cart table{
 		
 		width: 80%;
 		color: black;
 		border-collapse: collapse;
 		z-index: 999;
 		margin: auto;
 		margin-top: 20px;
 	}
 	.div_cart tr,th,td{
 		border: 1px solid black;
 		text-align: center;

 	}
 	img{
 		width: 50px;
 		height: 50px;
 	}
 	.btn_quantity{
 		padding-left: 15px;
 		padding-right: 15px;
 	}
 </style>
 <div class="div_cart">
 		<table>
 			<tr>
 				<th>STT</th>
 				<th>Tên Sản Phẩm</th>
 				<th>Đơn Giá</th>
 				<th>Số Lượng</th>
 				<th>Thành Tiền</th>
 			</tr>
 			<?php 
 				$count = 0;
 				foreach ($_SESSION['cart'] as $id => $quantity) {
 					$count += 1;
 					$sql = "SELECT id,name,price FROM product WHERE id = '$id'";
 					$result = mysqli_query($conn,$sql);
 					if($result == false) echo "ERROR :".mysqli_error($conn);
 					else if(mysqli_num_rows($result) == 1){
 						$row = mysqli_fetch_assoc($result);
 						$name = $row['name'];
 						$price = $row['price'];
 						echo "<tr>";
 							echo "<td>".$count."</td>";
 							echo "<td>";
 								echo "$name";
 								echo "<br>";
 								$sql2 = "SELECT id,url FROM image_product WHERE id ='$id'";
 								$result2 = mysqli_query($conn,$sql2);
 								$row2 = mysqli_fetch_assoc($result2);
 								$url = $row2['url'];
 								echo "<img src='$url' width='20px'>";
 							echo "</td>";
 							echo "<td>$price</td>";
 							echo "<td>";
 								echo "<a href='index.php?module=invoice&action=cart&id=$id&down'><button class='btn_quantity'> - </button></a>";
 								echo $quantity;
 								echo "<a href='index.php?module=invoice&action=cart&id=$id&up'><button class='btn_quantity'> + </button></a>";
 							echo "</td>";
 							echo "<td>".($quantity*$price)."</td>";
 							$total_amount += ($quantity*$price);
 						echo "</tr>";
 					}
 				}
 				echo "<tr>";
 					echo "<th colspan='4'>Tổng tiền</th>";
 					echo "<th style='color:red;'>$total_amount</th>";
 				echo "</tr>";
 			 ?>
 		</table>
 </div>
 <?php 
	require_once 'layout/footer.php';
 ?>
