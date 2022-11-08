<?php 
	require_once '..'.DIRECTORY_SEPARATOR.'config.php';

	foreach ($_POST as $key => $value) {
		$_SESSION[$key] = $value;
	}

	header('Location: /pages/selectedProducts.php');
	die();
?>