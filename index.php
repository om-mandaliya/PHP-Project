<!DOCTYPE HTML>
<html>
<head>
<title>Sports Footwear Shopping</title>
<style>
body {
    background-color: #f8f9fa;
    color: #343a40;
}

.product-entry {
    border: 1px solid #dee2e6;
    padding: 15px;
    text-align: center;
    position: relative;
    overflow: hidden;
    transition: all 0.3s ease;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    background-color: #fff;
}

.product-entry.clicked {
    border: 2px solid #007bff;
}

.product-entry:hover {
    box-shadow: 0 8px 16px rgba(0,0,0,0.2);
    background-color: #f8f9fa;
    transform: translateY(-5px);
}

.product-entry .prod-img img {
    max-width: 100%;
    height: auto;
    transition: transform 0.3s ease;
}

.product-entry:hover .prod-img img {
    transform: scale(1.1);
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    font-size: 18px;
    transition: background-color 0.3s ease, transform 0.3s ease;
    text-transform: uppercase;
}

.btn-primary:hover {
    background-color: #0056b3;
    transform: scale(1.20);
}

.btn-primary:active {
    background-color: #004085;
    transform: scale(1);
}

.btn-primary:focus {
    outline: none;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}
</style>
</head>
<body>
<div class="colorlib-loader"></div>
<div id="page">
<?php include('header.php'); ?>
<aside id="colorlib-hero">
<div class="flexslider">
<ul class="slides mt-4">
<li style="background-image: url(images/OM1.webp);"></li>
<li style="background-image: url(images/OM2.webp);"></li>
<li style="background-image: url(images/OM3.jpeg);"></li>
</ul>
</div>
</aside>

<div class="colorlib-product">
<div class="colorlib-product">
<div class="colorlib-intro">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center" style="margin-top: 100px;">
                <h2 class="intro">It started with a simple idea: Create quality, well-designed products that I wanted myself.</h2>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 text-center" style="margin-top: 100px;">
            <div class="featured">
                <a class="featured-img" style="background-image: url(images/t4.jpg);"></a>
                <a href="product.php" class="btn btn-primary btn-lg">View Products</a>
                <div class="desc">
                </div>
            </div>
        </div>
        <div class="col-sm-6 text-center" style="margin-top: 100px;">
            <div class="featured">
                <a  class="featured-img" style="background-image: url(images/t7.jpg);"></a>
                <a href="product.php" class="btn btn-primary btn-lg">View Products</a>
                <div class="desc">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8 offset-sm-2 text-center colorlib-heading">
        </div>
    </div>
    <div class="row row-pb-md">
        <div class="col-lg-3 mb-4 text-center">
            <div class="product-entry border">
                <a class="prod-img">
                    <img src="images/foot4.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a><br>
                <div class="desc">
                    <h2 style="margin-top:23px;">DSC Belter Cricket Shoes for Mens</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4 text-center">
            <div class="product-entry border">
                <a class="prod-img">
                    <img src="images/foot4.avif" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a>
                <div class="desc">
                    <h2>Puma mens Cricket Square Cricket Shoe</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4 text-center">
            <div class="product-entry border">
                <a class="prod-img">
                    <img src="images/1.jpg" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a><br>
                <div class="desc">
                    <h2 style="margin-top: 23px;">AVANT Men's BounceMax Running and Training Shoes </h2>
                </div>
            </div>
        </div>
        <div class="col-lg-3 mb-4 text-center">
            <div class="product-entry border">
                <a class="prod-img">
                    <img src="images/foot5.webp" class="img-fluid" alt="Free html5 bootstrap 4 template">
                </a><br>
                <div class="desc">
                    <h2 style="margin-top: 23px;">Nivia IGNITE Football Stud Shoes for Men </h2>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<div class="colorlib-partner pb-5">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center colorlib-heading colorlib-heading-sm">
                <h2>Trusted Partners</h2>
            </div>
        </div>
        <div class="row">
            <div class="col partner-col text-center" style="margin-top:20px;">
                <img src="images/brand-1.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-2.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-3.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-4.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
            <div class="col partner-col text-center">
                <img src="images/brand-5.jpg" class="img-fluid" alt="Free html4 bootstrap 4 template">
            </div>
        </div>
    </div>
</div>

<div class="border border-5" style="background-color: bisque; margin-top: 20px;">
    <div class="border border-5" style="background-color: #232f3e;">
        <?php include('footer.php'); ?>
    </div>
</div>
</div>
<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>
<script>
    $(document).ready(function(){
        $('.product-entry').click(function(){
            $('.product-entry').removeClass('clicked');
            $(this).addClass('clicked');
        });
    });
</script>
</body>
</html>
s