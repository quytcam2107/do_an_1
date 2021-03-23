<?php 
	if (isset($_GET['id'])) {
		$id = $_GET['id'];

		$sql = "DELETE FROM product WHERE id = '$id'";
		$resqult = mysqli_query($conn,$sql);
		if ($resqult == false) {
			echo "ERROR1 :".mysqli_error($conn);
			
		}
		else{
			header("location:index.php?module=products&action=list");
		}
	}
 ?>