<?php 
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "DELETE FROM type WHERE id = '$id'";
	$result = mysqli_query($conn,$sql);
	if ($result == false) {
		echo "ERROR".mysqli_error($conn);
	}
	else{
		$info = "Đã Xoá Thành Công";
		header("location:index.php?module=type&action=list&info=$info");
	}
}
	
 ?>