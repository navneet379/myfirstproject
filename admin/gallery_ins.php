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
								<script>
function loadFile(event)
{
document.getElementById('output').src = 
URL.createObjectURL(event.target.files[0]);
};
</script>
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
                        <h2>Insert Gallery Details</h2>
                    </div>
					<form method="post" enctype="multipart/form-data">
                    <div class="content controls" >
                        <div class="form-row">
                            <div class="col-md-3">Gallery name:</div>
							<div class="col-md-2">
								<input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="loadFile(event)"/>
							 </div>
							 <div >
							<img id="output" height="100" width="100"  />
							</div>
							<br/>
							<div class="form-row">
                            <div class="col-md-3">Gallery description:</div>
                            <div class="col-md-9"><input type="text" class="form-control" name="txtdescription"/></div>
                        </div>     
                        
							
				
                        
						</div>
					
						
						
                                 <div class="form-row" >
						
                        <div class="col-md-6" style=" padding-left:450px" >
						<br>
						<input type="submit" class="form-control,btn btn-default"  method="post" value="submit" /></div>
                        </div>						
                    </div>
                </div>                
                
       </form>        
        </div>
    </div>
	<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{

   if(isset($_FILES['image']) && isset($_POST['txtdescription'])){

      $file_name = $_FILES['image']['name'];
	  $file_desc = $_POST["txtdescription"];
      $file_tmp =$_FILES['image']['tmp_name'];
	  
      //$file_type=$_FILES['image']['type'];
	  //$file_size =$_FILES['image']['size'];
      //$file_ext=explode('.',$_FILES['image']['name']);

      if(move_uploaded_file($file_tmp,"../images/".$file_name)==1)
	  {
			 $query="INSERT INTO gallery(G_name,G_description) values('".$file_name."','".$file_desc."')";
		
				$result=mysqli_query($conn,$query);
				echo "Success";
				if ($result)
		{
			echo "<meta http-equiv='refresh' content='3;url=gallery_tbl.php'>";
		}
	  }
      else{
         echo "errors";
      }
   }
}
?>
</body>

<!-- Mirrored from aqvatarius.com/themes/taurus/html/form_elements.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 07 Dec 2018 10:58:52 GMT -->
</html>
<?php
include("footer.php");
?>