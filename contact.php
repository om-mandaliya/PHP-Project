<!DOCTYPE HTML>
<html>
<head>
    <title>Footwear - Free Bootstrap 4 Template by Colorlib</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<?php include('header.php'); ?>

<div class="col-md-6">
            <iframe class="mt-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3671.748266071859!2d72.5170652745657!3d23.033013379166444!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9b355aed7ec5%3A0x4107ded8751289d6!2sKalpataru%20Complex!5e0!3m2!1sen!2sin!4v1721714888190!5m2!1sen!2sin" width="1500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        
            </div>
            
<div id="colorlib-contact">
            <div class="col-md-12" style="margin-top: 50px;">
                <div class="contact-wrap" style=" margin-left: 300px; margin-right: 300px;">
                    <h1 style="text-align: center;">Contact Us</h1>
                    <form action="#" class="contact-form" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname" style="font-size: 20px;"><b>First Name</b></label>
                                    <input type="text"  name="firstname" class="form-control" placeholder="Your firstname" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="lname"  style="font-size: 20px;"><b>Last Name</b></label>
                                    <input type="text" name="lastname" class="form-control" placeholder="Your lastname" required>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="email"  style="font-size: 20px;"><b>Email</b></label>
                                    <input type="text" name="email" class="form-control" placeholder="Your email address" required>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="message"  style="font-size: 20px;"><b>Message</b></label>
                                    <textarea name="message" name="message" cols="30" rows="10" class="form-control" placeholder="Say something about us" required></textarea>
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <input type="submit" value="Send Message" name="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </div>
                    </form>        
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="border border-5" style="background-color: #232f3e; margin-top:50px;">
    <?php include('footer.php'); ?>
</div>

<div class="gototop js-top">
    <a href="#" class="js-gotop"><i class="ion-ios-arrow-up"></i></a>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
include('connection.php');
if(isset($_POST['submit']))
{
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$message=$_POST['message'];

$insert="INSERT INTO contact(firstname,lastname,email,message) values('$firstname','$lastname','$email','$message')";
if(mysqli_query($conn,$insert))
{
    echo "<script>alert('Your message submitted successfully ...'); window.location.href='index.php';</script>";
}
else
{
    echo "<script>alert('please try again ...'); window.location.href='contact.php';</script>";
}
}