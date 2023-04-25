<?php
include("header.php");
$id=$_REQUEST["id"];
mysqli_query($con,"delete from admin where id='".$id."'");
header("Location:add_admin.php");
?>