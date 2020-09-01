<?php
require_once("config/connection.php");
if($_SERVER["REQUEST_METHOD"]=="POST")
{
if(isset($_FILES['image']))
{
$file_name=$_FILES['image'] ['name'];
$file_tmp=$_FILES['image'] ['tmp_name'];
if(move_uploaded_file($file_tmp,"imagess/".$file_name)==1)
{
$query="INSERT INTO image(image_path) values
('".$file_name."')";
mysqli_query($conn,$query);
echo "success";
}
else
{
echo "errors";
}
}
}
?>





















<html>
<body>
<form action="" method="POST" enctype="multipart/form-data">
<img id="output" height="100" width="100"/>
<br/>
<input type="file" name="img" accept="image/*"
onchange="loadFile(event)">
<script>
function loadFile(event)
{
document.getElementById('output').src = 
URL.createObjectURL(event.target.files[0]);
};
</script>
</body>
</html>


image view
</head>
<?php
require_once("config/connection.php");
$sqlimage="SELECT * FROM images";
$imageresult1 = mysqli_query($conn,$sqlimage);
?>
<div class="row">
<?php
while($rows=mysqli_fetch_assoc($imageresult1))
{
	$image = $rows['image_path'];
	echo"<img src='../imagess/$image' height='200'
	width='200' hspace='10' vspace='5' border='2'>";
}
?>
</div>
</html>
