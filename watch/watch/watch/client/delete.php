<?php 
$cn=mysqli_connect("localhost","root","","watch"); 
$cid=$_REQUEST["cid"]; 
$que="delete from cart where id=$cid"; mysqli_query($cn,$que); 
 	echo $que; 
header("Location:cart.php"); 
?> 
