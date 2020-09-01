<?php
include("header.php");
?>
<?php
require_once('../config/connection.php');
$sql="select * from facilities";
$result=mysqli_query($conn,$sql);
if(isset($_GET['id']) )
{
	$id = $_GET['id'];
	//$tra = $_GET['name'];
	$sql1="Select * from package where P_id='".$id."' ";
	$result1=mysqli_query($conn,$sql1);
	$row1=mysqli_fetch_array($result1);
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
                        <h2>Update Package Details</h2>
                    </div>
					<form method="post">
                    <div class="content controls" >
                        <div class="form-row">
                            <div class="col-md-3">Package name:</div>
                            <div class="col-md-9">
<input type="text"  class="form-control" name="txtpname" value="<?php echo $row1['P_name']?>"  /></div>
                        </div>
                      <div class="form-row">
                            <div class="col-md-3">Package description:</div>
                            <div class="col-md-9">
							<input type="text" class="form-control" name="txtpdesc" value="<?php echo $row1['P_description']?>" /></div>
                        </div> 
					
						
						<div class="form-row">
                            <div class="col-md-3">Facility name:</div>
                            <div class="col-md-9">
                                <select class="form-control" name="textarea">
								<?php
while($row=mysqli_fetch_array($result))
{
?>
                                    <option value="<?php echo $row['Fac_id']; ?>"> <?php echo $row['Fac_name']; ?></option>
									<?php
}
?>
                                </select>
                            </div>
                        </div> 
						<div class="form-row">
                            <div class="col-md-3">Package price:</div>
                            <div class="col-md-9">
							<input type="text" class="form-control" name="txtpprice" value="<?php echo $row1['P_price']?>"  /></div>
                        </div> 
						
						
                        <div class="form-row" >
						
                        <div class="col-md-6" style=" padding-left:450px" >
						<input type="submit" class="form-control,btn btn-default" method="post" value="submit" /></div>
                        </div>						
                    </div>
                </div>                
                
       </form>        
        </div>
		 <?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (isset($_POST["txtpname"]) && ($_POST["txtpdesc"])&& ($_POST["textarea"])&& ($_POST["txtpprice"]) )
{
	$fname = $_POST["txtpname"];
	$fdesc = $_POST["txtpdesc"];
	$ffac = $_POST["textarea"];
	$fprice = $_POST["txtpprice"];

	if ($fname!='' && $fdesc!='' && $ffac!='' && $fprice!='')
	{
		$sql1 = "update package set P_name='".$fname."' , P_description='".$fdesc."',
		Fac_id='".$ffac."',P_price='".$fprice."'
		where P_id = '".$id."' ";
		$result1 = mysqli_query($conn,$sql1);
		

		if ($result1)
		{
			echo "<meta http-equiv='refresh' content='3;url=package_tbl.php'>";
		}
	}

	else
	{
		echo "value is null";
	}
}
else
{
	echo "value not set";
}
}
?>
    </div>
   
</body>
<?php
include("footer.php");
?>
</html>