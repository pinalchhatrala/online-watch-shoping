<?php
include("header.php");
$id=$_REQUEST["id"];
mysqli_query($con,"delete from feedback where id='".$id."'");
header("Location:view_feedback.php");
?>