<?php
session_start();
if(isset($_SESSION["un"]))
{
include("header.php");
echo $hh;
$uid=$_SESSION["un"];
$res=mysqli_query($cn,"select * from cart where userid='$uid'");

?>
<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<th class="image">Item</th>
							<th class="cart_price">Price</th>
							<th class="quantity">Quantity</th>
							<th class="total">Total</th>
							<th class="cart_delete"></th>
							
						</tr>
					</thead>
					<tbody>
					<?php
					$tt=0;
					while($row=mysqli_fetch_row($res))
					{
						$res1=mysqli_query($cn,"select * from product where id=$row[2]");
						$row1=mysqli_fetch_row($res1);
						$t=0;

						?>
					<tr>
							<td class="cart_product"><img src="../img/product/<?php echo $row1[2];?>" height='200' width='200'></td>
							
							<td class="cart_price">Rs.<?php echo $row[4];?></td>
							<td class="quantity"><?php echo $row[3];?></td>
							
							<td class="total"><?php echo $row[4]*$row[3];$t=$row[4]*$row[3];$tt=$tt+$t;?></td>
							<td></td>
							
							<td class="cart_delete"><a class="cart_quantity_delete" href="cart_delete.php?cid=<?php echo $row[0];?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
				<div class="total_area">
				<ul>
				<li>
					<h3>Total to pay: <span><?php echo $tt;?></span></h3></li>
					</ul>
					
				</div>
				<center><a class="btn btn-default check_out" href="checkout.php">Check Out</a></center>
			</div>
		</div>
	</section>
<?php
echo $hf;
}
else
	header("Location:../login.php");
?>