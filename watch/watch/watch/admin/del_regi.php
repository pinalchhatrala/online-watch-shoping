<?php
include("header.php");
$id=$_REQUEST["id"];
mysqli_query($con,"delete from registration where ID='".$id."'");
header("Location:view_register.php");
?>