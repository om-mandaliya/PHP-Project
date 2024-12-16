<?php
include("connection.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['update'])) {
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_image = $_POST['product_image'];
    $product_color = $_POST['product_color'];
    $product_material = $_POST['product_material'];
    $product_brand = $_POST['product_brand'];
    $product_size = $_POST['product_size'];
    $product_sport = $_POST['product_sport'];
    
    $query = "UPDATE products SET 
              product_name='$product_name', 
              product_price='$product_price', 
              product_image='$product_image', 
              product_color='$product_color', 
              product_material='$product_material', 
              product_brand='$product_brand', 
              product_size='$product_size', 
              product_sport='$product_sport' 
              WHERE product_id='$product_id'";

    if ($conn->query($query) === TRUE) {
        header("Location: view_product.php");
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

if (isset($_GET['pid'])) {
    $product_id = $_GET['pid'];
    $query = "SELECT * FROM products WHERE product_id='$product_id'";
    $result = $conn->query($query);
    $product = $result->fetch_assoc();
} else {
    header("Location: view_product.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body {
            background-color: #f8f9fa;
            color: #333;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-group {
            margin-bottom: 1rem;
        }
        .form-group label {
            display: block;
            margin-bottom: .5rem;
        }
        .form-group input {
            width: 100%;
            padding: .5rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .btn {
            display: inline-block;
            padding: .5rem 1rem;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            text-align: center;
            cursor: pointer;
        }
        .btn-danger {
            background-color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Product</h2>
        <form action="update_product.php" method="post">
            <input type="hidden" name="product_id" value="<?php echo $product['product_id']; ?>">
            <div class="form-group">
                <label for="product_name">Product Name</label>
                <input type="text" id="product_name" name="product_name" value="<?php echo $product['product_name']; ?>">
            </div>
            <div class="form-group">
                <label for="product_price">Product Price</label>
                <input type="text" id="product_price" name="product_price" value="<?php echo $product['product_price']; ?>">
            </div>
            <div class="form-group">
                <label for="product_image">Product Image</label>
                <input type="text" id="product_image" name="product_image" value="<?php echo $product['product_image']; ?>">
            </div>
            <div class="form-group">
                <label for="product_color">Product Color</label>
                <input type="text" id="product_color" name="product_color" value="<?php echo $product['product_color']; ?>">
            </div>
            <div class="form-group">
                <label for="product_material">Product Material</label>
                <input type="text" id="product_material" name="product_material" value="<?php echo $product['product_material']; ?>">
            </div>
            <div class="form-group">
                <label for="product_brand">Product Brand</label>
                <input type="text" id="product_brand" name="product_brand" value="<?php echo $product['product_brand']; ?>">
            </div>
            <div class="form-group">
                <label for="product_size">Product Size</label>
                <input type="text" id="product_size" name="product_size" value="<?php echo $product['product_size']; ?>">
            </div>
            <div class="form-group">
                <label for="product_sport">Product Sport</label>
                <input type="text" id="product_sport" name="product_sport" value="<?php echo $product['product_sport']; ?>">
            </div>
            <button type="submit" name="update" class="btn">Update</button>
        </form>
    </div>
</body>
</html>
