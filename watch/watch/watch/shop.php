<?php
include("header.php");
echo $hh;
?>
	<!--================ End Header Menu Area =================-->


	<!-- ================ start banner area ================= -->	
	<section class="blog-banner-area" id="category">
		<div class="container h-100">
			<div class="blog-banner">
				<div class="text-center">
					<h1>Shop Category</h1>
					<nav aria-label="breadcrumb" class="banner-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Shop Category</li>
            </ol>
          </nav>
				</div>
			</div>
    </div>
	</section>
	<!-- ================ end banner area ================= -->


	<!-- ================ category section start ================= -->		  
  <section class="section-margin--small mb-5">
    <div class="container">
      <div class="row">
        <div class="col-xl-3 col-lg-4 col-md-5">
          <div class="sidebar-categories">
            <div class="head">Browse Categories</div>
            <ul class="main-categories">
              <li class="common-filter">
                <form action="#">
                  <?php
          $res=mysqli_query($cn,"Select * from category");
          while($row=mysqli_fetch_array($res))
          {
            $res1=mysqli_query($cn,"select * from product where category='".$row[0]."'");
            $n=mysqli_num_rows($res1);
                    echo '
                    <li class="filter-list"><a href="shop.php?cat='.$row[1].'"><label for="chain">'.$row[1].'<span> ('.$n.')</span></label></a></li>';
          }?>
                  <ul>
                  
                    
                  </ul>
                </form>
              </li>
            </ul>
          </div>
          <div class="sidebar-filter">
            
              
          </div>
        </div>
        <div class="col-xl-9 col-lg-8 col-md-7">
          <!-- Start Filter Bar -->
          
          <!-- End Filter Bar -->
          <!-- Start Best Seller -->
          <section class="lattest-product-area pb-40 category-list">

            <div class="row">
              <?php 
      if(isset($_REQUEST['cat']))
        $resp=mysqli_query($cn,"select * from product where category='".$_REQUEST['cat']."'");
      else
        $resp=mysqli_query($cn,"select * from product");
      while($rowp=mysqli_fetch_array($resp))
      {
        
      ?>
              <div class="col-md-6 col-lg-4">
                <div class="card text-center card-product">
                  <div class="card-product__img">
                    <img class="card-img" src="img/product/<?php echo $rowp['product_image'];?>" hight="200%" width="200%" alt="">
                     <ul class="card-product__imgOverlay">
                        <li><button><i class="ti-search"></i></button></li>
                        <li><a href="product_details.php?pid=<?php echo $rowp['id'];?>"><button><i class="ti-shopping-cart"></i></button></a></li>
                        <li><button><i class="ti-heart"></i></button></li>
                    </ul>
                  </div>
                  <div class="card-body">
                    <h4 class="card-product__title"><a href="#"><?php echo $rowp['product_name'];?></a></h4>
                    <p class="card-product__price"><?php echo $rowp['price'];?></p>
                  </div>
                </div>
              </div>
              <?php
            }
            ?>
            </div>
          </section>
          <!-- End Best Seller -->
        </div>
      </div>
    </div>
  </section>
	<!-- ================ category section end ================= -->		  

<?php
echo $hf;
?>