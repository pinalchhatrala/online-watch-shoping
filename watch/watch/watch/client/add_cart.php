<?php
session_start();
include("header.php");
$itemid=$_REQUEST["pid"];
$userid=$_SESSION["un"];
echo $userid;
$res=mysqli_query($cn,"select price from product where id=$itemid");
$row=mysqli_fetch_array($res);
$qt="insert into cart values(null,'$userid',$itemid,1,$row[0])";
//echo $qt;
mysqli_query($cn,$qt);
header("Location:index.php");
?>
