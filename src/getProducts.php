<?php 
	function getProducts(): array {
	    $filePath = ROOT_PATH.'products.txt';
	    $file = fopen($filePath, 'r');

        $products = [];

        while(!feof($file)) {
            $row = explode(' ', fgets($file));
            $productName = ltrim($row[0]);
            $price = $row[1];
            $count = rtrim($row[2]);
            
            $products[] = [
                'productName' => $productName,
                'price' => $price,
                'count' => $count
            ];
        }

        fclose($file);
        return $products;
	}
?>