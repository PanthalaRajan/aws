<?php
include "db.php";
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='insert')
{
$id=$_GET['id'];
mysqli_query($con,"INSERT myinvestments select * from recommend where id=$id") 
			or die ("Query 1 is inncorrect........");
header("location: dashboard.php"); 
mysqli_close($con);
}
?>