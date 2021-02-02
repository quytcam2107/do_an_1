<?php 

	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$sql = "DELETE FROM image_product WHERE id = '$id'";
		$result = mysqli_query($conn,$sql);
		if ($result == false) {
			echo "ERROR :".mysqli_error($conn);
		}
		else{
			header("location:index.php?module=products&action=delete&id=$id");
		}
	}
 ?>
<?php 
	require_once 'layout/header.php';
 ?>
<div>
	
</div>
 <?php 
 	require_once 'layout/footer.php';
  ?>