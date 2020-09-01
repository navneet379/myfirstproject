<?php
include("header.php");
?>
<?php
require_once('../config/connection.php');
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
<body class="bg-img-num1" data-settings="open"> 
    
    
        <div class="row">
            
            <div class="col-md-2">
                
                <div class="block block-drop-shadow">
                    <div class="user bg-default bg-light-rtl">
                        <div class="info">                                                                                
                                                                                  
                            <img src="interior.jpg" class="img-circle img-thumbnail"/>
                        </div>
                    </div>
                    <div class="content list-group list-group-icons">
                        
                        <a href="logout.php" class="list-group-item"><span class="icon-off"></span>Logout<i class="icon-angle-right pull-right"></i></a>
                    </div>
                </div> 
                  
                    
            </div>
            
            <div class="col-md-5">
            
                
                <div class="block block-drop-shadow">
                    <div class="head bg-default bg-light-rtl">
                        <h2>Booking details</h2>
                        <div class="side pull-right">                            
                            <ul class="buttons">                                
                                <li><a href="#"><span class="icon-plus"></span></a></li>
                                <li><a href="#"><span class="icon-cogs"></span></a></li>
                            </ul>
                        </div> 
                       
                    </div>
                    <div class="content list">
					<?php 
						
						$sql1="select * from booking b join customer c join package p where b.C_id=c.C_id and b.P_id=p.P_id";
												
												$result1=mysqli_query($conn,$sql1);																				
						while($row1 = mysqli_fetch_array($result1))
						{
					?>
                        <div class="list-item">
                           
							
                            <div class="list-info">
                                <img src="img/example/user/dmitry.jpg" class="img-circle img-thumbnail"/>
                            </div>
                            <div class="list-text">
                                <a href="#" class="list-text-name"> <?php echo $row1['F_name'] ." ". $row1['L_name'] ; ?> </a>
								<br />
                                <span> <?php echo $row1['P_name']; ?> </span> <br />
								<span> <?php echo $row1['Total_amount']; ?> </span> <br />
								<span> <?php echo $row1['Booking_date']." To ".$row1['Booking_enddate']; ?> </span>
								
                            </div>
                            <div class="list-controls">
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-rotate-right"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-pushpin"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-remove"></span></a>
                            </div>
                        </div>
						<?php
						}
					?>
                       
                        
                       
                                               
                    </div>
                    <div class="footer tac">
                        <a href="#">Load more messages...</a>
                    </div>
                </div>                

                
            </div>
                
                       
            <div class="col-md-5">
                
                <div class="block block-drop-shadow">
                    <div class="head bg-default bg-light-rtl">
                        <h2>Feedback messages</h2>
                        <div class="side pull-right">                            
                            <ul class="buttons">                                
                                <li><a href="#"><span class="icon-plus"></span></a></li>
                                <li><a href="#"><span class="icon-cogs"></span></a></li>
                            </ul>
                        </div> 
                        
                    </div>
                    <div class="content list">
					<?php 
						
						$sql="select * from feedback f join customer c where f.C_id=c.C_id";
												
												$result=mysqli_query($conn,$sql);																				
						while($row = mysqli_fetch_array($result))
						{
					?>
                        <div class="list-item">
                            
                            <div class="list-info">
                                <img src="img/example/user/dmitry.jpg" class="img-circle img-thumbnail"/>
                            </div>
                            <div class="list-text">
                                <a href="#" class="list-text-name"><?php echo $row['F_name'] ." ". $row['L_name'] ; ?></a>
                                <p> <?php echo   $row['F_description']; ?> </p>
                            </div>
                            <div class="list-controls">
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-rotate-right"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-pushpin"></span></a>
                                <a href="#" class="widget-icon widget-icon-circle"><span class="icon-remove"></span></a>
                            </div>
                        </div>
                        
                       
                       <?php
						}
					?>
                                             
                    </div>
                    <div class="footer tac">
                        <a href="#">Load more messages...</a>
                    </div>
                </div>                

                </div>
                   

</body>

<!-- Mirrored from aqvatarius.com/themes/taurus/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:58:43 GMT -->
</html>

<?php
include("footer.php");
?>