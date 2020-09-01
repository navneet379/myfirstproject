<?php
include('config/connection.php');
?>
<?php
include("header.php");
?>

<!doctype html>
    <html class="no-js" lang="">
    
<!-- Mirrored from themes.whmpress.com/html/gymfit/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:58:56 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>FIT INDIA GYM</title>
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
        
         <!-- slider area-->
        <!--Slider area start here-->
        <section class="slider-area">
            <div id="particles-js">
                <div class="slider-content-area slider-3 cd-intro">
                    <h1 class="cd-headline clip is-full-width">
                        <span class="cd-words-wrapper">
                            <b class="is-visible">FITNESS BRING HAPPINESS</b>
                            <b>FIT INDIA GYM</b>
                            <b>YOGA IS THE BEST PRACTICE</b>
                        </span>
                    </h1> 
                   

                 
                </div>
                
            </div>
        </section>
        <!--Slider area end here-->
         <!-- slider end-->
        <!-- Home Page About Section Start Here -->
        <div class="home-about-area">
            <div class="container">
                <div class="row">
                     <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12 hidden-xs">
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
                             <p>The Main Purpose of making this website is to provide all the information about gym for fitness lovers.
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
                                        <p>Package</p>
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
                                            <h4><?php echo $row1['T_experience']?></h4>
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
        <!-- Home Trainer Area End Here -->
        <!-- Home Page Class Start Here -->
        <div class="home-page-classes-area">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">                         
                         <div class="section-title">
                             <h2>Our <span>Classes</span></h2>
							 <img src="images/line.png" alt="">
							
                             <!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras ut nuncsapien.Pellentesque feugiat risus nec fringilla dolor pellentesque aliquet.</p>!-->
                         </div>
                     </div>                    
                </div>
				<br/>
				 <br/>
                <div class="classes-content-area">
                    <div class="row">                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="faq-area">
                                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                      <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                         How Much Price Yoga Training?
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                      <div class="panel-body">
                                        <img src="images/classes/1.jpg" alt="">
                                        <p>It helps in stretching, strengthening, body relaxing and calming the mind. We use various techniques of power yoga to help relieve pressure and strengthen the mind. Power yoga is used for the description of emulating an accurate full body workout and used for supporting the mental stability and concentration. The results of power yoga are always extraordinary. The best feature of this yoga is that there is no age restriction, every one can do it. It is useful for reducing stress, controlling weight and relieving lower back pain. It is for every one but it requires both physical and mental concentration.
										<p>There are many different forms of yoga and Power yoga is one of them. Power yoga is a term coined in the West and it describes a vigorous fitness based approach to the Vinayasa style of yoga. The word “power” in the phrase describes the intensity this kind of yoga involves. </p></p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                      <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                          How i will get 100% Fitness Body?
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                      <div class="panel-body">
                                      <img src="images/classes/2.jpg" alt="">
                                        <p>A great tip is an awesome thing. Whether it's an undiscovered restaurant, a sleeper stock, or a Sure Thing in the late double at Pimlico, savvy inside info imbues a man with confidence. Control. Strength.</p>

										<p>Knowledge is power.</p>

										<p>It's also the secret to a powerful body, as you're about to find out. In our never-ending mission to get you in the greatest shape of your life, we've grilled the world's top experts and combed our own archives to find 100 perfect fitness training tips—small gems that will make a huge difference in any man's life.</p>

										<p>Get ready: You're about to feel the power—and have the body to show for it.</p>

										<p>And for a comprehensive, cutting-edge workout program to transform your body, try The 21-Day MetaShred. One guy lost 25 pounds in just 6 weeks!</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                      <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                          Will i get Proper Instructions by GymFit?
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                      <div class="panel-body">
                                      <img src="images/classes/3.jpg" alt="">
                                        <p>That’s all the time you need to get in shape Opens a New Window.
										It doesn’t matter whether you haven’t worked out in months or you’re a gym rat looking to take your fitness to the next level. 
										Follow our program and you’ll emerge 21 days later stronger, faster, and more flexible—and looking and feeling better Opens a New Window too.
										We tapped some of the country’s leading strength-and-conditioning experts to create an ideal week of training, a seven-day template that repeats three times, gradually increasing in difficulty each week.
										All these workouts are scalable, and most take no more than 30 minutes to complete.</p>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingFour">
                                      <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                          Will I Get Discuss from Expert?
                                        </a>
                                      </h4>
                                    </div>
                                    <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                      <div class="panel-body">
                                      <img src="images/classes/4.jpg" alt="">
                                        <p>Sometimes you get so excited when you start a new diet or workout program that you want to tell everyone, assuming they’ll be just as excited for you.


										It can be shocking to find out there are a lot of critical people out there who will plant seeds of doubt in your mind with negative comments. They might pick at you for saying no to processed foods like cake and pizza, or complain about your time in the gym.</p>
										<p>This is why it’s often better to remain silent about your efforts to develop new habits. Your results and success will speak volumes – so much so that critics won’t have a leg to stand on with their negativity.</p>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="classes-features">
                                <h2>Pricing Plan</h2>
                                <div class="single-features">
                                    <div class="single-plan">
                                        <h3>Package</h3>
                                        <div class="list-slide">  
						<?php 
						
						$sql5="select * from package";
						$result5=mysqli_query($conn,$sql5);																				
						while($row5 = mysqli_fetch_array($result5))
						{
						?>   
											<ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i> <?php echo $row5['P_name']?><span> <?php echo $row5['P_price']?> </span></li>

                                            </ul>                                            
                                                                                        
                                           <?php }?> 
                                        </div>
                                    </div>
									         						

                                    <div class="single-plan">
                                        <h3>Trainer</h3>
                                        <div class="list-slide">                                            
									<?php 
						
						$sql6="select * from trainer";
						$result6=mysqli_query($conn,$sql6);																				
						while($row6 = mysqli_fetch_array($result6))
						{
						?>   
						
											<ul>
                                                <li><i class="fa fa-star" aria-hidden="true"></i><?php echo $row6['T_name']?><span><?php echo $row6['T_specialization']?> </span></li>                     
                                            </ul>                                            
                                           <?php }?>                                            
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Home Page Class End Here -->
        <!-- Home One Advertise Area Start Here -->
        <!-- Home One Advertise Area End Here -->
       
        <!-- Testimonial Start Here -->
               <div class="testimonial-area">
            <div class="container">
                <div class="row">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">                         
                         <div class="section-title">
                             <h2>Our <span>Feedbacks</span></h2>
                             <img src="images/line.png" alt="">
                         </div>
                     </div>                    
                </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="client-img text-center">

								<?php 
									
									$qf="select * from feedback f,customer c where c.C_id=f.C_id";
									$re=mysqli_query($conn,$qf);
									while($top=mysqli_fetch_assoc($re))
									{
											echo "
												
												<a data-slide-index='0' href='#'>
                                        <div class='over-img'><img src='images/testimonial/gymm.png' alt=''/></div>
                                        <h4>".$top['F_name']." ".$top['L_name']."</h4>
                                        
                                    </a>
                                   
											
											";
									}
								?>
								   
                                </div>
                            </div>
                            <div class="col-md-12 text-center">
                                <div class="client-content">
								<?php 
									
									$qf1="select * from feedback f,customer c where c.C_id=f.C_id";
									$re1=mysqli_query($conn,$qf1);
									while($top1=mysqli_fetch_assoc($re1))
									{
										echo "
											<blockquote>
											<p>".$top1['F_description']."</p>
											</blockquote>
                                  		";
									}
								?>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
  
  
        <!-- Testimonial End Here -->
        <!-- Home Gallery Start Here -->
        <div class="gallery-area">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                         <div class="section-title">
                             <h2>Our <span>Gallery</span></h2>
                             <img src="images/line.png" alt="">
                         </div>
						 
                     </div>                    
                </div>
				<br/>
				
                <!--Start gallery masonary v1 area-->
                <div class="gallery-masonary-v1-area">
                    <div class="container">
                        
                        <br/>
                        <div class="row gallery-content masonary-layout filter-layout" data-filter-class="filter">
                            <!--Start single gallery masonary item-->
						<?php 
						
						$sqli="select * from gallery";
						$result=mysqli_query($conn,$sqli);																				
						while($row = mysqli_fetch_array($result))
						{
						?>   
							
							
							
                            <div class="single-gallery-masonary-item masonary-item single-filter-item col-lg-3 col-md-3 col-sm-6 col-xs-12 run yoga box">
                                <div class="single-gallery-item">
                                    <div class="img-holder">
                                        <img src="images/<?php echo $row['G_name']?>" style="height:200;width:300;" alt="Awesome Gallery Image">
                                        <div class="overlay">
                                            <div class="view">
                                                <a class="fancybox" data-fancybox-group="group" href="images/<?php echo $row['G_name']?>">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
						</div>
						<?php
						}
						?>
						
							
							
							
							
                            <!--End single gallery masonary item-->
                            <!--Start single gallery masonary item-->
                            <!-- <div class="single-gallery-masonary-item masonary-item single-filter-item col-lg-3 col-md-3 col-sm-6 col-xs-12 box fix yoga">
                                <div class="single-gallery-item">
                                    <div class="img-holder">
                                        <img src="images/gallery/2.jpg" alt="Awesome Gallery Image">
                                        <div class="overlay">
                                            <div class="view">
                                                <a class="fancybox" data-fancybox-group="group" href="images/gallery/2.1.jpg">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>-->
                            <!--End single gallery masonary item-->
                            <!--Start single gallery masonary item-->
                            <!--<div class="single-gallery-masonary-item col-lg-3 col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item together run fit">
                                <div class="single-gallery-item">
                                    <div class="img-holder">
                                        <img src="images/gallery/3.jpg" alt="Awesome Gallery Image">
                                        <div class="overlay">
                                            <div class="view">
                                                <a class="fancybox" data-fancybox-group="group" href="images/gallery/3.1.jpg">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>-->
                            <!--End single gallery masonary item-->

                            <!--Start single gallery masonary item-->
                            <!--<div class="single-gallery-masonary-item col-lg-3 col-md-3 col-sm-6 col-xs-12 masonary-item single-filter-item fit yoga run">
                                <div class="single-gallery-item">
                                    <div class="img-holder">
                                        <img src="images/gallery/4.jpg" alt="Awesome Gallery Image">
                                        <div class="overlay">
                                            <div class="view">
                                                <a class="fancybox" data-fancybox-group="group" href="images/gallery/4.1.jpg">
                                                    <i class="fa fa-search" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>    
                                </div>
                            </div>-->
                            <!--End single gallery masonary item-->
                        </div>
                    </div>
                </div>
                <!--End gallery masonary v1 area--> 
            </div>
        </div>
        <!-- Home Gallery End Here -->
        
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
        <script type="text/javascript">
            particlesJS("particles-js", {
            "particles": {
              "number": {
                "value": 85,
                "density": {
                  "enable": true,
                  "value_area": 500
                }
              },
              "color": {
                "value": "#ffffff"
              },
              "shape": {
                "type": "circle",
                "stroke": {
                  "width": 0,
                  "color": "#000000"
                },
                "polygon": {
                  "nb_sides": 5
                },
                "image": {
                  "src": "img/github.svg",
                  "width": 100,
                  "height": 100
                }
              },
              "opacity": {
                "value": 0.5,
                "random": false,
                "anim": {
                  "enable": false,
                  "speed": 1,
                  "opacity_min": 0.1,
                  "sync": false
                }
              },
              "size": {
                "value": 2,
                "random": true,
                "anim": {
                  "enable": false,
                  "speed": 40,
                  "size_min": 0.1,
                  "sync": false
                }
              },
              "line_linked": {
                "enable": true,
                "distance": 150,
                "color": "#ffffff",
                "opacity": 0.4,
                "width": 1
              },
              "move": {
                "enable": true,
                "speed": 6,
                "direction": "none",
                "random": false,
                "straight": false,
                "out_mode": "out",
                "bounce": false,
                "attract": {
                  "enable": false,
                  "rotateX": 600,
                  "rotateY": 1200
                }
              }
            },
            "interactivity": {
              "detect_on": "canvas",
              "events": {
                "onhover": {
                  "enable": true,
                  "mode": "grab"
                },
                "onclick": {
                  "enable": true,
                  "mode": "push"
                },
                "resize": true
              },
              "modes": {
                "grab": {
                  "distance": 133.99274002972194,
                  "line_linked": {
                    "opacity": 1
                  }
                },
                "bubble": {
                  "distance": 400,
                  "size": 40,
                  "duration": 2,
                  "opacity": 8,
                  "speed": 3
                },
                "repulse": {
                  "distance": 200,
                  "duration": 0.4
                },
                "push": {
                  "particles_nb": 4
                },
                "remove": {
                  "particles_nb": 2
                }
              }
            },
            "retina_detect": true
          });
        </script>
    </body>
	<!-- Mirrored from themes.whmpress.com/html/gymfit/index4.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 Dec 2018 06:58:56 GMT -->
</html>
<?php 
include("footer.php");
?>