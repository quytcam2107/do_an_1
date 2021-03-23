<?php 
	if (isset($_GET['id'])) {
		$id_invoice = $_GET['id'];
		$sql = "UPDATE invoice SET status=2 WHERE id = '$id_invoice'";
		$result = mysqli_query($conn,$sql);
		if ($result ==  false) {
			echo "Error:".mysqli_error($conn);
		}
		else{
			header("location:index.php?module=invoice&action=list");
			die();
		}
	}
 ?>