<?php 
	$total_amount = "";
	if(isset($_POST['btn_pay'])) {
		$name_receiver = $_POST['name_receiver'];
		$phone_receiver = $_POST['phone_receiver'];
		$address_receiver = $_POST['address_receiver'];
		$total_amount = $_SESSION['total_amount'];
		$id_customer = $_SESSION['user']['id'];

		$sql = "INSERT INTO invoice VALUES(NULL,current_timestamp(),'$total_amount','$name_receiver','$address_receiver','$phone_receiver',0,NULL,'$id_customer')";
		$result = mysqli_query($conn,$sql);
		if ($result == false) {
			echo "ERROR :".mysqli_error($conn);
		}
		
		else{
			$id_invoices = mysqli_insert_id($conn); 
			foreach($_SESSION['cart'] as $id_product => $quantity){
				$sql = "INSERT INTO detail_invoice VALUES('$id_invoices','$id_product','$quantity')";
				$result = mysqli_query($conn,$sql);
				if ($result == false) {
					echo "Error :".mysqli_error($conn);
				}
			}
			unset($_SESSION['cart']);
			unset($_SESSION['total_amount']);
		}
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
</style>
<div style="padding: 16px;"> 
	<h1>Đặt hàng thành công . Mã đơn hàng là #
		<a href='index.php?module=invoice&action=detail&id=<?php echo $id_invoices; ?>'><?php echo $id_invoices; ?></a>
		<p style="color: red;">Nhớ là đừng có bùng hàng , shipper oánh nhé !</p>
</div>
<?php 
	require_once 'layout/footer.php';
 ?>


