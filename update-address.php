<?php
session_start();
include 'connection.php'; 

if(isset($_POST['update_address'])) {
    $_SESSION['user']['user_address'] = $_POST['new_address'];
    echo "<script>alert('Address updated successfully.'); window.location.href='order-page.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Address</title>
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

        .form-group {
            margin-bottom: 20px;
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
    </style>
</head>
<body>
<?php
    $address = $_SESSION['user']['user_address'];
    ?>
<div class="container">
    <h2 class="success-title">Update Your Address</h2>
    <form method="post" action="order-success.php">
        <div class="form-group">
            <label for="new_address"><b>Enter New Address:</b></label>
            <input type="text" class="form-control" id="new_address" value="<?php echo $address; ?>" name="new_address" required>
        </div>
        <button type="submit" class="btn" name="update_address">Update Address</button>
    </form>
</div>
</body>
</html>
