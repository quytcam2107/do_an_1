<?php 
$id = $_SESSION['id_image'];
	if (!isset($_GET['id'])){
		header("location:index.php");
		die();
	}
	$id_invoice= $_GET['id'];
	$sql = "SELECT product.name,product.price, detail_invoice.quantity FROM product INNER JOIN detail_invoice ON detail_invoice.id_product = product.id WHERE detail_invoice.id_invoice = '$id_invoice'";
	$result = mysqli_query($conn,$sql);
	if ($result ==  false) {
		die("Error :".mysqli_error($conn));
	}

 ?>

 <?php 
$tittle = "Hoá đơn chi tiết";
require_once 'layout/header.php';
?>
<style type="text/css">
	*{
		color: black;
		box-sizing: border-box;
	}
	img{
		width: 200px;
		height: 100px;
	}
	table{
		width: 100%;
		border-collapse: collapse;
	}
	tr,td,th{
		text-align: center;
		
		border:1px solid black;
	}
</style>
<div>
	<h2>Hoá đơn chi tiết #<?php echo $id_invoice; ?></h2>
	<table>
		<tr>
			<th>STT</th>
			<th>Sản phẩm</th>
			<th>Giá</th>
			<th>Số lượng</th>
			<th>Tổng tiền </th>
		</tr>
		<?php 
		//sql2
			$sql2 = "SELECT * FROM image_product WHERE id = '$id'";
			$result2= mysqli_query($conn,$sql2);
			if ($result2 == false) {
				echo "Error : ".mysqli_error($conn);
			}
			$row2= mysqli_fetch_assoc($result2);
			$url2= $row2['url'];
		 ?>
		 <?php 
		 // sql3
		  $sql3 = "SELECT * FROM invoice WHERE id = '$id_invoice'";
			$result3= mysqli_query($conn,$sql3);
			if ($result3 == false) {
				echo "Error : ".mysqli_error($conn);
			}
			$row3= mysqli_fetch_assoc($result3);
			$row3= $row3['total_money'];
		  ?>
		<?php 
			if (mysqli_num_rows($result) == 0) {
				echo "<h2>Hoá đơn trống</h2>";
			}
			else{
				$count = 0;
				foreach ($result as $row) {
					echo "<tr>";
					$count ++;
					echo "<td>$count</td>";
					echo "<td>";
						echo $row['name'];
						echo "<br>";
						echo "<img src='$url2' width='20px;'>";
					echo "</td>";
					echo "<td>".$row['price']."</td>";
					echo "<td>".$row['quantity']."</td>";
					echo "<td>".$row3."</td>";
					echo "</tr>";
				}
			}
		 ?>
	</table>
</div>

<?php 
	require_once 'layout/footer.php';
 ?>
