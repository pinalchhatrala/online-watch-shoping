<?php
session_start();
include("header.php");
if(isset($_POST["change"]))
	{
	$ps=$_POST['password'];
	$cps=$_POST['conpassword'];
	if($cps==$ps)
		{
		$sql="update registration set password='$ps' where mail='".$_SESSION["un"]."'";
		$res=mysqli_query($cn,$sql);
		echo '<script>alert("Password change successfully")</script>';
		}
	else	
		echo '<script>alert("Plz Confirm password")</script>';
		
}
echo $hh;
?>
  
  <!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Change Password</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">change password</li>
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
					
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner">
						<h3>Change Password</h3>
						<form class="row login_form" action="#" id="contactForm" method="post">
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
							</div>
							<div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="conpassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
							</div>
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" class="button button-login w-100" name="change">Change Password</button>
								
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