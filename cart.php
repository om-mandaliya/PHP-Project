<?php
include("connection.php");
session_start();

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Please login to the site...'); window.location.href='login.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background-color: #f3f3f3;
            color: #111;
            font-family: 'Montserrat', sans-serif;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f9f9f9;
            font-weight: bold;
        }

        .cart-title {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .total-price {
            text-align: right;
            font-size: 1.5em;
            margin-top: 20px;
        }
        .delete-button, .update-button {
            background-color: #ff4d4d;
            color: white;
            border: none;
            padding: 5px 10px;
            cursor: pointer;
            border-radius: 5px;
        }

        .delete-button:hover, .update-button:hover {
            background-color: #cc0000;
        }

        .buy-now-button {
            display: block;
            width: 300px;
            margin: 40px auto 0;
            padding: 10px;
            background-color: #ff9900;
            color: white;
            border: none;
            border-radius: 20px;
            text-align: center;
            font-size: 1.25em;
            text-decoration: none;
        }

        .buy-now-button:hover {
            background-color: #e68a00;
        }

        .empty-cart-message {
            text-align: center;
            font-size: 1.25em;
            color: #666;
            margin-top: 40px;
        }
        .back-button {
            display: block;
            width: 100px;
            margin: 20px auto;
            padding: 10px;
            background-color: #232f3e;
            color: white;
            border: none;
            border-radius: 5px;
            text-align: center;
            font-size: 1em;
            text-decoration: none;
        }
        .back-button:hover {
            background-color:#cc0000;
        }
    </style>
</head>
<body>
<a href="javascript:history.back()" class="back-button" style="margin-left: 12px;">Back</a>
    <div class="container">
        <?php
        if (isset($_POST['delete'])) {
            $delete_cart_id = intval($_POST['cart_id']);
            $delete_sql = "DELETE FROM cart WHERE cart_id = ?";
            $delete_stmt = $conn->prepare($delete_sql);
            $delete_stmt->bind_param("i", $delete_cart_id);

            if ($delete_stmt->execute()) {
                // Success message can be added here
            } else {
                echo "<p>Error removing product from cart: " . $delete_stmt->error . "</p>";
            }

            $delete_stmt->close();
        }

        if (isset($_POST['update'])) {
            $update_cart_id = intval($_POST['cart_id']);
            $quantity = intval($_POST['quantity']);
            $product_size = intval($_POST['product_size']);
            $update_sql = "UPDATE cart SET quantity = ?, product_size = ? WHERE cart_id = ?";
            $update_stmt = $conn->prepare($update_sql);
            $update_stmt->bind_param("iii", $quantity, $product_size, $update_cart_id);

            if ($update_stmt->execute()) {
                // Success message can be added here
            } else {
                echo "<p>Error updating cart: " . $update_stmt->error . "</p>";
            }

            $update_stmt->close();
        }

        if (isset($_POST['add'])) {
            
            $product_id = intval($_POST['product_id']);
           
            $product_name = $_POST['product_name'];
            $product_price = floatval($_POST['product_price']);
            $quantity = intval($_POST['quantity']);
            $product_size = intval($_POST['product_size']);
            
            $sql = "INSERT INTO cart (product_id, product_name, product_price, quantity, product_size) VALUES (?, ?, ?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("isdis", $product_id, $product_name, $product_price, $quantity, $product_size);
            if ($stmt->execute()) {
                
                echo "<p>Product added to cart.</p>";
                $_SESSION['cart']['product_id'] = $product_id;
            } else {
                echo "<p>Error adding product to cart: " . $stmt->error . "</p>";
            }

            $stmt->close();
        }

        $sql = "SELECT * FROM cart";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            echo '<h2 class="cart-title">Your Cart</h2>';
            echo '<table>';
            echo '<tr><th>ID</th><th>Name</th><th>Price</th><th>Quantity</th><th>Size</th><th>Total</th><th>Action</th></tr>';
        
            $total = 0;
        
            while ($row = $result->fetch_assoc()) {
                $product_total = $row['product_price'] * $row['quantity'];
                $total += $product_total;
        
                // Store the product ID in the session
                $_SESSION['cart']['product_id'] = $row['product_id'];
                $_SESSION['cart']['total'] = $total;
        
                echo '<tr>';
                echo '<td>' . htmlspecialchars($row['product_id']). '</td>';
                echo '<td>' . htmlspecialchars($row['product_name']) . '</td>';
                echo '<td>' . htmlspecialchars($row['product_price']) . '</td>';
                echo '<form method="post" action="">';
                echo '<td><input type="number" name="quantity" value="' . htmlspecialchars($row['quantity']) . '" min="1" style="width: 60px;"></td>';
                echo '<td><input type="number" name="product_size" value="' . htmlspecialchars($row['product_size']) . '" min="6" max="11" style="width: 60px;"></td>';
                echo '<td>' . htmlspecialchars($product_total) . '</td>';
                echo '<td>
                        <input type="hidden" name="cart_id" value="' . htmlspecialchars($row['cart_id']) . '">
                        <input type="submit" name="delete" value="Delete" class="delete-button" style="font-size: 17px;">
                        <input type="submit" name="update" value="Update" class="update-button" style="font-size: 17px; margin-top:1px;">
                      </td>';
                echo '</form>';
                echo '</tr>';
            }
            echo '</table>';
            echo '<div class="total-price" name="total-price">Total: ' . htmlspecialchars($total) . '</div>';
        } else {
            echo '<p class="empty-cart-message">Your cart is empty.</p>';
        }
        
        $conn->close();
        ?>
    </div>
    <form action="payment-method.php">
        <button class="buy-now-button">Buy Now</button>
    </form>
    
</body>
</html>
<?php
if (!isset($_SESSION['user'])) {
    echo "<script>alert('Please login to the site...'); window.location.href='login.php';</script>";
    exit();
}

if (isset($_SESSION['cart']['total'])) {
    $total_price = $_SESSION['cart']['total'];
} else {
    echo "<div class='total-price'>Total Price: ₹0</div>";
}


?>
