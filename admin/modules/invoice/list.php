<?php 
	$tittle = "Quản lý hoá đơn";
	require_once("layout/header.php");
 ?>
 <?php 
 	$sql = "SELECT * FROM invoice ORDER BY create_at  DESC ";
 	$result = mysqli_query($conn,$sql);
 	if ($result == false) {
 		echo "Error :".mysqli_error($conn);
 	}
  ?>
  <style type="text/css">
	*{
		color: black;
	}
	table{
		width: 100%;
		border-collapse: collapse;
	}
	tr,th,td{
		text-align: center;
		border: 1px solid black;
	}
</style>
 <div>
 	<table>
		<tr>
			<th>Mã hoá đơn</th>
			<th>Thông tin khách hàng</th>
			<th>Ngày đặt hàng</th>
			<th>Tổng tiền</th>
			<th>Trạng thái</th>
		</tr>
		<?php 
			if (mysqli_num_rows($result) == 0) {
				echo "<h2>Chưa có thông tin</h2>";
			}
			else{
				foreach ($result as $row) {
					$id_invoice = $row['id'];
					echo "<tr>";
					echo "<td>";
						echo "<a href='index.php?module=invoice&action=detail&id=$id_invoice'>".$id_invoice."</a>";
					echo "</td>";
					echo "<td>";
					echo "Tên người nhận :".$row['receiver'];
					echo "<br>";
					echo "Địa chỉ :".$row['address'];
					echo "<br>";
					echo "Số điện thoại :".$row['phone'];
					echo "</td>";
					// echo "<td>".$row['create_at']."</td>";
					echo "<td>";
					echo date_format(date_create($row['create_at']), 'd-m-Y H:i:s');
					echo "</td>";
					echo "<td>".$row['total_money']."</td>";
					echo "<td>";
						$arrStatus = array(0=> "Chưa duyệt",1=> "Đã duyệt",2=>"Thành công",3=>"Đã huỷ");
						echo $arrStatus[$row['status']];
						if ($row['status'] == 0) {
							echo "<button><a href='index.php?module=invoice&action=accept&id=$id_invoice'>Duyệt đơn hàng</a></button>";
						}
						else if($row['status'] == 1){
							echo "<button><a href='index.php?module=invoice&action=success&id=$id_invoice'>Xác nhận thành công</a></button>";
						}
					echo "</td>";
					echo "<tr>";
					
				}
			}
		 ?>
	</table>
 </div>
 <?php 
	require_once("layout/footer.php");
 ?>
 <!DOCTYPE html>
 