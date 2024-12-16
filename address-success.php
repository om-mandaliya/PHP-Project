<?php
session_start();
include 'connection.php'; 
if (isset($_POST['submit'])) {
    $new_address = $_POST['new_address'];
    if (!empty($new_address)) {
        $_SESSION['user']['user_address'] = $new_address;
    }
}
if (!isset($_SESSION['user']['user_address'])) {
    header('Location: address-success.php');
    exit();
}
$address = $_SESSION['user']['user_address'];
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
            margin-top: 20px;
        }

        .btn:hover {
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
            background-color:#cc0000;
        }
    </style>
</head>
<body>
<a href="javascript:history.back()" class="back-button" style="margin-left: 12px;">Back</a>
<div class="container">
    <h2 class="success-title">Address Change Successfully</h2>
    <p class="success-message">Your address has been updated. The order will be delivered to:</p>
    <div class="address-display">
        <?php echo htmlspecialchars($address); ?>
    </div>
    <form method="post" action="order-success.php">
        <button type="submit" class="btn" name="btn">Proceed to Order Summary</button>
    </form>
</div>
</body>
</html>
