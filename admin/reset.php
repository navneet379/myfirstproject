<?php require_once('../config/connection.php');

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	if(isset($_POST["User_name"]) && isset($_POST["Password"]))
	{
		$username = $_POST["User_name"];
		$password = $_POST["Password"];
		
		if( $username !='' && $password !='')
		{
			 $sql= "select Customer_id,User_name,Password from customer where User_name = '".$username."' and Password='".$password."' and is_Admin = 1";
			
			$result=mysqli_query($conn,$sql);
			if(mysqli_num_rows($result) == 1)
			{
					
				$newpassword = $_POST["newpassword"];
				$confirmpassword =$_POST["repassword"];
				
				if($newpassword == $confirmpassword)
				{
					echo $query1 = "update Customer set Password = '".$newpassword."' where User_name='".$username."'" ;
					
					$resulemail = mysqli_query($conn,$query1);
					if($resulemail)
					{
						header("Location:login.php");
					}
				}
				else
				{
					echo "incorrect password";
				}
				
			}

			else
			{
				echo "Enter valid user name and password";
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
<body>
	<div class="main-wthree">
	<div class="container">
	<div class="sin-w3-agile">
	<br>
		<h2>Reset Password:</h2>
		<form action="#" method="post">
			<div class="User_name">
			<br>
				<span class="User_name">User Name:</span>
				<input type="text" name="User_name" class="name" placeholder="User Name" required="">
				<div class="clearfix"></div>
			</div>
			<br>
			<div class="User_name">
				<span class="User_name">Old Password:</span>
				<input type="text" name="Password" class="name" placeholder="Old Password" required="">
				<div class="clearfix"></div>
			</div>
			<br>
			<div class="User_name">
				<span class="User_name">New Password:</span>
				<input type="text" name="newpassword" class="name" placeholder="New Password" required="">
				<div class="clearfix"></div>
			</div>
			<br>
			<div class="Password-agileits">
				<span class="User_name">Confirm New Password:</span>
				<input type="Password" name="repassword" class="password" placeholder="Confirm New Password" required="">
				<div class="clearfix"></div>
			</div>
			<br>
			<div class="login-w3" style="height:80px;width:80px;">
					<input type="submit" class="login" method="post" value="Submit">
			
			</div>
			
			<div class="clearfix"></div>
		</form>
				
				
	</div>
	</div>
	</div>
</body>
</html>