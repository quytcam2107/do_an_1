<?php 
	$id = $_GET['id'];
	echo $id;
	unset($_SESSION['cart'][$id]);
	header("location:index.php?module=invoice&action=cart");
 ?>