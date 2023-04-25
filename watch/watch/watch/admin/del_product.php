<?php
include("header.php");
$id=$_REQUEST["id"];
mysqli_query($con,"delete from product where id='".$id."'");
header("Location:view_product.php");
?>