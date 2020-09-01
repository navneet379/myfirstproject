<?php require_once('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["User_name"]) && isset($_POST["Password"]))
	{
		$email = $_POST["User_name"];
		$password = $_POST["Password"];
		
		if( $email !='' && $password !='')
		{
			 $sql= "select C_id,User_name,Password from customer where User_name= '".$email."' and Password='".$password."' and is_Admin = 1";
			
			$result=mysqli_query($conn,$sql);
			if($row = mysqli_fetch_assoc($result))
			{
				session_start();
				$_SESSION["User_name"] = $row['C_id'];
				
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
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aqvatarius.com/themes/taurus/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:58:16 GMT -->
<head> 
       
    <title>FIT INDIA GYM</title>
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="icon" type="image/ico" href="favicon.html">    
    <link href="css/stylesheets.css" rel="stylesheet" type="text/css">
    
    <script type='text/javascript' src='js/plugins/jquery/jquery.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-migrate.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/globalize.js'></script>    
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js'></script>
    <script type='text/javascript' src='js/plugins/uniform/jquery.uniform.min.js'></script>
    
    <script type='text/javascript' src='js/plugins/knob/jquery.knob.js'></script>
    <script type='text/javascript' src='js/plugins/sparkline/jquery.sparkline.min.js'></script>
    <script type='text/javascript' src='js/plugins/flot/jquery.flot.js'></script>     
    <script type='text/javascript' src='js/plugins/flot/jquery.flot.resize.js'></script>
    
    <script type='text/javascript' src='js/plugins.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>    
    <script type='text/javascript' src='js/charts.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
    
</head>
<body class="bg-img-num1"> 
    
    <div class="container">        

        <div class="login-block">
            <div class="block block-transparent">
                <div class="head">
                    <div class="user">
					<form method="post">
                        <div class="info user-change">                                                                                
                            <img src="interior.jpg" class="img-circle img-thumbnail"/>
                            <div class="user-change-button">
                                <span class="icon-off"></span>
                            </div>
                        </div>                            
                    </div>
                </div>
            <div class="username">
				<span class="username">Username:</span>
				<input type="text" name="User_name" class="name" placeholder="Username" required="">
				<div class="clearfix"></div>
			</div>
			  <br>          
			<div class="password-agileits">
				<span class="username">Password:</span>
				<input type="password" name="Password" class="password" placeholder="Password" required="">
				<div class="clearfix"></div>
			</div>
					<br>
                    <div class="form-row">
                        <div class="col-md-6" >
                            <button class="btn btn-default btn-block btn-clean">Log In</button>
                        </div>
                    </div>
                    <div class="form-row">                            
                        <div class="col-md-12">
                            <a href="forgot.php" class="btn btn-link btn-block">Forgot your password?</a>
                        </div>
                    </div>    
					<div class="form-row">
                        <div class="col-md-12 tac"><strong>OR</strong></div>
                    </div>
                    <div class="form-row">                            
                        <div class="col-md-12">
                            <a href="reset.php" class="btn btn-link btn-block">Reset your password?</a>
                        </div>
					
                </div>
            </div>
        </div>

    </div>

</body>

</html>