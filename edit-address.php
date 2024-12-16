<?php
session_start();
include 'connection.php'; 

// Check if the address exists in the session
$address = isset($_SESSION['user']['user_address']) ? $_SESSION['user']['user_address'] : '';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Address</title>
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

        .section-title {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            font-size: 1.2em;
            color: #555;
        }

        .form-control {
            padding: 10px;
            font-size: 1em;
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
            margin-top: 20px;
        }

        .address-display {
            padding: 10px;
            border: 2px solid #ff9900;
            border-radius: 10px;
            background-color: #fff8e1;
            color: #333;
            font-size: 1.1em;
        }

        .new-address {
            margin-top: 20px;
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
    <h2 class="section-title">Edit Address</h2>
    <form method="post" action="address-success.php">
        <div class="address-section">
            <label>Select Your Address:</label>
            <div class="address-display">
                <?php echo htmlspecialchars($address); ?>
            </div>
        </div>
        <div class="form-group new-address">
            <label>Enter a New Address:</label>
            <input type="text" name="new_address" class="form-control" placeholder="Enter new address" required>
        </div>
        <button type="submit" class="btn" name="submit">Confirm Address</button>
    </form>
</div>
</body>
</html>
