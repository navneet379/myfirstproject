<?php
include("header.php");
?>
<?php
	require_once('../config/connection.php');
		?>
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
                        <h2>Customer Table</h2>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span> <a href="Reports/gymm.php"> Generate reports </a> </span>
                    </div>
                    <div class="content">
                        
                        <table cellpadding="0" cellspacing="0" width="100%" class="table table-bordered table-striped sortable_default">
                            <thead>
                              <th> Name </th>
							  <th>Address</th>
							  <th>Email</th>
							  <th>Contact No</th>
							  <th>Gender</th>
							  <th>Username</th>
							   <th>Area</th>
							  <th>Registered Date</th>
							  <th>Action</th>
	

                            </thead>
                            <tbody>
                                		<?php
												
												
												$sql="select * from customer c join area a where c.Area_id=a.Area_id";
												
												$result=mysqli_query($conn,$sql);
											
												while($row = mysqli_fetch_array($result))
												{
													echo "<tr>";
												echo "<td>" . $row['F_name'] . " " .$row['L_name'] . "</td>";
												echo "<td>" . $row['Address'] . "</td>";
												echo "<td>" . $row['Email'] . "</td>";
												echo "<td>" . $row['Contact_no'] . "</td>";
												echo "<td>" ;
												if($row['Gender']==1)
												{
													echo "Female";
													}else{
														echo "Male";
														}; 
												echo"</td>";
												echo "<td>" . $row['User_name'] . "</td>";
												
												
												
												echo "<td>" . $row['Area_name']. "</td>";
												
												echo "<td>" . $row['Create_date'] . "</td>";
												echo "<td> <a href=\"delete_cus.php?id=$row[C_id]\"><img
												src=\"img/delete2.png\"   height='20'/> </a> 
												<a href=\"updatetext.php?id=$row[C_id]\"><img
												src=\"img/edit1.png\"   height='20'/> </a>";
												if($row['status']==0)
												{
													echo "<a href=\"block.php?id=$row[C_id]\"><img
												src=\"block.png\"  height='20' title='BLOCK' /> </a>";
												}
												else
												{
													echo "<a href=\"unblock.php?id=$row[C_id]\"><img
												src=\"unblock.png\"  height='20' title='UNBLOCK' /> </a>"; 
												
												}
												echo "</td>";
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