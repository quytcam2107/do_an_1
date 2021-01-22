<?php 
	unset($_SESSION['user']);
	header("Location:index.php?module=common&action=login");
 ?>