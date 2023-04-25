<?php
session_start();

include("header.php");
if(isset($_SESSION['ua']))
{
echo $hh;echo $dd;

?>
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">View Registration</li>
        </ul>
    </div>
</div>
<div class="wishlist-page">
	<div class="container-fluid">
		<div class="wishlist-page-inner">
			<div class="row">
				<div class="col-md-12">
					<div class="table-responsive">
						<table class="table table-bordered">
							<thead class="thead-dark">
								<tr>
									<th>Firstname</th>
									<th>Lastname</th>
									<th>Mail</th>
									<th>Mobile</th>
									<th>View</th>
									<th>Remove</th>
								</tr>
							</thead>
							<?php
							$res=mysqli_query($con,"select * from registration");
							while($row=mysqli_fetch_array($res))
							{?>
								
							<tbody class="align-middle">
								<tr>
									<td><?php echo $row[1];?></td>
									<td><?php echo $row["lastname"];?></td>
									<td><?php echo $row["mail"];?></td>
									<td><?php echo $row["contect"];?></td>
									<td><a href='user.php?id=<?php echo $row["MAIL"];?>'>View</a></td>
									<td><a href='del_regi.php?id=<?php echo $row["ID"];?>'>Delete</a></td>
								</tr>
							</tbody>
							<?php } ?>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		
<?php
echo $hf;
}
else
{
	header("location:index.php");
}
?>