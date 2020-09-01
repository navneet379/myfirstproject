<?php
include("header.php");
?>
<?php
require_once("../config/connection.php");
$sqlimage="SELECT * FROM gallery";
$imageresult1 = mysqli_query($conn,$sqlimage);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aqvatarius.com/themes/taurus/html/component_gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:59:15 GMT -->
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
    
    <script type='text/javascript' src='js/plugins/fancybox/jquery.fancybox.pack.js'></script>             
    <script type='text/javascript' src='js/plugins/uniform/jquery.uniform.min.js'></script>
    
    <script type='text/javascript' src='js/plugins.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
</head>
<body class="bg-img-num1"> 
    
        
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Components</a></li>                    
                    <li class="active">Gallery</li>
                </ol>
            </div>
        </div>
        
       
        
        <div class="row">
            
            <div class="col-md-6">
                
               

<div class="block block-transparent">
                    <div class="header">
                        <h2>Gallery</h2>  <br / >       
<span> <a href="gallery_ins.php"> Add records </a> </span>						
                    </div>
                    <div class="content gallery-list">
                        
                                                                  
                       <?php
while($rows=mysqli_fetch_assoc($imageresult1))
{
	$image = $rows['G_name'];


?>

 <div class="gallery-item">
                            <div class="gallery-image">
                                <a class="fancybox" rel="group" href="../images/<?php echo $image ?>"><img src="../images/<?php echo $image ?>	" class="img-thumbnail"></a>
                            </div>
                            <div class="gallery-controls">
                                
								
                                <a href="delete_gal.php"><span class="icon-pencil"></span></a>
                            </div>                            
                        </div>                        
<?php
}
?>                        
                    </div>
                </div>
                
            </div>

             
        
    </div>
</body>

<!-- Mirrored from aqvatarius.com/themes/taurus/html/component_gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:59:16 GMT -->
</html>
<?php
include("footer.php");
?>