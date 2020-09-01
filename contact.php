<?php
include("header.php");
require_once('config/connection.php');
?>
<!Doctype html>
    <html class="no-js" lang="">
    
<!-- Mirrored from themes.whmpress.com/html/gymfit/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:59:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FIT INDIA GYM | Contact</title>
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
                             <h2>Contact Us</h2>
                             <ul>
                                 <li><a href="index.html">Home</a></li>
                                 <li>Contact Us</li>
                             </ul>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Breadcump Area End Here -->
        <!-- Contat Us Area Start Here -->
        <div class="contact-us-area">
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-info wow fadeInUp" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" data-wow-delay="0.1s">
                  <div class="media">
                    <div class="pull-left">
                      <i class="fa fa-map-marker" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Address</h4>
                      <p>Division No. G-21, Mayur Elanza, Sciencecity.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-info wow fadeInUp" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;" data-wow-delay="0.2s">
                  <div class="media">
                    <div class="pull-left">
                      <i class="fa fa-phone" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Phone</h4>
                      <p>+918128 612 684</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <div class="single-info wow fadeInUp" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;" data-wow-delay="0.3s">
                  <div class="media">
                    <div class="pull-left">
                      <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    </div>
                    <div class="media-body">
                      <h4 class="media-heading">Email</h4>
                      <p>deepakvaleja264@gmail.com</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="contact-form">
                  <h2>GET IN TOUCH</h2>
                  <div class="contact-form">                           
                    <div class="main-contact-form">                   
                      <form method="POST">
                        <fieldset>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Name*" name="txtname">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="email" class="form-control" placeholder="E-mail*" name="txtemail">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="You Phone*" name="txtno">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Subject*" name="txttitle">
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group">
                              <textarea cols="40" rows="10" class="textarea form-control" placeholder="Your Message" name="txtmsg"></textarea>
                            </div>
                          </div>
                          <div class="col-sm-12">
                            <div class="form-group acurate">
                              <button name="submit" class="btn-send" type="submit">Send</button>
                            </div>
                          </div>
                        </fieldset>
                      </form>
					   <?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if ( isset($_POST["txtname"]) && isset($_POST["txtno"])&& isset($_POST["txtemail"])&& isset($_POST["txtmsg"])&& isset($_POST["txttitle"]))
{
	$Conname = $_POST["txtname"];
	$Conno = $_POST["txtno"];
	$Conemail = $_POST["txtemail"];
	$Conmsg= $_POST["txtmsg"];
	$Contitle = $_POST["txttitle"];
		if ($Conname!='' && $Conno!=''&& $Conemail!=''&& $Conmsg!=''&& $Contitle!='')
	{
		$sql = "insert into contact(Con_name,Con_no,Con_email,Con_msg,Con_title)
		values('".$Conname."','".$Conno."','".$Conemail."','".$Conmsg."','".$Contitle."')";
		$result = mysqli_query($conn,$sql);
		if ($result)
		{
			echo "<meta http-equiv='refresh' content='3;url=index.php'>";
		}
	}
}
else
{
	echo "value not set";
}
}
?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="feature-image">
                  <img src="images/contact.jpg" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Contat Us Area End Here -->
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

<!-- Mirrored from themes.whmpress.com/html/gymfit/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:59:57 GMT -->
</html>
<?php
include("footer.php");
?>