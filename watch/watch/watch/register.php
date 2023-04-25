<?php
include("header.php");

if(isset($_POST["crt"]))
{
    $fnm=$_POST["firstname"];
	$lnm=$_POST["lastname"];
    $mail=$_POST["mail"];
    $pass=$_POST["password"];
    $conpass=$_POST["conpassword"];
	
	$res=mysqli_query($cn,"select *from registration where mail='$mail'");
	$r=mysqli_num_rows($res);			
	if($r)
		{
		echo '<script>alert("User Already Exists")</script>';
		}
	else
		{
		if($pass==$conpass)
			{
			$que="insert into registration(id,firstname,lastname,mail,password) values(NULL,'$fnm','$lnm','$mail','$pass')";
			//echo $que;
			mysqli_query($cn,$que);
			echo '<script>alert("User Create Successfully")</script>';
			}
		else
		{
         echo '<script>alert("Plz check password and confirm password")</script>';
		}
		}
	
	}
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
							<a class="button button-account" href="login.php">Login Now</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="login_form_inner register_form_inner">
						<h3>Create an account</h3>
						<form class="row login_form" action="#" method="post" id="register_form" >
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="firstname" placeholder="FirstName" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Firstname'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="name" name="lastname" placeholder="LastName" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Lastname'">
							</div>
							<div class="col-md-12 form-group">
								<input type="text" class="form-control" id="email" name="mail" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'">
              </div>
              <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
              </div>
              <div class="col-md-12 form-group">
								<input type="password" class="form-control" id="confirmPassword" name="conpassword" placeholder="Confirm Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm Password'">
							</div>
							
							<div class="col-md-12 form-group">
								<button type="submit" value="submit" name="crt" class="button button-register w-100">Register</button>
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