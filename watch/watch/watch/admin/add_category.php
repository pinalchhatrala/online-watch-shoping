<?php
session_start();
if(isset($_SESSION["ua"]))
{
include("header.php");
if(isset($_POST['submit']))
          { 

            $category=$_POST['category'];
            $description=$_POST['description'];
            $sql="insert into category values(null,'$category','$description')";
            //echo $sql;
            $res=mysqli_query($con,$sql);
            //header("Location:category.php");
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
                  <input class="form-control" name="category" id="Category" type="text" placeholder="Enter your Category Name">
                </div>
                <div class="form-group">
                  <input class="form-control" name="description" id="description" type="text" placeholder="Enter Descriptiond">
                </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <input type="submit" name="submit" class="button button-login w-100" value="Add Category">
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