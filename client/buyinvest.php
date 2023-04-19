<?php
session_start();
include("../db.php");
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='insert')
{
$user_id=$_GET['user_id'];
    $id=$_POST['id'];
    $name=$_POST['name'];
    $producttype=$_POST['producttype'];
    $instrument=$_POST['instrument'];
    $sector=$_POST['sector'];
    $region=$_POST['region'];
    $country=$_POST['country'];
    $currency=$_POST['currency'];
    $investment=$_POST['investment'];

mysqli_query($con,"insert into myinvestments(id, name, producttype, instrument, sector, region, country, currency, investment) values ('$id', '$name', '$producttype', '$instrument', '$sector', '$region', '$country', '$currency', '$investment')") 
			or die ("Query 1 is inncorrect........");
header("location: dashboard.php"); 
mysqli_close($con);
}
?>
