<?php 
$error ="";
	$sql = "SELECT id,name,price FROM product WHERE id_type = '4'";
	if (isset($_GET['btn_search'])) {
		$keyword = $_GET['keyword'];
		$sql.= " AND name LIKE '%$keyword%'";
	}
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
 		background: ;
 		width: 100%;
 		height: 100%;
 	}
 	.product-shirt_top{
 		width: 90%;
 		height: 70%;
 		color: black;
 		margin: auto;
 		
 	}
  	.product-shirt_top table{
 		width: 1100px;
 		border-spacing: 10px;
 		text-align: center;	
 	}
 	
  	.product-shirt_top table .item{
  		max-width: 20px;
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
 		height: 240px;

 	}
 	.sp_item_name{
 		
 	}
 	.sp_item_price{
 		color: red; 
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
 	.a_detail{
 		text-decoration: none;
 		color:  black;
 	}
 </style>
  <div class="product-shirt">
 <br>
<form method="GET">
	<input type="hidden" name="module" value="products">
	<input type="hidden" name="action" value="product_menfashion">
	<input type="text" name="keyword" placeholder="Tìm Kiếm" size="50" style="padding-bottom: 10px;padding-top: 10px;"><br><br>
	<button type="submit" name="btn_search">Tìm Kiếm</button>
</form>
<br>
<p style="color: black;background: #F76DC5;height: 40px;width: 50%;margin: auto;text-align: center;font-size: 25px;line-height: 40px;font-family: cursive;border-radius: 10px;">Quần Jean</p><br>
 	<div class="product-shirt_top">
 		<table border="0">
 			<?php 
 				$total = mysqli_num_rows($result);
 				$count = 0;
 				while($count != $total){
 					echo "<tr>";

 						while($row = mysqli_fetch_assoc($result)){
 							$count ++;
 							$id = $row['id'];
 							echo "<td class='item'>";
 								echo "<a class='a_detail' href='index.php?module=products&action=detail_product&id=$id'>";
 								echo "<span class='sp_item_name'>".$row['name']."</span>";
 								echo "<br>";
 								$sql2 = "SELECT id,url FROM image_product WHERE id = $id";
 								$result2 = mysqli_query($conn,$sql2);
 								$row2 = mysqli_fetch_assoc($result2);
 								$url = $row2['url'];
 								echo "<img src='$url'>";
 								echo "<br>";
 								echo "<span class='sp_item_price'>".$row['price']."</span>"." VND";
 								echo "</a>";
 							echo "</td>";
 							
 							if($count % 5 == 0) break;
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