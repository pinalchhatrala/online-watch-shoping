<?php
session_start();
include("header.php");
if(isset($_POST["change"]))
{
    $fnm=$_POST["firstname"];
	$lnm=$_POST["lastname"];
    $dob=$_POST["dob"];
	$gen=$_POST["gen"];
	$add1=$_POST["add1"];
	$city=$_POST["city"];
	$state=$_POST["state"];
	$country=$_POST["country"];
	$contact=$_POST["contact"];
	$pincode=$_POST["pincode"];
	$que="update registration set firstname='".$fnm."',lastname='".$lnm."',bdate='".$dob."',gender='".$gen."',address='".$add1."',city='".$city."',state='".$state."',country='".$country."',contect='".$contact."',pincode='".$pincode." where mail='".$_SESSION["un"]."'";
	echo $que;
	mysqli_query($cn,$que);
	}
echo $hh;
$res=mysqli_query($cn,"select * from registration where mail='".$_SESSION["un"]."'");
$row=mysqli_fetch_row($res);

?>
  
  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Profile</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->
  
  <!--================Login Box Area =================-->
	<section class="login_box_area section-margin">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="login_box_img">
						<div class="hover">
							<h4>Change Password</h4>
							<a class="button button-account" href="changepassword.php">Change Password</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>My Profile</h3>
						<form class="row login_form" action="#" method="post" id="register_form" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="fname" name="firstname" placeholder="FirstName" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Firstname'" value="<?php echo $row[1];?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="lname" name="lastname" placeholder="LastName" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lastname'" value="<?php echo $row[2];?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="date" class="form-control" id="dob" name="dob" placeholder="Date Of Birth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date Of Birth'" value="<?php echo $row[3];?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="gen" name="gen" placeholder="Gender" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Gender'" value="<?php echo $row[4];?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="add1" name="add1" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" value="<?php echo $row[5];?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="city" name="city" placeholder="City" onfocus="this.placeholder = ''" onblur="this.placeholder = 'City'" value="<?php echo $row[6];?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="state" name="state" placeholder="State" onfocus="this.placeholder = ''" onblur="this.placeholder = 'State'" value="<?php echo $row[7];?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="country" name="country" placeholder="Country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Country'" value="<?php echo $row[8];?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="contact" name="contact" placeholder="Contact" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Contact'" value="<?php echo $row[9];?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="pincode" name="pincode" placeholder="Pin Code" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Pin Code'" value="<?php echo $row[10];?>">
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="change" class="button button-register w-100">Update</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================End Login Box Area =================-->

<?php
echo $hf;
?>