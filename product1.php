<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product Details</title>
    <style>
        body {
            background-color: #f3f3f3;
            color: #111;
            font-family: 'Montserrat', sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            display: flex;
            gap: 20px;
        }

        .product-image {
            width: 100%;
            height: 500px;
            object-fit: cover;
            border-radius: 10px;
            border: 2px solid #111;
        }

        .product-details {
            width: 50%;
        }

        .product-title {
            font-size: 2em;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 1.5em;
            margin-bottom: 10px;
            color: #e67e22;
        }

        .product-description-table {
            width: 100%;
            border-collapse: collapse;
            margin-left: 90px;
        }

        .product-description-table th,
        .product-description-table td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .product-description-table th {
            background-color: #f9f9f9;
            font-weight: bold;
        }

        .add {
            color: #f9f9f9;
            background-color: #111;    
        }
    </style>
</head>

<body>
    <div class="colorlib-loader"></div>

    <div>
        <?php include ('header.php'); ?>
    </div>
    <form action="product.php">
        <button type="submit" class="add btn-lg" style="margin-left:15px; margin-top:25px;" name="add">Back</button>
    </form>
    <div class="container">
        <?php
        include ('connection.php');

        if (isset($_GET['product_id'])) {
            $product_id = intval($_GET['product_id']);

            $sql = "SELECT * FROM products WHERE product_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $product_id);
            $stmt->execute();
            $result = $stmt->get_result();
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<br>";
                    echo "<div class='product-image-container'>";
                    echo "<br>";
                    echo "<img src='" . htmlspecialchars($row["product_image"]) . "' class='product-image border border-5' style='margin-top:20px;'>";
                    echo "</div>";
                    echo "<div class='product-details'>";

                    echo '<h4 class="product-title text-center" style="margin-left:90px;">' . htmlspecialchars($row["product_name"]) . '</h4>';

                    echo '<table class="product-description-table">';
                    echo '<tr><th>Price</th><td>' . htmlspecialchars($row["product_price"]) . '</td></tr>';
                    echo '<tr><th>Color</th><td>' . htmlspecialchars($row["product_color"]) . '</td></tr>';
                    echo '<tr><th>Material</th><td>' . htmlspecialchars($row["product_material"]) . '</td></tr>';
                    echo '<tr><th>Brand</th><td>' . htmlspecialchars($row["product_brand"]) . '</td></tr>';
                   
                    echo '<tr><th>Sport</th><td>' . htmlspecialchars($row["product_sport"]) . '</td></tr>';
                    echo '</table>';
                    echo '<br>';
                    echo '<form action="cart.php" method="POST">';
                    echo '<input type="hidden" name="product_id"  value="' . htmlspecialchars($row["product_id"]) . '">';
                    echo '<input type="hidden" name="product_name" value="' . htmlspecialchars($row["product_name"]) . '">';
                    echo '<input type="hidden" name="product_price" value="' . htmlspecialchars($row["product_price"]) . '">';
                    echo '<label for="quantity" style="margin-left: 90px; font-size:20px;"><h4>Quantity:</h4></label>';
                    echo '<select id="quantity" name="quantity" style="width: 200px;height:30px;font-size:20px; margin-left: 10px; margin-right: 100px;">';
                    echo '<option value="1">1</option>';
                    echo '<option value="2">2</option>';
                    echo '<option value="3">3</option>';
                    echo '</select>';
                    echo '<br>';
                    echo '<label for="size" style="margin-left: 90px; font-size:20px;"><h4>Size:</h4></label>';
                    echo '<select id="size" name="product_size" style="width: 200px;height:30px;font-size:20px; margin-left: 10px; margin-right: 100px;">';
                    echo '<option value="6">6</option>';
                    echo '<option value="7">7</option>';
                    echo '<option value="8">8</option>';
                    echo '<option value="9">9</option>';
                    echo '<option value="10">10</option>';
                    echo '<option value="11">11</option>';
                    echo '<option value="12">12</option>';
                    echo '</select>';
                    echo '<br>';
                   
                    echo '<br>';
                    echo '<button type="submit" class="add-to-cart-button btn-lg btn-warning w-100"  style="margin-left:100px;" name="add">Add to Cart</button>';
                    echo '</form>';
                    

                    echo '<form action="add_review.php" style="margin-top:15px;">';
                    echo '<input type="hidden" name="product_id" value="' . htmlspecialchars($row["product_id"]) . '">';
                    echo '<button type="submit" class="add-to-cart-button btn-lg btn-success w-100" style="margin-left:100px;" name="add">Add to Review</button>';
                    echo '</form>';

                    echo '<form action="view_review.php" method="GET" style="margin-top:5px;" >';
                    echo '<input type="hidden" name="product_id" value="' . htmlspecialchars($row["product_id"]) . '">';
                    echo '<button type="submit" class="add-to-cart-button btn-lg btn-success w-100" style="margin-left:100px; margin-top:10px;" name="view">View Reviews</button>';
                    echo '</form>';

                    echo '</div>';
                }
            } else {
                echo "Product not found.";
            }
            $stmt->close();
        } else {
            echo "No product ID provided.";
        }

        $conn->close();

        ?>
    </div>
    <div class="border border-5" style="background-color: #232f3e; margin-top: 20px;">
        <?php include('footer.php'); ?>
    </div>
</body>

</html>
