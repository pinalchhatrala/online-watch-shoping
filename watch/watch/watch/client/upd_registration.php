<?php
session_start();
include("header.php");
if(isset($_POST["update"]))
	{
		$fnm=$_POST["FIRSTNAME"];
		$lnm=$_POST["LASTNAME"];
		$bdate=$_POST["BDATE"];
		$gen=$_POST["GENDAR"];
		$add=$_POST["ADDRESS"];
		$cit=$_POST["CITY"];
		$ste=$_POST["STATE"];
		$cou=$_POST["COUNTRY"];
		$con1=$_POST["CONTACT"];
		$pin=$_POST["PINCODE"];
		$mail=$_POST["MAIL"];
		$id=$_SESSION['un'];

		$qt="UPDATE registration SET  FIRSTNAME='$fnm',LASTNAME='$lnm',BDATE='$bdate',GENDER='$gen',ADDRESS='$add',CITY='$cit',STATE='$ste',COUNTRY='$cou',CONTECT='$con1',PINCODE='$pin' WHERE MAIL='".$_SESSION['un']."'";
		
		$sql=mysqli_query($cn,$qt);
		//header("Location:view_registration.php");	


	}

$result = mysqli_query($cn,"SELECT * FROM registration WHERE MAIL='".$_SESSION['un']."'");
$row= mysqli_fetch_array($result);
echo $hh;
?>
 <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Register</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Register</li>
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
							<h4>Already have an account?</h4>
							<p>There are advances being made in science and technology everyday, and a good example of this is the</p>
							<a class="button button-account" href="login.html">Login Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Update Registration</h3>
						<form class="row login_form" action="#/" method="POST"  id="register_form" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="FIRSTNAME" placeholder="Firstname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Firstname'" value="<?php echo $row['firstname']; ?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="LASTNAME" name="LASTNAME" placeholder="Lastname" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Lastname'" value="<?php echo $row['lastname']; ?>">
              </div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="Dob" name="BDATE" placeholder="Dob" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Dob'" value="<?php echo $row['bdate']; ?>">
              </div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="Gender" name="GENDAR" placeholder="Gender" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Gender'" value="<?php echo $row['gender']; ?>">
              </div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="address" name="ADDRESS" placeholder="address" onfocus="this.placeholder = 'address'" onblur="this.placeholder = 'address'" value="<?php echo $row['address']; ?>">
              </div>
              <div class="col-md-12 form-group">
								<input type="text" class="form-control" id="city" name="CITY" placeholder="city" onfocus="this.placeholder = ''" onblur="this.placeholder = 'city'" value="<?php echo $row['city']; ?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="state" name="STATE" placeholder="state" onfocus="this.placeholder = ''" onblur="this.placeholder = 'state'" value="<?php echo $row['state']; ?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="country" name="COUNTRY" placeholder="country" onfocus="this.placeholder = ''" onblur="this.placeholder = 'country'" value="<?php echo $row['country']; ?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="contect" name="CONTACT" placeholder="contect" onfocus="this.placeholder = ''" onblur="this.placeholder = 'contect'" value="<?php echo $row['contect']; ?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="pincode" name="PINCODE" placeholder="pincode" onfocus="this.placeholder = ''" onblur="this.placeholder = 'pincode'" value="<?php echo $row['pincode']; ?>">
							</div>
							<div class="col-md-12 form-group">
								<input type="hidden" class="form-control" id="email" name="MAIL" placeholder="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'mail'">
							</div>
							
							<div class="col-md-12 form-group">
								 <input type="submit" name="update" class="button button-login w-100" value="update profile">
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