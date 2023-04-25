<?php
include("header.php");
$id=$_REQUEST["id"];
mysqli_query($con,"delete from contact where id='".$id."'");
header("Location:view_contact.php");
?>