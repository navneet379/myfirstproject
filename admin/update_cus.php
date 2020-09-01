<?php
require_once('../config/connection.php');
if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$sql="Select * from customer where Customer_id";
	$result=mysqli_query($conn,$sql);
	$sql1="select * from area";
    $result1=mysqli_query($conn,$sql1);
	$row=mysqli_fetch_array($result);
}
?>
<html>
<head>
<title> update user table </title>
</head>
<body>
<form method="post">
<table>
<tr>
<td>  First Name </td>
<td> <input type="text" name="txtfname"
value=<?php echo $row['F_name']?>>
<br>
</td>
</tr>
<tr>
<td> Last Name </td>
<td> <input type="text" name="txtlname"
value=<?php echo $row['L_name']?>>
<br>
</td>  	
</tr>
<tr>
<td>  Address </td>
<td> <input type="textarea" name="txtad"
value=<?php echo $row['Address']?>>
<br>
</td>
</tr>
<tr>
<td>  Email </td>
<td> <input type="email" name="txtemail"
value=<?php echo $row['Email']?>>
<br>
</td>  	
</tr>
<tr>
<td>  Contact Number </td>	
<td> <input type="text" name="txtno"
value=<?php echo $row['Contact_no']?>>
<br>
</td> 	
</tr>
<tr>
<td>  Gender </td>
<td> 
<input type="radio" value="m" name="gender" selected> male  	
 <input type="radio" value="f" name="gender"> female 
 </td>
</tr>
<tr>
<td>  User Name </td>
<td> <input type="text" name="txtuname"
value=<?php echo $row['User_name']?>> 	
<br>
</td>
</tr>
<tr>
<td> Password </td>
<td> <input type="password" name="txtps"
value=<?php echo $row['password']?>>
<br>
</td>  	
</tr>
<tr>
<td>  Area id </td>
<td>
<select name="textarea"> 
<?php
while($row=mysqli_fetch_array($result1))
{
?>
<option value="<?php echo $row['Area_id']; ?>"> <?php echo $row['Area_name']; ?> </option>
<?php
}
?>
</select>
</td>	
</tr>
<tr>
<td>  Create date</td>
<td> <input type="date" name="txtdate"
value=<?php echo $row['Create_date']?>>
<br>
</td>  	
</tr>
<tr>
<td> <input type="submit" value="submit" method="post"> </td>
</tr>
</table>	
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
if (isset($_POST["txtfname"]) )
{
	$fname = $_POST["txtfname"];
	$lname = $_POST["txtlname"];
	$add = $_POST["txtad"];
	$email = $_POST["txtemail"];
	$numb = $_POST["txtno"];
	$gender = $_POST["gender"];
	$usern = $_POST["txtuname"];
	$pass = $_POST["txtps"];
	$area = $_POST["textarea"];
	$date = $_POST["txtdate"];
	if ($fname!='' && $lname!=''&& $add!=''&& $email!=''&& $numb!=''&& $gender!='' && $usern!='' && $pass!='' && $area!='' && $date!='')
	{
		$sql = "update customer set F_name='".$fname."' , L_name='".$lname."' , Address='".$add."',Email='".$email."',Contact_no='".$numb."' , Gender='".$gender."',User_name='".$usern."',Password='".$pass."',Area_id='".$area."',Create_date='".$date."'
		where Customer_id = '".$id."' ";
		$result = mysqli_query($conn,$sql);
		

		if ($result)
		{
			header("Location:customer_tbl.php");
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
</body>
</html>