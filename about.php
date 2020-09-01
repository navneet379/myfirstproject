<?php
include("header.php");
?>
<?php
include('config/connection.php');
?>
<!Doctype html>
    <html class="no-js" lang="">
    
<!-- Mirrored from themes.whmpress.com/html/gymfit/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:58:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FIT INDIA GYM | About</title>
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
        
        <!-- Breadcump Area Start Here -->
        <div class="breadcump-area">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                         <div class="breadcump">
                             <h2>About Us</h2>
                             <ul>
                                 <li><a href="index.html">Home</a></li>
                                 <li>About Us</li>
                             </ul>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Breadcump Area End Here -->
         <!-- Home Page About Section Start Here -->
         <div class="home-about-area">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                         <div class="about-images">
                             <a href="about.html"><img src="images/about/1.png" alt=""></a>
                         </div>
                     </div>
                     <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                         <div class="about-content">
                             <div class="section-title">
                                 <h2>About <span>FIT INDIA GYM</span></h2>
                                 <img src="images/line.png" alt="">
                             </div>
                             <p>
							 The Main Purpose of making this website is to provide all the information about gym for fitness lovers.
User can get all the information about gym like facilities, trainers, packages etc.
This website also provide notification for each and every thing which is provided by gym like information about expired packages and some chart details etc.
We want to help you live a fit and healthy lifestyle.
We do this by helping you find the most suitable equipment in our gym, studio, crossfit box or commercial gym, keeping your budget, lifestyle and fitness goals in mind. 
We stock a wide range of gym equipment, with strength equipment, cardio, cross training and so much more. 
Our awesome team is always keen to help, so please call us to discuss your needs.
							 </p>
                            
                         </div>
                     </div>
                 </div>
                 <div class="row">
                    <div class="ab-count">
											<?php 
							$sql2= "SELECT count(C_id) as cust from customer";
							$result2 =  mysqli_query($conn,$sql2);
							$row2 = mysqli_fetch_array($result2);
						?>
                        <!-- ABOUT-COUNTER-LIST START -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center acurate">
                         <div class="about-counter-list part-one">
                            <div class="overley">
                                <div class="informations">                                        
                                    <span> <i class="flaticon-trophy"></i></span>
                                    <h1 class="about-counter"><?php echo $row2['cust']?></h1>
                                    <p>Customer</p>
                                </div>            
                            </div>
                         </div>
                        </div>
                        <!-- ABOUT-COUNTER-LIST END -->                 
                        <!-- ABOUT-COUNTER-LIST START -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center acurate">
                         <div class="about-counter-list part-two">
						  <?php 
							$sql3= "SELECT count(P_id) as pac from package";
							$result3 =  mysqli_query($conn,$sql3);
							$row3 = mysqli_fetch_array($result3);
						?>
                        
                                <div class="overley">
                                    <div class="informations">
                                        <span><i class="flaticon-paper-plane"></i></span>
                                        <h1 class="about-counter"><?php echo $row3['pac']?></h1>
                                        <p>Packages</p>
                                    </div>
                             </div>
                         </div>
                        </div>
                        <!-- ABOUT-COUNTER-LIST END -->                 
                        <!-- ABOUT-COUNTER-LIST START -->
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-center acurate">
                         <div class="about-counter-list part-three">
						  <?php 
							$sql4= "SELECT count(T_id) as tra from trainer";
							$result4 =  mysqli_query($conn,$sql4);
							$row4 = mysqli_fetch_array($result4);
						?> 
                                <div class="overley">
                                    <div class="informations">
                                        <span><i class="flaticon-light-bulb-outline"></i></span>
                                         <h1 class="about-counter"><?php echo $row4['tra']?></h1>
                                         <p>Trainer</p>
                                    </div>
                                </div>
                         </div>
                        </div>
                        <!-- ABOUT-COUNTER-LIST END -->
                    </div>
                </div>
            </div>
         </div>
		 
         <!-- Home Page About Section End Here -->
        
         <!-- Home Trainer Area Start Here -->
        
		<div class="home-trainer-area">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">                         
                         <div class="section-title">
		
                             <h2>Our <span>Trainers</span></h2>
                             <img src="images/line.png" alt="">
                             
                         </div>
                     </div>
                 </div>
				 <br/>
				 <br/>
                 <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                         
                         <div class="team-area">
                            
					<?php 
						
						$sql1="select * from trainer";
						$result1=mysqli_query($conn,$sql1);																				
						while($row1 = mysqli_fetch_array($result1))
						{
					?>	
							<div class="single-team">
                                <div class="images">
                                    <a href="#"><img src="images/trainers/<?php echo $row1['T_profilepic']?>" alt=""></a>
                                    <div class="overley">
                                        <h3><a href="#"><?php echo $row1['T_name']?></a></h3>
                                        <div class="others">
                                            <h4><?php echo $row1['T_specialization']?></h4>
                                            <p><?php echo $row1['T_description']?></p>
                                        </div>
                                    </div>
                                    <div class="social-media">
                                    </div>
                                </div>
                            </div>
                      						<?php }?>
                                  
                         </div>
                     </div>
                 </div>
             </div>
        </div>
		<br />
		<br />
        <!-- Home Trainer Area End Here -->
       
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

<!-- Mirrored from themes.whmpress.com/html/gymfit/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:59:10 GMT -->
</html>
<?php 
include("footer.php");
?>