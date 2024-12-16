<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Reviews</title>
    <style>
        body {
            background-color: #f3f3f3;
            color: #111;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            font-size: 2.5em;
            margin-bottom: 20px;
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color: #232f3e;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        tr:hover {
            background-color: #e0e0e0;
        }
        .rating {
            color: #e67e22;
        }
        .back-button {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #232f3e;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            text-align: center;
        }
        .back-button:hover {
            background-color: #e67e22;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        include('connection.php');

        if (isset($_GET['product_id'])) {
            $product_id = intval($_GET['product_id']);

            $sql = "SELECT * FROM reviews WHERE product_id = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $product_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                echo "<h2>Reviews for Product ID: $product_id</h2>";
                echo "<table>";
                echo "<thead><tr><th>Name</th><th>Email</th><th>Message</th><th>Rating</th></tr></thead>";
                echo "<tbody>";
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . htmlspecialchars($row["name"]) . "</td><td>" . htmlspecialchars($row["email"]) . "</td><td>" . htmlspecialchars($row["message"]) . "</td><td class='rating'>" . htmlspecialchars($row["rating"]) . "</td></tr>";
                }
                echo "</tbody></table>";
            } else {
                echo "<p>No reviews found for this product.</p>";
            }
            $stmt->close();
        } else {
            echo "<p>No product ID provided.</p>";
        }

        $conn->close();
        ?>
        <a href="product1.php?product_id=<?php echo $product_id; ?>" class="back-button">Back to Product Details</a>
    </div>
</body>
</html>
