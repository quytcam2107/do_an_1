<?php 
$error ="";
	$sql = "SELECT id,name,image_product,price FROM product WHERE id_type = '10'";
	$result = mysqli_query($conn,$sql);
	if ($result == false) {
		$error =  "ERROR :".mysqli_error($conn);
		mysqli_close($conn);
		die($error);
	}

 ?>
<?php 
	require_once("layout/header.php");
 ?>
 <style type="text/css">
 	.product-shirt{
 		
 		width: 100%;
 		height: 100%;
 	}
 	.product-shirt_top{
 		width: 85%;height: 40%;
 		color: black;
 		margin: auto;
 	}
 	.product-shirt_bottom{
 		width: 85%;height: 40%;
 		margin-top: 10px;
 		margin: auto;
 	}
 	.product-shirt_top table{
 		width: 100%;
 		text-align: center;	
 	}
 	.product-shirt_top table .item{
 		width: 40px;
 		padding-left: 10px;
 		box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
 	}
 	.product-shirt_top table .item:hover{
 		box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
 		border: 1px double black;
 		font-weight: bold;
 		background: #E7FAFA;
 	}
 	img{
 		width: 200px;
 		height: 250px;

 	}
 	img:hover{
 		b
 	}
 	.sp_item_name{
 		
 	}
 	.sp_item_price{
 		color: red;
 	}
 	.product-shirt_bottom table{
 		width: 100%;
 		text-align: center;	
 	}
 	.product-shirt_bottom table .item{
 		color: black;
 		width: 40px;
 		padding-left: 10px;
 		box-shadow: rgba(0, 0, 0, 0.1) 0px 0px 5px 0px, rgba(0, 0, 0, 0.1) 0px 0px 1px 0px;
 	}
 	.product-shirt_bottom table .item:hover{
 		box-shadow: rgba(0, 0, 0, 0.09) 0px 2px 1px, rgba(0, 0, 0, 0.09) 0px 4px 2px, rgba(0, 0, 0, 0.09) 0px 8px 4px, rgba(0, 0, 0, 0.09) 0px 16px 8px, rgba(0, 0, 0, 0.09) 0px 32px 16px;
 		border: 1px double black;
 		font-weight: bold;
 		background: #E7FAFA;
 	}
 	form{
 		width: 200px;
 		padding-left: 700px;
 	}
 	button{
 		margin-left: 60px;
 	}
 	input{
 		border-radius: 10px 5px;
 	}
 </style>
 <br>
<form>
	<input type="text" name="keyword" placeholder="Tìm Kiếm" size="50" style="padding-bottom: 10px;padding-top: 10px;"><br><br>
	<button type="submit" name="btn_search">Tìm Kiếm</button>
</form>
<br>
<p style="color: black;background: #F76DC5;height: 50px;width: 50%;margin: auto;text-align: center;font-size: 25px;line-height: 40px;font-family: cursive;border-radius: 10px;">Áo nam</p>
 <div class="product-shirt">
 	<div class="product-shirt_top">
 		<table>
 			<?php 
 				$total = mysqli_num_rows($result);
 				$count = 0;
 				while($count != $total){
 					echo "<tr>";
 						while($row = mysqli_fetch_assoc($result)){
 							$count ++;
 							echo "<td class='item'>";
 								echo "<span class='sp_item_name'>".$row['name']."</span>";
 								$url = $row['image_product'];
 								echo "<img src='$url'>";
 								echo "<br>";
 								echo "<span class='sp_item_price'>".$row['price']."</span>"." VND";
 							echo "</td>";
 							
 						}
 					echo "</tr>";
 					if($count % 2 == 0) break;
 				}
 			 ?>
 		</table>
 	</div>
 	<p style="color: black;background: #F76DC5;height: 50px;width: 50%;margin: auto;text-align: center;font-size: 25px;line-height: 40px;font-family: cursive;border-radius: 10px;">Áo Nữ</p>
 	<div class="product-shirt_bottom">
 		<table>
 			<?php 
 				$sql2 = "SELECT id,name,image_product,price FROM product WHERE id_type = '2' ";
 				$result2 = mysqli_query($conn,$sql2);
 				$total2 = mysqli_num_rows($result2);
 				$count2 = 0;
 				while($count2 = $total2){
 					echo "<tr>";
 						while($row2 = mysqli_fetch_assoc($result2)){
 							$count2 ++;
 							$total2 --;
 							echo "<td class='item'>";
 								echo "<span class='sp_item_name_2'>".$row2['name']."</span>";
 								echo "<br>";
 								$url = $row2['image_product'];
 								echo "<img src='$url'>";
 								echo "<br>";
 								echo "<span class='sp_item_price'>".$row2['price']."</span>"." VND";
 							echo "</td>";
 						}
 					echo "</tr>";
 				}
 			 ?>
 		</table>
 	</div>
 </div>
 <?php 
 	require_once("layout/footer.php");
  ?>