<?php
include("header.php");
?>
<?php
include('config/connection.php');
?>
<!Doctype html>
    <html class="no-js" lang="">
    
<!-- Mirrored from themes.whmpress.com/html/gymfit/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:59:50 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FIT INDIA GYM | Package</title>
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
        <!-- headlines-animated css -->-
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
        
        <!-- Breadcump Area Start Here -->
        <div class="breadcump-area">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <div class="breadcump">
                             <h2>Package</h2>
                             <ul>
                                 <li><a href="index.php">Home</a></li>
                                 <li>Package</li>
                             </ul>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Breadcump Area End Here -->
        <!-- Shop Page Start Here -->
        <div class="shop-area">
          <div class="topbar">
            <div class="container">
              <div class="row">         
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-6">
                    <div class="showing-result">
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-4 col-sm-5 col-xs-6">
                    <div class="showing-result">
                       </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="container">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
              <!-- Tab panes -->
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="grid">
				
                  
                    
                                  
                      
                  
                <div role="tabpanel" class="tab-pane" id="list">
                  <div class="product-list-view-area">
				  <?php
												$sql="Select * from package f join facilities c where f.Fac_id=c.Fac_id";
												
												$result=mysqli_query($conn,$sql);
												
												while($row = mysqli_fetch_array($result))
												{
													?>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 acurate">
                      <div class="list-single-product">
                        <div class="media">
                          <a class="pull-left" href="single-product(shoppingdetails).php?id=<?php echo $row['P_id']?>">
                            <img src="images/shop/scaled.jpg" alt="image">
                          </a>
                          <div class="media-body">
                            <h4 class="media-heading"><a href="single-product(shoppingdetails).php?id=<?php echo $row['P_id']?>"><?php echo  $row['P_name'] ?></a> <span>Rs.<?php echo  $row['P_price'] ?></span></h4>
                            <span> <?php echo  $row['Fac_name'] ?> </span>
                           <!-- <p>
							<?php echo  $row['P_description'] ?>
							</p>-->
							<br/>
                            <div class="read-more">
                              <a href="single-product(shoppingdetails).php?id=<?php echo $row['P_id']?>">View Details</a>
							
	                    </div>
                          </div>
                        </div>
                      </div>
                    </div>
					<?php
}
?>
                   
                    
                  </div>
                </div>
              </div>
            </div>
          </div>          
          <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                  <div class="pagination-area">
                       </div>
              </div>
          </div>
          </div>
        </div>
        <!-- Shop Page End Here -->

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

<!-- Mirrored from themes.whmpress.com/html/gymfit/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:59:50 GMT -->
</html>
<?php
include("footer.php");
?>