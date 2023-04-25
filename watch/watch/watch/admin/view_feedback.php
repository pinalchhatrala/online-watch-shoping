<?php
include("header.php");
echo $hh;
?>
<div class="breadcrumb-wrap">
    <div class="container-fluid">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">View Feedback</li>
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
									<th>Name</th>
									<th>Mail</th>
									<th>Experience</th>
									<th>Comment</th>
									<th>Remove</th>
								</tr>
							</thead>
							<?php
							$res=mysqli_query($con,"select * from feedback");
							while($row=mysqli_fetch_array($res))
							{?>
								
							<tbody class="align-middle">
								<tr>
									<td><?php echo $row[1];?></td>
									<td><?php echo $row[2];?></td>
									<td><?php echo $row[3];?></td>
									<td><?php echo $row[4];?></td>
									<td><a href='del_feed.php?id=<?php echo $row[0];?>'>Delete</a></td>
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
?>