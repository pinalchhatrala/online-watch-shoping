<?php
session_start();

if(isset($_SESSION['ua']))
{
include("header.php");
if(isset($_POST['change']))
	{
		$pass=$_POST["password"];
		$conpass=$_POST["conpassword"];
		if($conpass==$pass)
				{
				$sql="update admin set password='$pass' where email='".$_SESSION["ua"]."'";
				echo $sql;
				$res=mysqli_query($con,$sql);
				}
			else	
				echo "Plz Confirm password";
		
	}
echo $hh;
echo $dd;
?>
     <section class="section-margin--small">
    <div class="container">

      <div class="row">
        
        <div class="col-md-8 col-lg-9">
          <form action="#/" class="form-contact contact_form" action="#" method="POST" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <input class="form-control" name="password" id="password" type="text" placeholder="Enter your Password">
                </div>
                <div class="form-group">
                  <input class="form-control" name="conpassword" id="conpassword" type="text" placeholder="Enter Confirm Password">
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <input type="submit" name="change" class="button button-login w-100" value="Change Password">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
        <!-- Login End -->
<?php
echo $hf;
}
else
{
  header("location:index.php");
}
?>        