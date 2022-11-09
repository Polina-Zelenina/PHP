<?php 
	require_once '..'.DIRECTORY_SEPARATOR.'config.php';
	require_once(SRC_PATH.'getProducts.php');

	$products = getProducts();

	foreach ($_POST as $key => $value) {
		$_SESSION[$key] = $products[array_search($key, array_column($products, 'productName'))];
	}

	header('Location: /pages/selectedProducts.php');
	die();
?>