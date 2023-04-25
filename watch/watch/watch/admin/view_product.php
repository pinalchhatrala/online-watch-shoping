<?php
session_start();
if(isset($_SESSION["ua"]))
{
include("header.php");
echo $hh;
echo $dd;
?>
<section id="cart_items"><!--form-->
	<div class="container">
				<div class="col-sm-11"  style = "margin:0 0 0 50px;">
			  <div class="table-responsive cart_info">
				<table class='table table-condensed'>
					<thead>
						<tr class='cart_menu'>
							<td class='id'><center>Id</center></td>
							<td class='nm'><center>Product_Name</center></td>
							<td class='img'><center>Image</center></td>
							<td class='des'><center>Description</center></td>
							<td class='price'><center>Price</center></td>
							
							<td class='category'><center>Category</center></td>
							<td class='ope'><center>Operation</center></td>
							<td class='ope'><center>Operation</center></td>
							<td class='ope'><center>Operation</center></td>
							
							<td></td>
						</tr>
					</thead>
				<tbody>	
				<?php
				$res=mysqli_query($con,"Select * from product");
				while($row=mysqli_fetch_row($res))
				{
					$res1=mysqli_query($con,"select * from category where id=$row[5]");
					
				echo "<tr><td><center>$row[0]</center></td><td><center>$row[1]</center></td><td><center><img src='../img/product/$row[2]' height=100 width=100></center></td><td><center><br>$row[3]</center></td><td><center><br>$row[4]</center></td><td><center><br>$row[5]</center></td><td><center><b><a href='upd_product.php?id=$row[0]'>Update</a></b></center></td><td><center><b><a href='up_image.php?id=$row[0]'>Update Image</a></b></center></td><td><center><b><a href='del_Product.php?id=$row[0]'>Delete</a></b></center></td><td><center><b>";
				}
				?>
				
				</tbody>
				</table>
				
				</div>
				<a href="add_Product.php">Add new Product</a>
				</br></br></br>
				</br>
		
				</div>
			</div>
		</div>
	</section><!--/form-->

<?php
echo $hf;
}
else
	header("Location:index.php");
?>