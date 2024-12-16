<!DOCTYPE HTML>
<html>
<head>
    <style>
        .btn-custom:hover {
            background-color: #218838;
            transform: scale(1.20);
        }
    </style>
</head>
<body>
<?php include ('header1.php'); ?>
<div class="breadcrumbs"></div>
<div id="colorlib-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-left: 300px;">
                    <div class="contact-wrap" >
                        <h1 style="text-align: center; font-style: inherit;"><u>Add Products</u></h1>
                        <form id="addProductForm"  class="contact-form" method="POST" >
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="productName" style="font-size: 20px;"><b>Product Name:</b></label>
                                    <input type="text" name="product_name" class="form-control" style="border-radius: 10px;" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="productPrice" style="font-size: 20px;"><b>Product Price:</b></label>
                                    <input type="number" step="0.01" name="product_price" class="form-control"  style="border-radius: 10px;" required>
                                </div>
                               
                                <div class="form-group col-md-12">
                                    <label for="productImage" style="font-size: 20px;"><b>Product Image (URL):</b></label>
                                    <input type="text" name="product_image" class="form-control" style="border-radius: 10px;" required>
                                </div>
                                
                                <div class="form-group col-md-12">
                                    <label for="productColor" style="font-size: 20px;"><b>Product Color:</b></label>
                                    <input type="text" name="product_color" class="form-control" style="border-radius: 10px;" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="productMaterial" style="font-size: 20px;"><b>Product Material:</b></label>
                                    <input type="text" name="product_material" class="form-control"  style="border-radius: 10px;" required>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="productBrand" style="font-size: 20px;"><b>Product Brand Name:</b></label>
                                    <input type="text" name="product_brand" class="form-control"  style="border-radius: 10px;" required>
                                </div>
                              
                                <div class="form-group col-md-12">
                                    <label for="productsport" style="font-size : 20px;"><b>Product Sport:</b></label>
                                    <input type="text" name="product_sport" class="form-control"  style="border-radius: 10px;" required>
                                </div> 
                                <div class="form-group">
                                    <input type="submit" name="Add" value="Add Product" style="margin-left: 180px; margin-top: 10px; margin-bottom: 10px;" class="btn btn-primary btn-lg">
                                </div>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <br><br>
<div class="border border-5" style="background-color: #232f3e;">
        <?php include ('footer.php'); ?>
    </div>
<div class="gototop js-top">
        <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
    </div>
</body>
</html>

<?php
include('connection.php'); 
if(isset($_POST['Add']))
{
    $product_name=$_POST['product_name'];
    $product_price=$_POST['product_price'];
    $product_image=$_POST['product_image'];
    $product_color=$_POST['product_color'];
    $product_material=$_POST['product_material'];
    $product_brand=$_POST['product_brand'];
    $product_sport=$_POST['product_sport'];
    $insert="INSERT INTO products(product_name,product_price,product_image,product_color,product_material,product_brand,product_sport) values('$product_name',$product_price,'$product_image','$product_color','$product_material','$product_brand','$product_sport')";
    if(mysqli_query($conn,$insert))
    {
        
        echo "<script>alert('Product inserted successfully....'); window.location.href='view_product.php';</script>";
    }
    else{
        echo "<script>alert('Product not inserted....');</script>";
    }
}
?>
