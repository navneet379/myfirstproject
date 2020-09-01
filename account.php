 <?php 
require_once('config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	
	if(isset($_POST["User_name"]) && isset($_POST["Password"]))
	{
		$email = $_POST["User_name"];
		$password = $_POST["Password"];
		
		if( $email !='' && $password !='')
		{
			 $sql= "select C_id,User_name,Password from customer where User_name= '".$email."' and Password='".$password."' and is_Admin = 0";
			
			$result=mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION["C_id"] = $row['C_id'];
				
				header("Location:index.php");
			}
			else
			{
				echo"Invalid password";
			}
			
		}
	}
}
?>


<!Doctype html>
    <html class="no-js" lang="">
   
<!-- Mirrored from themes.whmpress.com/html/gymfit/account.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:59:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FIT INDIA GYM | Account</title>
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
                             <h2>Account Page</h2>
                             <ul>
                                 <li><a href="#">Home</li>
                                 <li>Account</li>
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
              <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="login-area">
                  <h2>Login</h2>
                  <form method="POST">
                    <fieldset>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>User Name</label>
                          <input type="text" class="form-control" placeholder="User Name" name="User_name">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" placeholder="Password" name="Password">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group">
                          <div class="connected-area">
                            <div class="checkbox">
                              <p><a href="#">Forgot your password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							  <a href="resetpassword.php">Reset your password?</a></p>
							 <p></p>

							  </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group">
                          <button class="btn-send" type="submit">LogIn</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
                </div>
              </div>
              <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                <div class="registration-area">
                  <h2>Registration</h2>
                  <form method="POST">
                    <fieldset>
					  <div class="col-sm-12">
                        <div class="form-group"> 
                          <label>First Name</label>
                          <input type="text" class="form-control" placeholder="First Name" name="txtfname">
                        </div>
                      </div>
                    <div class="col-sm-12">
                        <div class="form-group"> 
                          <label>Last Name</label>
                          <input type="text" class="form-control" placeholder="Last Name" name="txtlname">
                        </div>
                      </div>
					<div class="col-sm-12">
                        <div class="form-group"> 
                          <label>Address</label>
                          <input type="text" class="form-control" placeholder="Address" name="txtaddress">
                        </div>
                      </div>
					  <div class="col-sm-12">
                        <div class="form-group"> 
						<label>Area</label>
						<select class="form-control" placeholder="Area" name="txtarea"> 
                          
                          
						  <?php
						  $sql1="select * from area";
						  $result1=mysqli_query($conn,$sql1);
						  while($row=mysqli_fetch_array($result1))
						  {
							  ?>
							  <option value="<?php echo $row['Area_id'];?>">
							  <?php echo $row['Area_name'];?>
							  </option>
						  <?php
						  }
						  ?>
						</select>	  
                        </div>
                      </div>
					  <div class="col-sm-12">
                        <div class="form-group"> 
                          <label>Contact No</label>
                          <input type="text" class="form-control" placeholder="Contact No" name="txtcontact">
                        </div>
                      </div>
                      <div class="col-sm-12">
                        <div class="form-group"> 
                          <label>Email</label>                                
                          <input type="email" class="form-control" placeholder="Email" name="txtemail">
                        </div>
                      </div> 
                       <div class="col-sm-12">
                        <div class="form-group"> 
                          <label>Gender</label>
						  <br/>
                          <input type="radio" name="txtgender"><label style="font-size:20px;padding-bottom:20px">Male</label>
						  <input type="radio" name="txtgender"><label style="font-size:20px;padding-bottom:20px">female</label>
                        </div>
                      </div>
					  <div class="col-sm-12">
                        <div class="form-group"> 
                          <label>Username</label>
                          <input type="text" class="form-control" placeholder="User Name" name="txtusername">
                        </div>
                      </div>
					  <div class="col-sm-12">
                        <div class="form-group"> 
                          <label>Password</label>
                          <input type="password" class="form-control" placeholder="Password" name="txtpassword">
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <div class="form-group"> 
                          <button class="btn-send" type="submit">Registration</button>
                        </div>
                      </div>
                    </fieldset>
                  </form>
				  				   <?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (isset($_POST["txtfname"]) && isset($_POST["txtlname"])&& isset($_POST["txtaddress"])&& isset($_POST["txtemail"])&& isset($_POST["txtcontact"])&& isset($_POST["txtgender"])&& isset($_POST["txtusername"])&& isset($_POST["txtpassword"])&& isset($_POST["txtarea"]))
{
	$fname = $_POST["txtfname"];
	$lname = $_POST["txtlname"];
	$address = $_POST["txtaddress"];
	$email= $_POST["txtemail"];
	$contact= $_POST["txtcontact"];
	$gender = $_POST["txtgender"];
	$username = $_POST["txtusername"];
	$password = $_POST["txtpassword"];
	$area= $_POST["txtarea"];
		if ($fname!='' && $lname!='' && $address!='' && $email!='' && $contact!='' && $gender!='' && $username!='' && $password!='' && $area!='')
	{
		$sql = "insert into customer(F_name,L_name,Address,Email,Contact_no,Gender,User_name,Password,Area_id)
		values('".$fname."','".$lname."','".$address."','".$email."','".$contact."','".$gender."','".$username."','".$password."','".$area."')";
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
