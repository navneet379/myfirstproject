<?php


//including the database connection file
require_once("../config/connection.php");
 
//getting id of the data from url
if(isset($_GET['id']))
{
$id = $_GET['id'];
 
//deleting the row from table
$sql = "delete from package where P_id='".$id."'";
$result=mysqli_query($conn,$sql);
}

 header("Location:package_tbl.php"); 

?>