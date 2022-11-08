<?php 
    include_once(SRC_PATH.'getProducts.php');

    $products = getProducts();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        p {
            margin: 0 0 8px 0;
        }

        form {
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

        button {
            display: block;
            margin: 0 auto;
            padding: 10px 16px;
            border: none;
            border-radius: 6px;
            color: #fff;
            background-color: rgba(60, 179, 113, .8);
            transition: .1s ease-in-out;
            cursor: pointer;
        }

        button:hover {
            background-color: rgba(60, 179, 113, .7);
        }
    </style>
</head>
<body>
    <form method="post" action="/actions/addProduct.php">
        <ul>
            <?php
                foreach($products as $product) {
                    echo "<li>";
                        echo "<div>";
                            echo "<p><b>".$product['productName']."</b></p>";
                            echo "<p>Count: ".$product['count']."</p>";
                        echo "</div>";
                        echo '<div class="price-and-select">';
                            echo "<p>".$product['price']." $</p>";
                            echo '<input type="checkbox" name="'.$product['productName'].'" />';
                        echo "</div>";
                    echo "</li>";
                }
            ?>
        </ul>
        <button type="submit">Submit</button>
    </form>
</body>
</html>