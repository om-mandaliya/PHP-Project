<!DOCTYPE html>
<html lang="en">
<head>
    <title>Products</title>
    <style>
        body {
            background-color: #f3f3f3;
            color: #111;
            font-family: 'Montserrat', sans-serif;
            
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 300px;
            transition: transform 0.3s;
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1.5em;
            margin-bottom: 10px;
        }

        .card-description {
            font-size: 1em;
            margin-bottom: 10px;
        }

        .btn-custom {
            margin-top: 10px;
            padding: 10px 20px;
            font-size: 16px;
            background-color: #f0c14b;
            border: none;
            color: #111;
            text-decoration: none;
            display: inline-block;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .search-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .search-input {
            padding: 10px;
            font-size: 16px;
            width: 200px;
        }

        .search-button {
            padding: 10px 10px;
            font-size: 16px;
            background-color: #f0c14b;
            border: none;
            color: #111;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="colorlib-loader"></div>
    <div>
        <?php include('header.php'); ?>
    </div>
<br><br>
    <div class="search-container">
        <form method="GET" action="">
            <input type="text" name="search" class="search-input" placeholder="Search for products...">
            <button type="submit" class="search-button">Search</button>
        </form>
    </div>

    <div class="card-container" style="margin-top: 50px;">
        <?php include('connection.php'); 

        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $sql = "SELECT * FROM products WHERE product_name LIKE '%$search%'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<form action="product1.php" method="GET" class="card">';
                echo "<img src='" . htmlspecialchars($row["product_image"]) . "' style='height : 300px;'>";
                echo '<div class="card-body">';
                echo '<h5 class= "text-center"> '.$row["product_name"].'</h5>';
                echo '<h5 class= "text-center">'.$row["product_price"].''.''.'₹'.'</h5>';
                echo '<input type="hidden" name="product_id" value="'.$row["product_id"].'">';
                echo '<div class="text-center">';
                echo '<button type="submit" class="btn-custom" name="submit">View Details</button>';
                echo '</div>';
                echo '</div>';
                echo '</form>';
            }
        } else {
            echo "0 results";
        }
        $conn->close();
        ?>
    </div>

    <br><br>
    <div class="border border-5" style="background-color: bisque;">
            <div class="border border-5" style="background-color: #232f3e;">
                <?php include('footer.php'); ?>
            </div>
        </div>
</body>
</html>
