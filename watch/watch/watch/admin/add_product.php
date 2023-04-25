  <?php
session_start();
if(isset($_SESSION["ua"]))
{
include("header.php");
if(isset($_POST['submit']))
{ 
  
  $nm=$_POST['name'];
  $img=$_FILES['image']['name'];
  $des=$_POST['description'];
  $pri=$_POST['price'];
 
  $cat=$_POST['category'];
  $dir="../img/product/"; 
  $tmpnm=$dir.$img; 
  if(move_uploaded_file($_FILES['image']['tmp_name'],$tmpnm))
  {
  $arr=getimagesize($tmpnm);    
  list($w,$h,$t,$a)=$arr;
  if($t>2)
    {
    echo "Sorry, wrong type";
    die();
    }
  else
    {
      $que="insert into product values(NULL,'$nm','$img','$des',$pri,'$cat')";
    //  echo $que;
    mysqli_query($con,$que);
    $id=mysqli_insert_id($con);
    $newnm=$dir.$id.'.jpg';
    //echo $tmpnm;
    //echo $newnm;
    rename($tmpnm,$newnm);
    $newnm=$id.'.jpg';
    mysqli_query($con,"UPDATE product SET product_image='$newnm' WHERE id=$id");
    }
   header("Location:view_product.php");
  }
  
}
echo $hh;
echo $dd;
?>     <section class="section-margin--small">
    <div class="container">

      <div class="row">
        
        <div class="col-md-8 col-lg-9">
          <form action="#/" class="form-contact contact_form" action="#" method="POST" enctype="multipart/form-data" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-12">
                <div class="form-group">
                  <input class="form-control" name="name" id="Category" type="text" placeholder="Enter your Product Name">
                </div>
                <div class="form-group">
                  <input class="form-control" name="image" id="description" type="file" placeholder="Select Image">
                </div>
                 <div class="form-group">
                  <input class="form-control" name="description" id="description" type="text" placeholder="Enter Discription">
                </div>
                 <div class="form-group">
                  <input class="form-control" name="price" id="description" type="text" placeholder="Enter Price">
                </div>
                 
                <div>
                 <select name="category" id="category" class="form-control"  required="required" placeholder="">
                  <option>Select Category</option>
                  <?php
                   $res=mysqli_query($con,"select * from category");
                    while($row=mysqli_fetch_row($res))
                     {
                         echo "<option value='$row[1]'>$row[1]</option>";
                     }
                  ?>
              </select>
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