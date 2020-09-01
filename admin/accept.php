<?php


//including the database connection file
require_once("../config/connection.php");
 
//getting id of the data from url
if(isset($_GET['id']))
{
$id = $_GET['id'];
 
//deleting the row from table
$sql = "update booking set booking_status=1 where B_id=$id";
$result=mysqli_query($conn,$sql);

if($result)
{
 header("Location:booking_tbl.php"); 
}
}
?>