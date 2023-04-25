<?php
session_start();
include("header.php");
$uid=$_SESSION["un"];
//$uid="aaa";
$tt=0;
$que="select * from cart where userid='".$uid."'";
$res=mysqli_query($cn,$que);
//echo $que;
echo mysqli_num_rows($res);
$dt=date("y-m-d");
$q="insert into order1 values(NULL,'".$uid."','".$dt."','order','".$tt."')";
$res1=mysqli_query($cn,$q);
echo $q;
$oid=mysqli_insert_id($con);
while($row=mysqli_fetch_row($res))
{
$resi=mysqli_query($cn,"select * from product where id=".$row[2]);
$rowi=mysqli_fetch_row($resi);
$i="insert into order_details values(NULL,".$oid.",".$row[2].",".$row[3].",".$row[5].")";
echo $i;
$rowi=mysqli_query($cn,$i);
mysqli_query($cn,"delete from cart where id=".$row[0]);
$tt+=$row[3]*$row[4];
}
mysqli_query($cn,"update order1 set total=".$tt." where id=".$oid);
header("Location:orders.php?oid=$oid");
?>
