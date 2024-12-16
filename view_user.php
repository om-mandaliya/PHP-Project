<?php
include("connection.php");
session_start();

if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit();
}
if(isset($_GET['uid'])) {
    $user_id = $_GET['uid'];
    $qdelete = "DELETE FROM users1 WHERE user_id=".$user_id;
    $rsdelete = mysqli_query($conn, $qdelete);
    
}
$sql = "SELECT * FROM users1";
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

    <?php include('header1.php'); ?>

    <div class="container table-container" style="margin-top: 50px; margin-left: 190px;">
        <div class="text-center">
            <h2><b>View Users</b></h2>
        </div>

        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th class="text-center" ><b>User Id</b></th>
                    <th class="text-center"><b>User Name</b></th>
                    <th class="text-center"><b>User Email</b></th>
                    <th class="text-center"><b>User Password</b></th>
                    <th class="text-center"><b>User Phone</b></th>
                    <th class="text-center"><b>User Address</b></th>
                    <th class="text-center"><b>Action</b></th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>
                                <td class='p-3' style='font-weight:bold;'> " . $row["user_id"] . "</td>
                                <td class='p-3'style='font-weight:bold;'>" . $row["user_name"] . "</td>
                                <td class='p-3' style='font-weight:bold;'>" . $row["user_email"] . "</td>
                                <td class='p-3' style='font-weight:bold;'>" . $row["user_password"] . "</td>
                                <td class='p-3' style='font-weight:bold;'>" . $row["user_phone"] . "</td>
                                <td class='p-3' style='font-weight:bold;'>" . $row["user_address"] . "</td>
                                <td>
                                    <form action='view_user.php' method='get' style='display:inline-block;'>
                                        <input type='hidden' name='uid' value='" . $row['user_id'] . "' />
                                        <button type='submit' class='btn btn-danger border-radius:10px;'  style='margin-top:10px;' onclick='return confirm(\"Do you want to delete user id?\")'>Delete</button>
                                    </form>
                                </td>
                              </tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>No users found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div><br><br>
    <div class="border border-5" style="background-color: bisque;">
    </div>
</body>
</html>
