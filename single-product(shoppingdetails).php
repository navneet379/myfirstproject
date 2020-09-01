<?php
include("header.php");
?>
<?php
include('config/connection.php');
?>
<!Doctype html>
    <html class="no-js" lang="">
    
<!-- Mirrored from themes.whmpress.com/html/gymfit/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:59:50 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FIT INDIA GYM | Single product</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png"> 
        <!-- Place favicon.ico in the root directory -->
        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- nivo slider CSS -->
        <link rel="stylesheet" href="inc/custom-slider/css/nivo-slider.css" type="text/css" />
        <link rel="stylesheet" href="inc/custom-slider/css/preview.css" type="text/css" media="screen" />
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Flat Icon CSS-->
        <link rel="stylesheet" href="css/flaticon.css">
        <!-- jquery-ui.min css -->
        <link rel="stylesheet" href="css/jquery-ui.min.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- headlines-animated css -->
        <link rel="stylesheet" href="css/headlines-animated.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- bxslider CSS -->
        <link rel="stylesheet" href="css/jquery.bxslider.css">
        <!-- Fancy Box CSS -->
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!-- Header Area Start Here -->
        <!-- Header Area End Here -->
        <!-- Breadcump Area Start Here -->
        <div class="breadcump-area">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <div class="breadcump">
                             <h2>Package Details</h2>
                             <ul>
                                 <li><a href="index.php">Home</a></li>
                                 <li>Package Details</li>
                             </ul>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Breadcump Area End Here -->
        <!-- Single Shop Page Start Here -->
        <div class="single-shop-area">
          <div class="container">
		 <?php
		  if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql="Select * from package where P_id='".$id."' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
}						
?>
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                 <div class="product-images">
                   <ul class="bxslider">
					 <li><img src="images/shop/image13.jpg" style="height:470;width:700;" alt=""/></li>
                     <li><img src="images/shop/5.jpg" alt=""/></li>
                     <li><img src="images/shop/6.jpg" alt=""/></li>
                     <li><img src="images/shop/7.jpg" alt=""/></li>
                   </ul>
                  
                 </div>
               </div>
               <div class="col-lg-8 col-md-8 col-sm-6 col-xs-12">
                 <div class="product-details">
				 
                   <h2>Package Details</h2>
                   <p><?php echo  $row['P_description']; ?></p>
                 </div>
                 <div class="price-items">
                   <ul>
                     <li>Rs.<?php echo  $row['P_price']; ?></li>
                     <li>                       
                     </li>
                   </ul>
                 </div>
                 <div class="add-to-cart-button">
                   <a href="booking.php">BOOKING</a>
                 </div>
               </div>
            </div>
												
												
          </div>
        </div>
        <!-- Single Shop Page End Here -->
        <!-- Footer Area Start Here -->

        <!-- Footer Area End Here -->
        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="js/vendor/jquery-1.12.0.min.js"></script>
        <!-- bootstrap js -->
        <script src="js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="js/jquery.meanmenu.js"></script>
        <!-- jquery-ui js -->
        <script src="js/jquery-ui.min.js"></script>
        <!-- wow js -->
        <script src="js/wow.min.js"></script>
        <!-- headlines-animated js -->
        <script src="js/headlines-animated.js"></script>
        <!-- particles js -->
        <script src="js/particles.min.js"></script>
        <!-- backgroundVideo js -->
        <script src="js/backgroundVideo.js"></script>
        <!-- Nivo slider js-->    
        <script src="inc/custom-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
        <script src="inc/custom-slider/home.js" type="text/javascript"></script>
        <!-- plugins js -->
        <script src="js/plugins.js"></script>
        <!-- jquery.counterup js -->
        <script src="js/jquery.counterup.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <!-- bxslider JS -->
        <script src="js/jquery.bxslider.min.js"></script>
        <!-- Jquery Fancy Box -->
        <script src="js/jquery.fancybox.min.js"></script>
        <!-- Isotope JS -->
         <script src="js/jquery.mixitup.min.js"></script>
        <script src="js/isotope.pkgd.min.js"></script>        
        <!-- knob circle js -->
        <script src="js/jquery.knob.js"></script>     
        <!-- jquery.appear js -->
        <script src="js/jquery.appear.js"></script>
        <!-- main js -->
        <script src="js/main.js"></script>
    </body>

<!-- Mirrored from themes.whmpress.com/html/gymfit/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:59:55 GMT -->
</html>
<?php
include("footer.php");
?>