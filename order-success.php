<?php
session_start();
include 'connection.php';
$address = isset($_SESSION['user']['user_address']) ? $_SESSION['user']['user_address'] : '';
if (isset($_POST['submit'])) {
    $user_id = $_SESSION['user']['user_id'];
    $product_id = $_SESSION['cart']['product_id'];
    $total_price = $_SESSION['cart']['total'];
    $order_date = date('Y-m-d H:i:s');
    $sql = "INSERT INTO orders1 (user_id, product_id, total_price, payment_status, order_date, user_address) 
            VALUES ('$user_id', '$product_id', '$total_price', 'Cash on delivery', '$order_date', '$address')";

    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Order placed successfully. You can pay cash on delivery.'); window.location.href='order-success.php';</script>";
    } else {
        echo "<script>alert('Error: Could not place the order.'); window.location.href='cart.php';</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Order Success</title>
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
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            text-align: center;
        }

        .success-title {
            font-size: 2em;
            margin-bottom: 20px;
            color: green;
        }

        .success-message {
            font-size: 1.25em;
            margin-bottom: 20px;
        }

        .home-button {
            display: block;
            width: 150px;
            margin: 0 auto;
            padding: 10px;
            background-color: #ff9900;
            color: white;
            border: none;
            border-radius: 20px;
            text-align: center;
            font-size: 1.25em;
            text-decoration: none;
        }

        .home-button:hover {
            background-color: #e68a00;
        }

        .btn {
            background-color: #ff9900;
            color: #fff;
            padding: 12px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
            display: inline-block;
            transition: background 0.3s;
            border: none;
            cursor: pointer;
        }

        .btn:hover {
            background-color: #e68a00;
        }

        .address-section {
            margin-top: 40px;
            text-align: left;
        }

        .address-section label {
            font-size: 1.2em;
            font-weight: bold;
            color: #333;
        }

        .address-section input[type="radio"] {
            margin-right: 10px;
        }

        .address-display {
            display: inline-block;
            padding: 10px;
            border: 2px solid #ff9900;
            border-radius: 10px;
            background-color: #fff8e1;
            color: #333;
            font-size: 1.1em;
            max-width: 100%;
            word-wrap: break-word;
        }

        .edit-address-button {
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            border: none;
            cursor: pointer;
            text-decoration: none;
        }

        .edit-address-button:hover {
            background-color: #0056b3;
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
        <h2 class="success-title">Order Placed Successfully!</h2>
        <form method="post" action="">
            <div class="address-section">
                <label>Your Address:</label><br><br>
                <div class="address-display" style="margin-left: 50px;">
                    <input type="radio" value="<?php echo htmlspecialchars($address); ?>" name="address"  required>
                    <?php echo htmlspecialchars($address);?>
                </div><br>
            </div>
            <p class="success-message" style="margin-top: 40px;">Thank you for your order. You can pay cash on delivery. Your order will be processed shortly.</p>
            <button type="submit" class="btn" name="submit">Pay Now</button><br>
            <button type="button" onclick="processAddressChange()" class="btn edit-address-button"name="submit">Change Address</button>
<script>
function processAddressChange() {
    var selectedAddress = document.querySelector('input[name="address"]:checked');
    if (selectedAddress) {
        window.location.href = 'edit-address.php';
    } else {
        alert("Please select a address to change...");
    }
}
</script>
        </form>
    </div>
</body>
</html>
