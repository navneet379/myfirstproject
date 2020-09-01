<?php
require_once("../config/connection.php");
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

if ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		
		$query = "select * from customer where Email = '".$username."'";
		
		$result = mysqli_query($conn, $query);
		$row=mysqli_fetch_array($result);
		if (mysqli_num_rows($result) == 1) {
		
			$arr = array();
		
				$to = $row['Email'];
				$arr = $row	;
				
			$otp = mt_rand(000000,999999);
			$query1 = "update customer set otp = ".$otp.", otpused = 0 where 
			email = '".$to."'";
	
			$result1 = mysqli_query($conn,$query1);
			
			if ($result1) {
				$message = "<h3>Your new OTP is ".$otp.". Please do not share</h3>";
				$subject = "Request For OTP";		
				$mailSent = send_mail($to, $message, $subject);
				if ($mailSent) {
					session_start();
					$_SESSION['id'] = $to;
					echo "<script>
								window.location='OTPforgotpassword.php';
					      </script>";
				} else {
					
				}
				$array = array('status' => '200' , 'details' => $arr);
			}	
			
		}	
		
	} else {
		echo "asdasasdad"; die;
	}	 
}

?>

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
							<div>
							<p><b>&nbsp;&nbsp;&nbsp;FIT INDIA GYM</b></p>
                        </div>   
							<div>
							<p>forgot password</p>
                        </div>                            
                    </div>
                </div>
            
			            
			<div class="password-agileits">
			<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" >
				<span class="username">Email:</span>
				<input type="text" name="username" id="uname" class="password" placeholder="Email" required="">
				<div class="clearfix"></div>
			</div>
			<br>
                        <div class="col-md-12">
                           <center> <button type="submit" name="submit"  class="btn btn-default btn-block btn-clean">Submit</button></center>
                        </div>
                    </div>
                                </div>
        </div>

    </div>

</body>

</html>