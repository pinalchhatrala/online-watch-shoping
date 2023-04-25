<?php
session_start();
if(isset($_SESSION["un"]))
{
include("header.php");
echo $hh;
$uid=$_SESSION["un"];
$res=mysqli_query($cn,"select * from order1 where userid='$uid'");

?>
<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Order Id</td>
							<td class="cart_price">Order Date</td>
							<td class="quantity">Status</td>
							<td class="total">Amount</td>
							<td class="View"></td>
							<td class="Cancel"></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php
					$tt=0;
					while($row=mysqli_fetch_row($res))
					{?>
					<tr>
							<td class="quantity"><?php echo $row[0];?></td>
							<td class="total"><?php echo $row[2];?></td>
							<td class="total"><?php echo $row[3];?></td>
							<td class="total"><?php echo $row[4];?></td>
							<td class="total"><a href="vieworder.php?oid=<?php echo $row[0];?>">View</a></td>
							<td class="cart_delete"><a class="cart_quantity_delete" href="cart_delete.php?cid=<?php echo $row[0];?>"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					<?php
					}
					?>
					</tbody>
				</table>
			</div>
		</div>
	</section>
<?php
echo $hf;
}
else
	header("Location:../login.php");
?>\