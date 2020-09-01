<?php
include("header.php");
?>
<?php
require_once('../config/connection.php');
if(isset($_GET['id']) && isset($_GET['trainer']))
{
	$id = $_GET['id'];
	$tra = $_GET['trainer'];
	$sql="Select * from trainer where T_id='".$id."' ";
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
                        <h2>Update Trainer Details</h2>
                    </div>
					<form method="post">
                    <div class="content controls" >
                        <div class="form-row">
                            <div class="col-md-3">T_name:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txttname" value="<?php echo $row['T_name']?>"/></div>
                        </div>
						<div class="form-row">
                            <div class="col-md-3">T_profilepic:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txtprofilepic" value="<?php echo $row['T_profilepic']?>"/></div>
                        </div>
						<div class="form-row">
                            <div class="col-md-3">T_email:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="textemail" value="<?php echo $row['T_email']?>"/></div>
                        </div>
						<div class="form-row">
                            <div class="col-md-3">T_contact:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txtcontact" value="<?php echo $row['T_contact']?>"/></div>
                        </div>
						<div class="form-row">
                            <div class="col-md-3">T_gender:</div>
                            <div class="col-md-9">
							<input type="text" class="form-control" name="txtgender" value="<?php echo $row['T_gender']?>"/></div>
                        </div>
						<div class="form-row">
                            <div class="col-md-3">T_experience</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txtexperience" value="<?php echo $row['T_experience']?>"/></div>
                        </div>
						<div class="form-row">
                            <div class="col-md-3">T_description:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txtdescription" value="<?php echo $row['T_description']?>"></div>
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
if ( isset($_POST["txttname"]) && isset($_POST["txtprofilepic"]) && isset($_POST["textemail"]) && isset($_POST["txtcontact"]) && isset($_POST["txtgender"])&& isset($_POST["txtexperience"])&& isset($_POST["txtdescription"]))
{
	$Tr_name = $_POST["txttname"];
	$Tr_profilepic= $_POST["txtprofilepic"];
	$Tr_email = $_POST["textemail"];
	$Tr_contact = $_POST["txtcontact"];
	$Tr_gender = $_POST["txtgender"];
	$Tr_experience= $_POST["txtexperience"];
	$Tr_descrption = $_POST["txtdescription"];
	
		if ($Tr_name!=''  && $Tr_profilepic!='' && $Tr_email!='' && $Tr_contact!='' && $Tr_gender!='' && $Tr_experience!='' && $Tr_descrption!='')
	{
		$sql1 = "update trainer set T_name='".$Tr_name."' , T_profilepic='".$Tr_profilepic."' , T_email='".$Tr_email."' , T_contact='".$Tr_contact."' , T_gender='".$Tr_gender."' , T_experience='".$Tr_experience."' , T_description='".$Tr_descrption."'
		where  T_id= '".$id."' ";
	
	
		
		$result1 = mysqli_query($conn,$sql1);
		
		
		if ($result1)
		{
			echo "<meta http-equiv='refresh' content='3;url=trainer_tbl.php'>";
		}
	}
	else
	{
		echo "value is null";
	}
}
else
{
	echo "value is null";
}

}


?>
</body>
</html>
<?php
include("footer.php");
?>