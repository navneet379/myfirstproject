<?php
include("header.php");
?>
<?php
require_once('../config/connection.php');

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aqvatarius.com/themes/taurus/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:58:50 GMT -->
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
    
    <script type='text/javascript' src='js/plugins/uniform/jquery.uniform.min.js'></script>
    <script type='text/javascript' src='js/plugins/select2/select2.min.js'></script>
    <script type='text/javascript' src='js/plugins/tagsinput/jquery.tagsinput.min.js'></script>
    <script type='text/javascript' src='js/plugins/jquery/jquery-ui-timepicker-addon.js'></script>
    <script type='text/javascript' src='js/plugins/bootstrap/bootstrap-file-input.js'></script>
    
    <script type='text/javascript' src='js/plugins.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
</head>
<body class="bg-img-num1"> 
    
    <div class="container">        
        <div class="row">                   
            <div class="col-md-12">
                
                 <nav class="navbar brb" role="navigation">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-reorder"></span>                            
                        </button>                                                
                        <a class="navbar-brand" href="index.html"><img src="img/logo.png"/></a>                                                                                     
                    </div>
                    <div class="collapse navbar-collapse navbar-ex1-collapse">                                     
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="index.html">
                                    <span class="icon-home"></span> dashboard
                                </a>
                            </li>                            
                            <li class="dropdown active">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-pencil"></span> forms</a>
                                <ul class="dropdown-menu">                                    
                                    <li><a href="form_elements.html">Form elements</a></li>
                                    <li><a href="form_editors.html">WYSIWYG</a></li>
                                    <li><a href="form_files.html">File handling</a></li>
                                    <li><a href="form_validation.html">Validation and wizard</a></li>
                                </ul>                                
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-cogs"></span> components</a>
                                <ul class="dropdown-menu">
                                    <li><a href="component_blocks.html">Blocks and panels</a></li>
                                    <li><a href="component_buttons.html">Buttons</a></li>
                                    <li><a href="component_modals.html">Modals and popups</a></li>                                    
                                    <li><a href="component_tabs.html">Tabs, accordion, selectable, sortable</a></li>
                                    <li><a href="component_progress.html">Progressbars</a></li>
                                    <li><a href="component_lists.html">List groups</a></li>
                                    <li><a href="component_messages.html">Messages</a></li>                                    
                                    <li>
                                        <a href="#">Tables<i class="icon-angle-right pull-right"></i></a>
                                        <ul class="dropdown-submenu">
                                            <li><a href="component_table_default.html">Default tables</a></li>
                                            <li><a href="component_table_sortable.html">Sortable tables</a></li>                                            
                                        </ul>
                                    </li>                                                                        
                                    <li>
                                        <a href="#">Layouts<i class="icon-angle-right pull-right"></i></a>
                                        <ul class="dropdown-submenu">
                                            <li><a href="component_layout_blank.html">Default layout(blank)</a></li>
                                            <li><a href="component_layout_custom.html">Custom navigation</a></li>
                                            <li><a href="component_layout_scroll.html">Content scroll</a></li>
                                            <li><a href="component_layout_fixed.html">Fixed content</a></li>
                                            <li><a href="component_layout_white.html">White layout</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="component_charts.html">Charts</a></li>
                                    <li><a href="component_maps.html">Maps</a></li>
                                    <li><a href="component_typography.html">Typography</a></li>
                                    <li><a href="component_gallery.html">Gallery</a></li>
                                    <li><a href="component_calendar.html">Calendar</a></li>
                                    <li><a href="component_icons.html">Icons</a></li>  
                                    <li><a href="component_portlet.html">Portlet</a></li>
                                </ul>
                            </li>                          
                            <li><a href="widgets.html"><span class="icon-globe"></span> widgets</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="icon-file-alt"></span> pages</a>
                                <ul class="dropdown-menu">
                                    <li><a href="sample_login.html">Login</a></li>
                                    <li><a href="sample_registration.html">Registration</a></li>
                                    <li><a href="sample_profile.html">User profile</a></li>
                                    <li><a href="sample_profile_social.html">Social profile</a></li>
                                    <li><a href="sample_edit_profile.html">Edit profile</a></li>
                                    <li><a href="sample_mail.html">Mail</a></li>
                                    <li><a href="sample_search.html">Search</a></li>
                                    <li><a href="sample_invoice.html">Invoice</a></li>
                                    <li><a href="sample_contacts.html">Contacts</a></li>
                                    <li><a href="sample_tasks.html">Tasks</a></li>
                                    <li><a href="sample_timeline.html">Timeline</a></li>
                                    <li>
                                        <a href="#">Email templates<i class="icon-angle-right pull-right"></i></a>
                                        <ul class="dropdown-submenu">
                                            <li><a href="email_sample_1.html">Sample 1</a></li>
                                            <li><a href="email_sample_2.html">Sample 2</a></li>
                                            <li><a href="email_sample_3.html">Sample 3</a></li>
                                            <li><a href="email_sample_4.html">Sample 4</a></li>
                                        </ul>
                                    </li>                                     
                                    <li>
                                        <a href="#">Error pages<i class="icon-angle-right pull-right"></i></a>
                                        <ul class="dropdown-submenu">
                                            <li><a href="sample_error_403.html">403 Forbidden</a></li>
                                            <li><a href="sample_error_404.html">404 Not Found</a></li>
                                            <li><a href="sample_error_500.html">500 Internal Server Error</a></li>
                                            <li><a href="sample_error_503.html">503 Service Unavailable</a></li>
                                            <li><a href="sample_error_504.html">504 Gateway Timeout</a></li>                                                                                       
                                        </ul>
                                    </li>                                    
                                </ul>
                            </li>                            
                        </ul>
                        <form class="navbar-form navbar-right" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="search..."/>
                            </div>                            
                        </form>                                            
                    </div>
                </nav>               

            </div>            
        </div>

        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Components</a></li>                    
                    <li class="active">Form elements</li>
                </ol>
            </div>
        </div>        
        
        <div class="row">
            <div class="col-md-12">

                <div class="block" >
                    <div class="header">
                        <h2>Insert Area Details</h2>
                    </div>
					<form method="post">
                    <div class="content controls" >
                        <div class="form-row">
                            <div class="col-md-3">Area name:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txtname"/></div>
                        </div>
                      <div class="form-row">
                            <div class="col-md-3">Area pincode:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txtpincode"/></div>
                        </div> 
                        <div class="form-row" >
						
                        <div class="col-md-6" style=" padding-left:450px" >
						<input type="submit" class="form-control,btn btn-default" method="post" value="submit" /></div>
                        </div>						
                    </div>
                </div>                
                
       </form>        
        </div>
    </div>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if ( isset($_POST["txtname"]) && isset($_POST["txtpincode"]))
{
	$Areaname = $_POST["txtname"];
	$Areapincode = $_POST["txtpincode"];
		if ($Areaname!='' && $Areapincode!='')
	{
		$sql = "insert into area(Area_name,Area_pincode)
		values('".$Areaname."','".$Areapincode."')";
		$result = mysqli_query($conn,$sql);
		if ($result)
		{
			echo "<meta http-equiv='refresh' content='3;url=area_tbl.php'>";
		}
	}
}
else
{
	echo "value not set";
}
}
?>
</body>
<!-- Mirrored from aqvatarius.com/themes/taurus/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:58:52 GMT -->
</html>
<?php
include("footer.php");
?>