<?php 
include("header.php"); 
?>
 <?php 
require_once('config/connection.php');
?>


<!Doctype html>
    <html class="no-js" lang="">
   
<!-- Mirrored from themes.whmpress.com/html/gymfit/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:59:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FIT INDIA GYM | Booking</title>
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
                             <h2>Booking Page</h2>
                             <ul>
                                 <li><a href="index.php">Home</a></li>
                                 <li>Booking</li>
                             </ul>
                         </div>
                     </div>
                </div>
            </div>
        </div>
        <!-- Breadcump Area End Here -->
        <!-- Account Page Start Here -->
                <div class="loginregistration-area">
          <div class="container">
            <div class="row">
              
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="registration-area">
                  <h2>Booking</h2>
                  <form method="POST">
                    <fieldset>
					  <div class="col-sm-12">
                        <div class="form-group"> 
						<label>Package</label>
						<select class="form-control" placeholder="Package" name="txtpackage"> 
                          
                          
						  <?php
						  $sql1="select * from package";
						  $result1=mysqli_query($conn,$sql1);
						  while($row=mysqli_fetch_array($result1))
						  {
							  ?>
							  <option value="<?php echo $row['P_id'];?>">
							  <?php echo $row['P_name'];?>
							  </option>
						  <?php
						  }
						  ?>
						</select>	  
                        </div>
                      </div>
                    <div class="col-sm-12">
                        <div class="form-group"> 
						<label>Customer</label>
						<select class="form-control" placeholder="Customer" name="txtname"> 
                          
                          
						  <?php
						  $sql2="select * from customer";
						  $result2=mysqli_query($conn,$sql2);
						  while($row2=mysqli_fetch_array($result2))
						  {
							  ?>
							  <option value="<?php echo $row2['C_id'];?>">
							  <?php echo $row2['F_name']. " " .$row2['L_name'];?>
							  
							  </option>
						  <?php
						  }
						  ?>
						</select>	  
                        </div>
                      </div>
					<div class="col-sm-12">
                        <div class="form-group"> 
                          <label>Total Amount</label>
                          <input type="text" class="form-control" placeholder="Total Amount" name="txtamount">
                        </div>
                      </div>
					  
					  <div class="col-sm-12">
                        <div class="form-group"> 
                          <label>Booking Date</label>
                          <input type="date" class="form-control" placeholder="Booking Date" name="txtbdate">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group"> 
                          <label>Booking Enddate</label>                                
                          <input type="date" class="form-control" placeholder="Booking Enddate" name="txtbenddate">
                        </div>
                      </div> 
                       
					  
                      <div class="col-sm-4">
                        <div class="form-group"> 
                          <button class="btn-send" type="submit">Submit</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
				  				  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (isset($_POST["txtpackage"]) && isset($_POST["txtname"]) && isset($_POST["txtamount"]) && isset($_POST["txtbdate"]) && isset($_POST["txtbenddate"]))
{
	
	$package = $_POST["txtpackage"];
	$name = $_POST["txtname"];
	$totalamount = $_POST["txtamount"];
	$bookingd= $_POST["txtbdate"];
	$bookinged= $_POST["txtbenddate"];
	
		if ($package!='' && $name!='' && $totalamount!='' && $bookingd!='' && $bookinged!='' )
	{
		$sql = "insert into booking(P_id,C_id,Total_amount,Booking_date,Booking_enddate)
		values('".$package."','".$name."','".$totalamount."','".$bookingd."','".$bookinged."')";
		$result = mysqli_query($conn,$sql);
		if ($result)
		{
			echo "<meta http-equiv='refresh' content='3;url='index.php'>";
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
        </div>

        <!-- Account Page End Here -->
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

<!-- Mirrored from themes.whmpress.com/html/gymfit/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:59:56 GMT -->
</html>
<?php 
include("footer.php"); 
?>