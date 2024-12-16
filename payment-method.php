<?php
include("connection.php");
session_start();

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Please login to the site...'); window.location.href='login.php';</script>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $payment_method = $_POST['payment_method'];
    switch ($payment_method) {
        case 'cash_on_delivery':
          
                echo "<script>window.location.href='order-success.php';</script>";
            
            break;
        case 'qr_code':
            echo "<script>window.location.href='qr-code-payment.php';</script>";
            break;
        default:
            echo "<script>alert('Please select a valid payment method.'); window.location.href='cart.php';</script>";
    }
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Payment Method</title>
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
        }

        .payment-title {
            font-size: 2em;
            margin-bottom: 20px;
            text-align: center;
        }

        .payment-option {
            margin-bottom: 15px;
        }

        .submit-button {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #ff9900;
            color: white;
            border: none;
            border-radius: 20px;
            text-align: center;
            font-size: 1.25em;
            text-decoration: none;
        }

        .submit-button:hover {
            background-color: #e68a00;
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
            background-color: #cc0000;
        }
    </style>
</head>
<body>
<a href="javascript:history.back()" class="back-button" style="margin-left: 20px;">Back</a>
<div class="container">
    <h2 class="payment-title">Choose Payment Method</h2><br>
    <form method="post" action="">
        <div class="form-check payment-option">
            <input class="form-check-input" type="radio" name="payment_method" id="cash_on_delivery" value="cash_on_delivery" required>
            <label class="form-check-label" for="cash_on_delivery">
                <h5>Cash on Delivery</h5>
            </label>
        </div>
        <div class="form-check payment-option">
            <input class="form-check-input" type="radio" name="payment_method" id="qr_code" value="qr_code" required>
            <label class="form-check-label" for="qr_code">
                <h5>Internet Banking</h5>
            </label>
        </div>
        <button type="submit" class="submit-button" name="submit">Proceed</button>
        
    </form>
</div>
</body>
</html>