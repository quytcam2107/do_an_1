<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');
	if (!isset($_SESSION['user']['id'])) {
		header("location:index.php");
		die();
	}
 ?>
<?php 
$tittle = "Lịch sử mua hàng";
require_once 'layout/header.php';
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
	.a_accept{
		text-decoration: none;
	}
</style>
<?php 
	$id_customer =$_SESSION['user']['id'];
	$sql = "SELECT id,create_at,total_money,status,receiver,address,phone FROM invoice WHERE id_customer = '$id_customer' ORDER BY id DESC";
	$result = mysqli_query($conn,$sql);
	if ($result == false) {
		die("Error :".mysqli_error($conn));
	}
 ?>
<div>
	<h1>Lịch sử mua hàng</h1>
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
			}else{
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
							echo "<button><a class='a_accept' href='index.php?module=invoice&action=cancel&id=$id_invoice'>Huỷ đơn hàng</a></button>";
						}
					echo "</td>";
					echo "<tr>";
					
				}
			}
		 ?>
	</table>
</div>
<?php 
	require_once 'layout/footer.php';
 ?>