<?php
include ("connection.php");
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
$sql = "SELECT * FROM reviews";
$result = $conn->query($sql);

if(isset($_GET['rid'])) {
    $review_id = $_GET['rid'];
    $qdelete = "DELETE FROM reviews WHERE review_id=" .$review_id;
    $rsdelete = mysqli_query($conn, $qdelete);
}
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
            margin: 20px auto;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 1200px;
        }
        .table {
            width: 100%;
            margin-bottom: 1rem;
            color: #212529;
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
        }
        .table tbody tr:hover {
            background-color: #f9f9f9;
        }
        .container {
            max-width: 1200px;
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

    </style>
</head>

<body>
<div class="colorlib-loader"></div>
    <?php include ('header1.php'); ?>

    <div class="container table-container" style="margin-top: 50px;margin-left: 190px;">

        <div class="text-center">
            <h2><b>View Reviews</b></h2>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center"><b>Review Id</b></th>
                    <th class="text-center"><b>Name</b></th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Rating</th>
                    <th class="text-center"><b>Message</b></th>
                    <th class="text-center"><b>Action</b></th>
                    
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td class='p-5' style='margin-top:10px; font-weight:bold;'>" . $row["review_id"] . "</td>
                               <td class='p-5' style='margin-top:10px; font-weight:bold;'>" . $row["name"] . "</td>
                               <td class='p-5' style='margin-top:10px; font-weight:bold;'>".$row['email']."</td>
                                <td class='p-5' style='margin-top:10px; font-weight:bold;'>".$row['rating']."</td>
                                 <td class='p-5' style='margin-top:10px; font-weight:bold;'>".$row['message']."</td>
                                
                                
                                <td>
                                    <form action='view_reviews.php' method='get' style='display:inline-block;'>
                                        <input type='hidden' name='rid' value='" . $row['review_id'] . "' />
                                        <button type='submit' class='btn btn-danger ' style='margin-top:20px; ' onclick='return confirm(\"Do you want to delete review id?\")'>Delete</button>
                                    </form>
                                </td>   
                              </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No Reviews found</td></tr>";
                    }
                    ?>
                    </tbody>
        </table>
    </div><br>
</body>
</html>