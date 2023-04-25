<?php
session_start();
if(isset($_SESSION["ua"]))
{
include("header.php");
$id=$_REQUEST["id"];
if(isset($_POST["submit"]))
{
  $nm=$_POST['name'];
  $des=$_POST['description'];
  $pri=$_POST['price'];
  $gm=$_POST['gram'];
  $cat=$_POST['category'];
  $que="update product set name='$nm',description='$des',price='$pri',gram='$gm',category='$cat' where id=$id";
  mysqli_query($con,$que);
  //echo $que;
  header("Location:view_product.php");
}
$res=mysqli_query($con,"select * from product where id=$id");
$row=mysqli_fetch_row($res);
echo $hh;
?>   
 <section class="section-margin--small">
    <div class="container">

      <div class="row">
        
        <div class="col-md-8 col-lg-9">
          <form action="#/" class="form-contact contact_form" action="#" method="POST" enctype="multipart/form-data" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <input class="form-control" name="name" id="Category" value="<?php echo $row[1];?>" type="text" placeholder="Enter your Product Name">
                </div>
                 <div class="form-group">
                  <input class="form-control" name="description" value="<?php echo $row[3];?>" id="description" type="text" placeholder="Enter Discription">
                </div>
                 <div class="form-group">
                  <input class="form-control" name="price" value="<?php echo $row[4];?>" id="description" type="text" placeholder="Enter Price">
                </div>
                 <div class="form-group">
                  <input class="form-control" name="gram" id="description" value="<?php echo $row[5];?>" type="text" placeholder="Enter Gram">
                </div>
                <div>
                 <select name="category" id="category" class="form-control"  required="required" value="<?php echo $row[6];?>" placeholder="">
                  <option>Select Category</option>
                  <?php
                  $res=mysqli_query($con,"select * from category");
                while($row1=mysqli_fetch_row($res))
                {
                  if($row[6]==$row1[0])
                    echo "<option value='$row1[0]' selected>$row1[1]</option>";
                  else
                    echo "<option value='$row1[0]'>$row1[1]</option>";
                }
                  ?>
              </select>
            </div>
              </div>
            </div>
            <div class="form-group text-center text-md-right mt-3">
              <input type="submit" name="submit" class="button button-login w-100" value="Update Product">
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