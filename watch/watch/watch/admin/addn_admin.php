<?php
session_start();
include("header.php");
echo $hh;
if(isset($_POST["feedback"]))
{
                
  $nm=$_POST["Username"];
  $pwd=$_POST["password"];
  $qt="insert into admin values(NULL,'$nm','$pwd')"; 
  $data=mysqli_query($con,$qt);
  if($data)
  {
    header("location:add_admin.php");
    echo "Sucesssfully Add Admin";
  }
  else
  {
    echo "Unsucessfully";
  }
  }
?>
<!-- ================ contact section start ================= -->
  <section class="section-margin--small">
    <div class="container">

      <div class="row">
        <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
          <div class="media contact-info">
            
          </div>
          <div class="media contact-info">
            
          </div>
          <div class="media contact-info">
            
           
          </div>

        </div>

        <div class="col-md-8 col-lg-9">
          Add New Admin<br><br>
          <form action="#/" class="form-contact contact_form" action="contact_process.php" method="POST" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <input class="form-control" name="Username" id="Username" type="text" placeholder="Enter your Username">
                </div>
              
                <div class="form-group">
                  <input class="form-control" name="password" id="experience" type="text" placeholder="Enter password">
                </div>
               
              </div>
              <div class="col-lg-7">
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <input type="submit" name="feedback" class="button button-login w-100" value="Add Admin">

            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ contact section end ================= -->
<?php
echo $hf;
?>