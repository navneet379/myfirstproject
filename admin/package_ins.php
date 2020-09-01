<?php
include("header.php");
?>
<?php
require_once('../config/connection.php');
$sql="select * from facilities";
$result=mysqli_query($conn,$sql);
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
                        <h2>Insert Package Details</h2>
                    </div>
					<form method="post">
                    <div class="content controls" >
                        <div class="form-row">
                            <div class="col-md-3">Package name:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txtpname"/></div>
                        </div>
						<div class="form-row">
                            <div class="col-md-3">Package description:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txtpdesc"/></div>
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
                            <div class="col-md-9"><input type="text" class="form-control" name="txtpprice"/></div>
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
if ( isset($_POST["txtpname"]) && isset($_POST["txtpdesc"]) && isset($_POST["textarea"]) && isset($_POST["txtpprice"]) && isset($_POST["txtpprice"]))
{
	$Pac_name = $_POST["txtpname"];
	$Pac_description= $_POST["txtpdesc"];
	$Fac_name = $_POST["textarea"];
	$Pac_price = $_POST["txtpprice"];
		if ($Pac_name!=''  && $Pac_description!='' && $Fac_name!='' && $Pac_price!='')
	{
		$sql = "insert into package(P_name,P_description,Fac_id,P_price)
		values('".$Pac_name."','".$Pac_description."' ,'".$Fac_name."' ,'".$Pac_price."')";
		$result = mysqli_query($conn,$sql);
		if ($result)
		{
			echo "<meta http-equiv='refresh' content='3;url=package_tbl.php'>";
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