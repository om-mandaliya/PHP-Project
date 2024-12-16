<?php
include "connection.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$qadmin = "select * from admin where admin_name='$username' and admin_password='$password'";
$quser = "select * from users1 where user_name='$username' and user_password='$password'";
$rsAdmin = mysqli_query($conn,$qadmin);
$rsUser = mysqli_query($conn,$quser);
if( $rowAdmin = mysqli_fetch_array($rsAdmin)){
        $_SESSION["admin"] = $rowAdmin;
        echo "<script>alert('Successfull Admin Login ...'); window.location.href='admin-home.php';</script>";
            
}else if( $rowUser = mysqli_fetch_array($rsUser)){
        $_SESSION["user"] = $rowUser;
        echo "<script>alert('successfull User Login ...'); window.location.href='index.php';</script>";
}else{
    
    echo "<script>alert('Fail To Login Please Try Again ...'); window.location.href='login.php';</script>";
       
}
?>
