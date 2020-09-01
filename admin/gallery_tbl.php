<?php
include("header.php");
?>
<?php
	require_once('../config/connection.php')?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from aqvatarius.com/themes/taurus/html/component_table_sortable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:59:11 GMT -->
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
    <script type='text/javascript' src='js/plugins/datatables/jquery.dataTables.min.js'></script>
    
    <script type='text/javascript' src='js/plugins.js'></script>    
    <script type='text/javascript' src='js/actions.js'></script>
    <script type='text/javascript' src='js/settings.js'></script>
</head>
<body class="bg-img-num1"> 
    
    <div class="container">        
        
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="#">Home</a></li>                    
                    <li><a href="#">Components</a></li>                                        
                    <li><a href="#">Tables</a></li>                                        
                    <li class="active">Sortable</li>
                </ol>
            </div>
        </div>        

        <div class="row">
            
            
            <div class="col-md-12">
                <div class="block">
                    <div class="header">
                        <h2>Gallery Table</h2>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span> <a href="gallery_ins.php"> Add records </a> </span>
                    </div>
                    <div class="content">
                        
                        <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable_default">
                            <thead>
	
	
	<th> 	G_name </th>
	<th>    G_description </th>
	<th> Action	 </th>
                            </thead>
                            <tbody>
                                		<?php
												$sql="Select * from gallery";
												
												$result=mysqli_query($conn,$sql);
												
												while($row = mysqli_fetch_array($result))
												{
													echo "<tr>";
												
												
												echo "<td>" . $row['G_name'] . "</td>";
												echo "<td>" . $row['G_description'] . "</td>";
												echo "<td> <a href=\"delete_gal.php?id=$row[G_id]\"><img
												src=\"img/delete2.png\"   height='25'/> </a> &nbsp; &nbsp;
												<a href=\"gallery_ins.php?id=$row[G_id]\"><img
												src=\"img/edit1.png\"   height='25'/> </a></td>";
												echo "</tr>";
												}
												?>                             
                            </tbody>
                        </table>
                        
                    </div>
                </div>                
                
            </div>
            
        </div>
        
        
        
    </div>
    
</body>

<!-- Mirrored from aqvatarius.com/themes/taurus/html/component_table_sortable.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:59:13 GMT -->
</html>
<?php
include("footer.php");
?>
