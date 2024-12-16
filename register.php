<!DOCTYPE html>
<?php include('connection.php');  ?>
<html lang="en">
<head>
    <title>Login Form</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -120px;
    top: -50px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -140px;
    bottom: -430px;
    
}
form{
    height: 820px;
    width: 500px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 70%;
    left: 50%;
    border-radius: 10px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
   
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #ffffff;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}
.social{
  margin-top: 30px;
  display: flex;
}
.social div{
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255,255,255,0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover{
  background-color: rgba(255,255,255,0.47);
}
.social .fb{
  margin-left: 25px;
}
.social i{
  margin-right: 4px;
}
</style>
</head>
<body>
   <a href="index.php" style="background-color:#e5e5e5; margin-left:20px;" class="btn btn-lg mt-4">Back</a>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form  method="post" style="margin-bottom: 200px; margin-top: 50px;">
        <h3>Register Here</h3>
        <label for="username">User name</label>
        <input type="text" placeholder="User Name" id="username" name="user_name">
        <label for="email">Email</label>
        <input type="email" placeholder="user email" id="email" name="user_email">
        <label for="password">Password</label>
        <input type="password" placeholder="user Password" id="password" name="user_password">
        <label for="phone">Phone</label>
        <input type="number" placeholder="user phone Number" id="number" name="user_phone">
        <label for="address">Address</label>
        <input type="text" placeholder="uaer Address" id="address" name="user_address">
        <button name="submit">Submit</button>
        
    </form>
    
</body>
</html>
<?php
session_start();
if(isset($_POST['submit'])) {
  
    if(isset($_POST['user_address'])) {
        $address = $_POST['user_address'];
        $_SESSION['user_address'] = $address;
    }

    if(isset($_POST['user_name'])) {
        $name = $_POST['user_name'];
        $_SESSION['user_name'] = $name;
    }
}
?>

<?php
include('connection.php');
if(isset($_POST['submit']))
{
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $password = $_POST['user_password'];
    $no = $_POST['user_phone'];
    $address = $_POST['user_address'];

    $insert = "INSERT INTO users1(user_name, user_email, user_password, user_phone, user_address) VALUES ('$name', '$email', '$password', $no, '$address')";
if(mysqli_query($conn, $insert)) {
    echo "<script>alert('Successful Registration.'); window.location.href='register.php';</script>";
} else {
    echo "Error: " . $insert . "<br>" . mysqli_error($conn);
}

}
?>