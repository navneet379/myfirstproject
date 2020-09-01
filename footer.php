<?php
require_once("config/connection.php");
require_once("lib/function.php");
include('PHPMailer/PHPMailerAutoload.php');

If ($_SERVER["REQUEST_METHOD"]=="POST") {
	
	if(isset($_POST['username']) && !empty($_POST['username']))
	{
		$username = mysqli_real_escape_string($conn,$_POST['username']);
		
		//echo $query = "select * from user where email = '".$username."'";
	
		//$result = mysqli_query($conn, $query);
		$arr = array();
		//if (mysqli_num_rows($result) == 1) {
			
			
			//$row1=mysqli_fetch_array($result);
			
				$message = "<h3>thankyou for subscription   </h3>";
				$subject = "Subscribe";		
				$mailSent = send_mail($username, $message, $subject);
				if ($mailSent) {
					
					echo "<script>
								window.location='index.php';
					     </script>";
				} else {
					
				}
				$array = array('status' => '200' ,'details' => $arr);

			
		
	} else {
		echo "asdasasdad"; die;
	}	 
}


?>


<footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                            <div class="widget">
                                <div class="footer-map">                                    
                                    <img src="images/footer/1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                            <div class="widget">
                                <h2 class="widget-title">Contact Us</h2>
                                <div class="footer-contact">                                    
                                    <ul>
                                        <li>Address: Division No. G-21, Mayur Elanza, Sciencecity.</li>
                                        <li>Phone: +(91) 812 861 2684</li>
                                        <li>Email: deepakvaleja264@gmail.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>                        
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12">
                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="recent-post"> 
                                    <div class="single-post">
                                      <div class="media">
                                        <a class="pull-left" href="#">
                                          <img src="images/blog/4.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                          <h4 class="media-heading"><a href="#">Body Building</a></h4>
                                          <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                      </div>
                                    </div>                                    
                                    <div class="single-post">
                                      <div class="media">
                                        <a class="pull-left" href="#">
                                          <img src="images/blog/5.jpg" alt="">
                                        </a>
                                        <div class="media-body">
                                          <h4 class="media-heading"><a href="#">Fitness Tips</a></h4>
                                          <p>Lorem ipsum dolor sit amet.</p>
                                        </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="widget">
                              <h2 class="widget-title">Flickr Gallery</h2>  
                              <ul class="photo">
                                <li>
                                  <img src="images/footer/2.jpg" alt="">
                                </li>
                                <li>
                                  <img src="images/footer/3.jpg" alt="">
                                </li>
                                <li>
                                  <img src="images/footer/4.jpg" alt="">
                                </li>
                                <li>
                                  <img src="images/footer/5.jpg" alt="">
                                </li>
                                <li>
                                  <img src="images/footer/6.jpg" alt="">
                                </li>
                                <li>
                                  <img src="images/footer/7.jpg" alt="">
                                </li>
                              </ul>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12">
                            <div class="widget">
                                <h2 class="widget-title">Newsletter</h2>
                                <form method="post">
                                    <div class="form-group">
                                        <input type="email" name="username" class="form-control" placeholder="Enter Email">
                                    </div> 
                                    <div class="subscribe" name="subscribe" id="subscribe">                            
										<button class="btn-send" type="submit" value="subscribe" name="submit">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom-area">
                <div class="container">
                    <div class="row">
                       <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                           <div class="widget">
                               <div class="social-media">
                                 <ul>
                                   <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                   <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                   <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                   <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                   <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                   <li><a href="#"><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                 </ul>
                               </div>
                           </div>
                       </div>
                       <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                           <div class="widget">
                               <div class="copyright">
                                   <p>Copyright © 2018-2019 | All Rights Reserved by <a href="http://webriplex.com/">Fit India Gym</a></p>
                               </div>
                           </div>
                       </div>                       
                       <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                           <div class="widget">
                               <div class="we-accept">
                                   <ul>
                                       <li>We Accept</li>
                                       <li>Cash</li>
                                   </ul>
                               </div>
                           </div>
                       </div> 
                    </div>
                </div>
            </div>
        </footer>