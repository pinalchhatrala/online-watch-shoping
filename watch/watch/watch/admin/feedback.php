<?php
session_start();
include("header.php");
echo $hh;
if(isset($_POST["feedback"]))
{
                
  $nm=$_POST["name"];
  $msg=$_POST["email_id"];
  $exp=$_POST["experience"];
  $com=$_POST["comment"];
  $qt="insert into feedback values(NULL,'$nm','$msg','$exp','$com')"; 
  $data=mysqli_query($con,$qt);
  if($data)
  {
    echo "Sucesssfully Send Feedback";
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
            <span class="contact-info__icon"><i class="ti-home"></i></span>
            <div class="media-body">
              <h3>near busstand -keshod</h3>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-headphone"></i></span>
            <div class="media-body">
              <h3><a href="tel:9723108426">9723108426</a></h3>
			   <h3><a href="tel:9638751050">9638751050</a></h3>
			    <h3><a href="tel:8200204371">8200204371</a></h3>
              <p>Mon to Fri 9am to 6pm</p>
            </div>
          </div>
          <div class="media contact-info">
            <span class="contact-info__icon"><i class="ti-email"></i></span>
            <div class="media-body">
              <h3><a href="mailto:support@colorlib.com">kpjewellers007@gmail.com</a></h3>
              <p>Send us your query anytime!</p>
            </div>
          </div>
        </div>
        <div class="col-md-8 col-lg-9">
          <form action="#/" class="form-contact contact_form" action="contact_process.php" method="POST" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-5">
                <div class="form-group">
                  <input class="form-control" name="name" id="name" type="text" placeholder="Enter your name">
                </div>
                <div class="form-group">
                  <input class="form-control" name="email_id" id="email" type="email" placeholder="Enter email address">
                </div>
                <div class="form-group">
                  <input class="form-control" name="experience" id="experience" type="text" placeholder="Enter experience">
                </div>
                 <div class="form-group">
                  <input class="form-control" name="comment" id="comment" type="text" placeholder="Enter comment">
                </div>
              </div>
              <div class="col-lg-7">
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <input type="submit" name="feedback" class="button button-login w-100" value="Send Feedback">
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