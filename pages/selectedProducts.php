<?php 
	require_once '..'.DIRECTORY_SEPARATOR.'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        p {
            margin: 0 0 8px 0;
        }

        .products {
            width: 500px;
            margin: 0 auto;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 8px;
            padding: 8px 16px;
            border: 1px solid #262626;
            border-radius: 4px;
            cursor: pointer;
        }

        li:hover {
            border: 1px solid rgb(60, 179, 113);
        }

        .price-and-select {
            display: flex;
            align-items: center;
            grid-gap: 8px;
        }

        .price-and-select p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="products">
        <ul>
            <?php
                foreach($_SESSION as $key => $value) {
                    echo "<li>".$key."</li>";
                }
            ?>
        </ul>
    </form>
</body>
</html>