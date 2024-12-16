<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/icomoon.css">
<link rel="stylesheet" href="css/ionicons.min.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/bootstrap-datepicker.css">
<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style.css.map">
<style>
.navbar-brand {
font-size: 2rem;
font-weight: bold;
color: #fff;
}
.nav-link {
font-size: 1.2rem;color: black !important;
position: relative;
transition: font-size 0.3s ease-in-out;
margin-top: 10px;
font-size: 25px;

font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
margin-left: 20px;
}
.nav-link:hover {
color: #f0ad4e !important;
}
.nav-link.active {
font-size: 1.5rem;
}
.nav-link.active::after {
content: '';
display: block;
width: 100%;
height: 3px;
background-color: red;
position: absolute;
bottom: -5px;
left: 0;
}
.navbar-nav .nav-item:not(:last-child) {
margin-right: 1.5rem;
}
.navbar {
background-color: white;
}
.btn-custom {
background-color: red;
color: #fff;
border-radius: 5px;
font-size: 20px;
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light">
<div class="mainnav container-fluid d-flex justify-content-between">
<img src="images/Om1.png" style="width:250px;height:80px; margin-top: 30px;margin-left:50px;">
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav ml-auto">
<li class="nav-item">
<a class="nav-link" href="index.php" id="namv-home">Home</a>
</li>
<li class="nav-item">
<a class="nav-link" href="product.php" id="namv-home">Product</a>
</li>
<li class="nav-item">
<a class="nav-link" href="contact.php" id="namv-home">Contact</a>
</li>
<li class="nav-item">
<a class="nav-link" href="cart.php" id="namv-home">Cart</a>
</li>
<?php if (isset($_SESSION['user'])) { ?>
<li class="nav-item">
<a class="nav-link btn btn-custom btn-lg" href="logout.php" style="margin-top: 8px;"><b>logout</b></a>
</li>
<?php } else { ?>
<li class="nav-item">
<a class="nav-link btn btn-custom btn-lg" href="login.php" style="margin-top: 8px; "><b>Login</b></a>
</li>
<li class="nav-item">
<a class="nav-link btn btn-custom btn-lg" href="register.php" style="margin-top: 8px;"><b>Register</b></a>
</li>
<?php } ?>
</ul>
</div>
</div>
</nav>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.getElementById('nav-home').addEventListener('click', function () {
this.classList.add('active');
});
</script>
</body>
</html>