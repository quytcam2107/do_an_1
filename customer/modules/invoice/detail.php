
<?php  
if (!isset($_GET['id'])) {
	header("location:index.php");
}
	$id_invoice=$_GET['id'];
	$title="Hóa đơn chi tiết đơn hàng #$id_invoice";
	$sql="SELECT product.name,product.price,detail_invoice.quantity,detail_invoice.id_product from product INNER JOIN detail_invoice ON detail_invoice.id_product=product.id where detail_invoice.id_invoice='$id_invoice'";
	$rs=mysqli_query($conn,$sql);
	if (!$rs) {
		die("Error :".mysqli_error($conn));
	}
 require_once 'layout/header.php';
?>
<style type="text/css">
	*{
		color: black;
	}
	table,th,tr,td{
		border: 1px solid black;
		border-collapse: collapse;
		box-shadow: none;
		text-align: center;
	}
	tr.dt{
		height: 10px;
	}
	tr.dt td{
		height: 10px;
	}
	img{
		width: 220px;
		height: 200px;
	}
</style>
<div>
	<h2>Hóa đơn chi tiết #<?php echo $id_invoice ?></h2>
	<table style="width: 90%;margin: auto;">
		<tr>
			<th>STT</th>
			<th>Sản phẩm</th>
			<th>Số lượng</th>
			<th>Giá</th>
		</tr>
		<?php  
		if (mysqli_num_rows($rs)==0) {
			echo "<tr>";
				echo "<th colspan='4'>Hóa đơn trống</th>";
			echo "</tr>";
		}
		else{
			$count=0;
			$total_amount=0;
			$ssp=0;
			foreach ($rs as $row) {
				$count++;
				echo "<tr class='dt'>";
					echo "<td class='dt' style='width:10%;'>$count</td>";
					echo "<td class='dt'>";
					$id=$row['id_product'];
						$name=$row['name'];
						echo $name."<br>";
							//hình ảnh
							$sqlp="SELECT product.id,image_product.url from product inner join image_product on product.id=image_product.id where product.id='$id'";
							$rsp=mysqli_query($conn,$sqlp);
							$rowp=mysqli_fetch_assoc($rsp);
							$idp=$rowp['id'];
							$url=$rowp['url'];
							
								echo "<img src='$url' width='80px'>";
							
					echo "</td>";
					echo "<td class='dt'>".$row['quantity']."</td>";
					$tooltip=ceil($row['price']*23210);
					echo "<td>".$row['price']." VND</td>";
					$total_amount += ($row['price']*$row['quantity']);
					$ssp +=$row['quantity'];
				echo "</tr>";
			}
			echo "<tr>";
				
				$alltip1sp=ceil($total_amount*23210);
				
			echo "</tr>";
		}
		?>
	</table>
</div>

<?php  
 require_once 'layout/footer.php';
?>