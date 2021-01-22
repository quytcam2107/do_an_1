<?php 
	unset($_SESSION['user']);
	header("Location:index.php?module=home&action=home");
 ?>