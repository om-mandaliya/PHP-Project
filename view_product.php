<?php
include("connection.php");
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
if (isset($_GET['pid'])) {
    $product_id = $_GET['pid'];
    $qdelete = "DELETE FROM products WHERE product_id=" . $product_id;
    $rsdelete = mysqli_query($conn, $qdelete);
}
$results_per_page = 10;
$sql = "SELECT * FROM products";
$result = $conn->query($sql);
$number_of_results = $result->num_rows;
$number_of_pages = ceil($number_of_results / $results_per_page);
if (!isset($_GET['page'])) {
    $page = 1;
} else {
    $page = $_GET['page'];
}
$this_page_first_result = ($page - 1) * $results_per_page;
$sql = "SELECT * FROM products LIMIT " . $this_page_first_result . ',' . $results_per_page;
$result = $conn->query($sql);
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
        .table-container {
            padding: 20px;
            background-color: white;
            margin: 20px 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 2000px;
            overflow-x: auto;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            background-color: aliceblue;
            border-collapse: collapse;
        }
        .table th,
        .table td {
            padding: 1rem;
            vertical-align: middle;
            border: 1px solid #dee2e6;
            text-align: center;
        }
        .table thead th {
            vertical-align: bottom;
            border-bottom: 2px solid #dee2e6;
            background-color: #f1f1f1;
            font-size: 15px;
        }
        .table tbody tr:hover {
            background-color: #f9f9f9;
        }
        .container {
            max-width: 2000px;
            margin: 0 auto;
            padding: 20px;
        }
        .header,
        .footer {
            background-color: #232f3e;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        .pagination {
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 20px 0;
            border-radius: 4px;
        }
        .pagination a {
            color: #333;
            padding: 8px 16px;
            text-decoration: none;
            border: 1px solid #ddd;
            transition: background-color .3s;
            display: inline-block;
        }
        .pagination a.active {
            background-color: #232f3e;
            color: cadetblue;
            border: 1px solid #232f3e;
        }
        .pagination a:hover:not(.active) {
            background-color: #ddd;
        }
    </style>
    
</head>
<body>
<div class="colorlib-loader"></div>
    <?php include('header1.php'); ?>
    <div class="container table-container" style="margin-top: 50px; margin-left: 190px;">
        <div class="text-center">
            <h2><b>View Products</b></h2>
        </div>
        <table class="table table-bordered text-black">
            <thead>
                <a class="nav-link" href="add_product.php" style="margin-top: 10px; font-size: 20px;">Add Products</a>
                <tr>
                    <th class="text-center"><b>Product Id</b></th>
                    <th class="text-center"><b>Product Name</b></th>
                    <th class="text-center"><b>Product Price</b></th>
                    <th class="text-center"><b>Product Image</b></th>
                    <th class="text-center"><b>Product Color</b></th>
                    <th class="text-center"><b>Product Material</b></th>
                    <th class="text-center"><b>Product Brand</b></th>
                    <th class="text-center"><b>Product Sport</b></th>
                    <th class="text-center"><b>Action</b></th>
                    <th class="text-center"><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                        <td class='p-5' style='margin-top:10px; font-weight:bold;'>" . $row["product_id"] . "</td>
                        <td class='p-3' style='margin-top:10px; font-weight:bold;'>" . $row["product_name"] . "</td>
                        <td class='p-3 mt-5' style='margin-top:10px ; font-weight:bold;'>" . $row["product_price"] . "</td>
                        <td class='p-3'><img src='" . $row["product_image"] . "' alt='products' width='100'></td>
                        <td class='p-3 ' style='margin-top:10px;font-weight:bold;'>" . $row["product_color"] . "</td>
                        <td class='p-3' style='margin-top:10px; font-weight:bold;'>" . $row["product_material"] . "</td>
                        <td class='p-3' style='margin-top:10px;font-weight:bold;'>" . $row["product_brand"] . "</td>
                        <td class='p-3' style='margin-top:10px;font-weight:bold;'>" . $row["product_sport"] . "</td>
                        <td>
                            <form action='view_product.php' method='get' style='display:inline-block;'>
                                <input type='hidden' name='pid' value='" . $row['product_id'] . "' />
                                <button type='submit' class='btn btn-danger' style='margin-top:20px;' onclick='return confirm(\"Do you want to delete product id?\")'>Delete</button>
                            </form>
                        </td>
                        <td>
                            <form action='update_product.php' method='get' style='display:inline-block;'>
                                <input type='hidden' name='pid' value='" . $row['product_id'] . "' />
                                <button type='submit' class='btn btn-primary' style='margin-top:20px;'>Update</button>
                            </form>
                        </td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='11'>No products found</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="pagination">
            <?php
            for ($page = 1; $page <= $number_of_pages; $page++) {
                echo '<a href="view_product.php?page=' . $page . '">' . $page . '</a> ';
            }
            ?>
        </div>
    </div>
</div><br><br>
<div class="border border-5" style="background-color: bisque;">
</div>
</body>
</html>
