<?php
session_start();
include 'connection.php'; 
if(isset($_POST['Submit']))
{
    $user_id = $_SESSION['user']['user_id']; 
    $product_id=$_SESSION['cart']['product_id'];
    $total_price = $_SESSION['cart']['total']; 
    $order_date = date('Y-m-d H:i:s');
    $address = $_SESSION['user']['user_address'];
    $sql = "INSERT INTO orders1 (user_id,product_id, total_price, payment_status,  order_date,user_address) VALUES ('$user_id','$product_id', '$total_price', 'Internet Banking', '$order_date','$address')";
    
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Order placed successfully. You can pay cash on delivery.'); window.location.href='qr-code-payment.php';</script>";
    } else {
        echo "<script>alert('Error: Could not place the order.'); window.location.href='cart.php';</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Internet Banking Payment</title>
    <style>
        <style>
        body {
            font-family:'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #232f3e;
            color: #333;
        }
        .container {
            max-width: 400px;
            margin: 40px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        
        }

        h1 {
            font-size: 24px;
            color: #232f3e;
            border-bottom: 2px solid #e7e7e7;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            font-size: 16px;
            color: #111;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
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

        footer {
            background-color: #232f3e;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 14px;
            position: fixed;
            bottom: 0;
            width: 100%;
            border-top: 1px solid #e7e7e7;
        }

        .header {
            background-color: #232f3e;
            color: #fff;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            position: fixed;
            top: 0;
            width: 100%;
            border-bottom: 1px solid #e7e7e7;
            z-index: 1000;
        }

        .qr-code {
            text-align: center;
            margin-top: 20px;
        }

        .qr-code img {
            width: 150px; 
            height: 150px; 
            border: 1px solid #ddd;
            border-radius: 8px;
        }
    </style>
    </style>
</head>

<body>
   
    <form action="payment-method.php">
        <input type="submit" value="Back" class="btn btn-danger" style="margin-top: 15px;margin-left: 15px;">
    </form>
    <div class="container" style="margin-top: 10px;">
        <h1>Internet-Banking Payment</h1>
        <form method="POST" action="" style="height:300px;">
            <div class="qr-code">
                <img src="images/qr-code.webp" alt="QR Code" style="width:300px;height:200px;">
            </div><br>
            <button type="submit" class="btn" name="Submit">Pay Now</button>
        </form>
    </div>
</body>

</html>
