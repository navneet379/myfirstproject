<?php
include("header.php");
?>
<?php
require_once('../config/connection.php');
if(isset($_GET['id']) && isset($_GET['name']))
{
	$id = $_GET['id'];
	$tra = $_GET['name'];
	$sql="Select * from area where Area_id='".$id."' ";
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($result);
}
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
                        <h2>Update Area Details</h2>
                    </div>
					<form method="post">
                    <div class="content controls" >
                        <div class="form-row">
                            <div class="col-md-3">Area name:</div>
                            <div class="col-md-9"><input type="text"  class="form-control" name="txtanam"  value="<?php echo $row['Area_name']?> "/></div>
                        </div>
                      <div class="form-row">
                            <div class="col-md-3">Area Pincode:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txtapincode" value="<?php echo $row['Area_pincode']?>" /></div>
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
if ( isset($_POST["txtanam"]) && isset($_POST["txtapincode"]))
{
	$Ar_name = $_POST["txtanam"];
	$Ar_pin= $_POST["txtapincode"];

	
		if ($Ar_name!=''  &&  $Ar_pin!='' )
	{
		$sql1 = "update area set Area_name='".$Ar_name."' , Area_pincode='".$Ar_pin."'
		where  Area_id= '".$id."' ";
	
	
		
		$result1 = mysqli_query($conn,$sql1);
		
		
		if ($result1)
		{
			echo "<meta http-equiv='refresh' content='3;url=area_tbl.php'>";
		}
	}
	else
	{
		echo "value is null";
	}
}
else
{
	echo "value is set";
}

}


?>

</body>
</html>
<?php
include("footer.php");
?>