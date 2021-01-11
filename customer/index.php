<?php
	$module = $action = "";
	if (isset($_GET['module'])) {
		$module = $_GET['module'];
	}
	if (isset($_GET['action'])) {
		$action = $_GET['action'];
	}
	if($module == "" || $action == ""){
		$module = "common";
		
	}
 ?>