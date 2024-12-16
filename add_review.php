<?php
include("connection.php");
session_start();

if (!isset($_SESSION['user'])) {
    echo "<script>alert('Please log in to the site...'); window.location.href='product.php';</script>";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Review</title>
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
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        label {
            font-size: 1.2em;
        }
        input, select, textarea {
            padding: 10px;
            font-size: 1em;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            font-size: 1.2em;
            color: #fff;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .back-button {
            background-color: #6c757d;
            margin-top: 10px;
        }
        .back-button:hover {
            background-color: #5a6268;
        }
    </style>
</head>
<body>
<button class="back-button" onclick="history.back()">Back</button>
    <div class="container">
        <h1>Add a Review</h1>
        <form method="POST" action="">
            <input type="hidden" name="product_id" value="<?php echo isset($_GET['product_id']) ? htmlspecialchars($_GET['product_id']) : ''; ?>">
            <input type="hidden" name="user_id" value="<?php echo isset($_GET['user_id']) ? htmlspecialchars($_GET['user_id']) : ''; ?>">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
            <label for="rating">Rating:</label>
            <select id="rating" name="rating" required>
                <option value="excellent">Excellent</option>
                <option value="good">Good</option>
                <option value="average">Average</option>
                <option value="poor">Poor</option>
            </select>
            <label for="message">Review Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>
            <button type="submit">Submit Review</button>
        </form>
    </div>
</body>
</html>
<?php
include('connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_id = isset($_POST['product_id']) ? intval($_POST['product_id']) : 0;
    $user_id = $_SESSION["user"]["user_id"];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $message = $_POST['message'];
    $stmt = "INSERT INTO reviews (product_id, user_id, name, email, rating, message) VALUES ($product_id, $user_id, '$name', '$email', '$rating', '$message')";
    
    if (mysqli_query($conn, $stmt)) {
        echo "<script>alert('Your review has been added successfully.'); window.location.href='add_review.php?product_id=$product_id';</script>";
    } else {
        echo "<script>alert('Please try again.'); window.location.href='add_review.php';</script>";
    }

    $conn->close();
}
?>
