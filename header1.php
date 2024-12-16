<?php
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
	<style>
		.navbar-brand {
			font-size: 1.5rem;
			font-weight: bold;
		}

		.nav-link {
			font-size: 1.1rem;
			
		}

		.navbar-nav .nav-item:not(:last-child) {
			margin-right: 1.5rem;
		}
		.nav-link {
            font-size: 1.2rem;
            color: black !important;
            position: relative;
            transition: font-size 0.3s ease-in-out;
        }
        .nav-link:hover {
            color: #f0ad4e !important;
        }
        .nav-link.active {
            font-size: 1.5rem;
        }
	</style>
</head>

<body>
	
	<nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
		
		
		<div class="mainnav container-fluid d-flex justify-content-between">
		<img src="images/Om1.png" style="width:250px;height:80px; margin-top: 30px;margin-left:50px;">
			<div class="collapse navbar-collapse" id="navbarNav" style="margin-left: 40px;">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item" style="margin-left: 30px;">
						<a class="nav-link" href="admin-home.php"style="margin-top: 10px; font-size: 25px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="view_product.php" style="margin-top: 10px; font-size: 25px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Product</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="view_user.php" style="margin-top: 10px; font-size: 25px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Users</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " href="view_orders.php" style="margin-top: 10px; font-size: 25px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Orders</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="view_reviews.php" style="margin-top: 10px; font-size: 25px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Reviews</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="view_contact.php" style="margin-top: 10px; font-size: 25px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Contact</a>
					</li>
					<li class="nav-item">
							<a class="nav-link btn bg-danger btn-lg" href="logout.php" style="border-radius: 5px; margin-top: 10px; font-size: 35px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;" ><b>Logout</b></a>
					</li>
					

				</ul>
			</div>
		</div>
	</nav>

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	
    <script>
        document.getElementById('nav-home').addEventListener('click', function() {
            this.classList.add('active');
        });
    </script>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
   <!-- popper -->
   <script src="js/popper.min.js"></script>
   <!-- bootstrap 4.1 -->
   <script src="js/bootstrap.min.js"></script>
   <!-- jQuery easing -->
   <script src="js/jquery.easing.1.3.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.js"></script>
	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>
</body>

</html>