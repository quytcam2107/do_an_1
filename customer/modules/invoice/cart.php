<?php 
	$q = "";
	if (!isset($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		if (isset($_SESSION['cart'][$id])) {
			if (isset($_GET['up'])) 
				$_SESSION['cart'][$id] +=1;
			if (isset($_GET['down'])){
				$_SESSION['cart'][$id] -=1;
				if($_SESSION['cart'][$id] < 1) $_SESSION['cart'][$id] =1;
			} 
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
 	*{
 		color: black;
 	}
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
 	.div_form_pay{
 		background: #D0EFFB;
 		margin: auto;
 		border-radius: 20px;
 	}
 	form{
 		padding-left: 500px;
 	}
 	input{
 		padding: 10px 10px 10px 10px;
 	}
 	.btn_pay{
 		margin-left: 120px;
 		padding-top: 10px;
 		padding-bottom: 10px;
 		border-radius: 5px;
 		background: #F2F2F2;
 		
 	}
 	.btn_pay1{
 		background: #4372FA;
 		margin-left: 120px;
 		padding-top: 10px;
 		padding-bottom: 10px;
 		border-radius: 5px;
 	}
 	.a_login{
 		text-decoration: none;
 	}
 	.bt_login{
 		margin-left: 500px;
 		padding-left: 50px;
 		padding-right: 50px;
 		padding-top: 10px;
 		padding-bottom: 10px;
 		border-radius: 5px;
 		background: linear-gradient(#CABDBD, #9DF0F5);
 	}
 	.a_history{
 		text-decoration: none;
 		font-size: 22px;
 	}
 	.a_history:hover{
 		font-weight: bold;
 	}
 	
 </style>
 <div class="div_cart">
 	<br>
 	<label class="lb_history">
 		<i style="color: #1B5CEF;font-size: 30px;" class="fa fa-history" aria-hidden="true"></i>
 		<?php 
 			if (isset($_SESSION['user']['id'])) {
 				echo "<a class='a_history' href='index.php?module=invoice&action=history'>Lịch sử mua hàng</a>";
 			}

 		 ?>
 	</label>
 		
 		<table>
 			<tr>
 				<th>STT</th>
 				<th>Tên Sản Phẩm</th>
 				<th>Đơn Giá</th>
 				<th>Số Lượng</th>
 				<th>Thành Tiền</th>
 				<th>Hành Động</th>
 			</tr>
 			<?php 
 				$count = 0;
 				$total_amount = 0;
 				foreach ($_SESSION['cart'] as $id_product => $quantity) {
 					$count += 1;
 					$sql = "SELECT id,name,price FROM product WHERE id = '$id_product'";
 					$result = mysqli_query($conn,$sql);
 					if($result == false) echo "ERROR :".mysqli_error($conn);
 					else if(mysqli_num_rows($result) == 1){
 						$row = mysqli_fetch_assoc($result);
 						$name = $row['name'];
 						$price = $row['price'];
 						$total = $price * $quantity;
 						echo "<tr>";
 							echo "<td>".$count."</td>";
 							echo "<td>";
 								echo "$name";
 								echo "<br>";
 								$sql2 = "SELECT id,url FROM image_product WHERE id ='$id_product'";
 								// $_SESSION['id_image'] = $id_product;
 								$result2 = mysqli_query($conn,$sql2);
 								$row2 = mysqli_fetch_assoc($result2);
 								$url = $row2['url'];
 								echo "<img src='$url' width='20px'>";
 							echo "</td>";
 							echo "<td>$price</td>";
 							echo "<td>";
 								echo "<a href='index.php?module=invoice&action=cart&id=$id_product&down'> -</a>";
 								echo $quantity;
 								echo "<a href='index.php?module=invoice&action=cart&id=$id_product&up'> + </a>";
 							echo "</td>";
 							echo "<td>".($quantity*$price)."</td>";
 							echo "<td>";
 							echo "<a href='index.php?module=invoice&action=deletecart&id=$id_product&up'>Xoá</a>";
 							echo "</td>";
 							$total_amount += $total;
 							$_SESSION['total_amount'] = $total_amount;
 						echo "</tr>";
 					}
 				}
 				echo "<tr>";
 					echo "<th colspan='4'>Tổng tiền</th>";
 					echo "<th style='color:red;'>$total_amount</th>";

 				echo "</tr>";
 			 ?>

 		</table>
 		<br>
 		<?php 
 			if(!isset($_SESSION['user']['id'])) {
 				echo "<button class='bt_login'>";
 				echo "<a class='a_login' href='index.php?module=common&action=login'>Đăng nhập để thanh toán</a>";
 				echo "</button>";
 			}
 			else{
 				$id_customer = $_SESSION['user']['id'];

 				$sql= "SELECT name,phone,address FROM customer WHERE id = '$id_customer'";
 				$result = mysqli_query($conn,$sql);
 				if ($result == false) {
 					echo "ERROR :".mysqli_error($conn);
 				}
 				else if (mysqli_num_rows($result) == 1) {
 					$row = mysqli_fetch_assoc($result);
 					$name = $row['name'];
 					$phone = $row['phone'];
 					$address = $row['address'];
 				}

 				?>
 				<br>
 				<div class="div_form_pay">
 					<br>
 					<form method="POST" action="index.php?module=invoice&action=checkout">
 						<label>
 							Họ tên người nhận :
 							<input type="text" name="name_receiver" placeholder="Tên Người Nhận" value="<?php echo $name ?>">
 						</label><br><br>
 						<label>
 							Số điện thoại :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 							<input type="tel" name="phone_receiver" placeholder="Số điện thoại" value="<?php echo $phone ?>"><br>
 						</label><br><br>
 						<label>
 						Địa chỉ người nhận :
 							<input type="text" name="address_receiver" placeholder="Địa chỉ người nhận" value="<?php echo $address ?>"><br>
 						</label><br><br>
 						
 						<?php 
 							if (!isset($_SESSION['user']['id'])) {
 								echo "<button>";
 									echo "<a href='index.php?module=common&action=login'>Đăng nhập để thanh toán</a>";
 								echo "</button>";
 							}
 							else{
 								if ($total_amount == 0) {
 									echo "<button>";
 									echo "<a href='#'>Vui lòng chọn món đồ</a>";
 								echo "</button>";
 								}
 								else{
 									echo "<button type='submit' name='btn_pay' class='btn_pay'>";
 									echo "Đặt hàng";
 								echo "</button>";
 								}
 								
 							}
 						 ?>
 						<br><br>
 					</form>
 				</div>
 			<?php
 			} 
 			 ?>
 </div>
 <?php 
	require_once 'layout/footer.php';
 ?>
