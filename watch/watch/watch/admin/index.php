<?php
session_start();
include("header.php");
if(isset($_POST["login"]))
  {
  $mail=$_POST["name"];
  $pw=$_POST["password"];
  $que="select * from admin where email='$mail' and password='$pw'";
  $res=mysqli_query($con,$que);
  if(!mysqli_num_rows($res))
  {
    echo "User not exist or password is invalid";
  }
  else
  {
    $_SESSION["ua"]=$mail;
    header("Location:view_register.php");
  }
}

echo $hh;

?>
<!-- ================ start banner area ================= --> 
  
  <!-- ================ end banner area ================= -->
  
  <!--================Login Box Area =================-->
  <section class="login_box_area section-margin">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="login_box_img">
            <div class="hover">
              
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="login_form_inner">
            <h3>Log in to enter</h3>
            <form class="row login_form" action="" id="contactForm" method="POST">
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="name" name="name" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
              </div>
              <div class="col-md-12 form-group">
                <input type="text" class="form-control" id="name" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
              </div>
              <div class="col-md-12 form-group">
                <div class="creat_account">
                  <input type="checkbox" id="f-option2" name="selector">
                  <label for="f-option2">Keep me logged in</label>
                </div>
              </div>
              <div class="col-md-12 form-group">
                <input type="submit" name="login" class="button button-login w-100" value="Login">
                <a href="#">Forgot Password?</a>
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
 