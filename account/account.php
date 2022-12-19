 <!-- ================================= Header ================================================= --> <?php require 'links.php'; ?> 
<?php require 'header.php'; ?>
  <!-- =====================End Header=========================================================== -->

  <!-- ===================== GETTING CATEGORY DETAILS ============================================ -->
<?php $Category="SELECT categories.*, products.product_name, products.product_img_url 
FROM categories 
LEFT JOIN products 
ON products.product_category_id = categories.category_id 
 LIMIT 3 OFFSET 2";
$getCategory=mysqli_query($con, $Category);?>
<!-- ===================== End CATEGORY ====================================================== -->

<!-- ===================== MAIN ACCOUNT SECTION - PROMOTION SECTION ============================ -->
<main id="main" style="background-color: #f5f8fd;">
<br>
<div class="container-fluid section-title text-center">
          <h2 class="text-warning font-weight-bold" style="text-decoration: overline; "><i class="bx bx-purchase-tag font-weight-bold"></i> Camco Promotions</h2>
        </div>
        <div class="container"><small><a href="products.php" class="text-info font-weight-bold text-left"><i class="bx bx-gift font-weight-bold"></i> View Promotions</a></small></div>
        <br>
<div id="home" class="container-fluid" >
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="../img/banner5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="font-weight-bold badge badge-danger" style="font-size: 20px;">Mothers Day Promo. <i class="bx bx-gift bg-danger text-light"></i></h5>
        <p class="font-weight-bold text-light bg-info" style="font-size: 35px;">Let's Celebrate Our Mothers with a <em><span class="font-weight-bold text-warning" style="font-size: 40px;">50% OFF</span></em> Order Now!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/banner4.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="font-weight-bold badge badge-info" style="font-size: 20px;">Camco Promo.</h5>
        <p class="font-weight-bold text-light bg-success" style="font-size: 35px;">Get New Equipments At a Low Price at Camco with a <em><span class="font-weight-bold text-warning" style="font-size: 40px;">45% OFF!</span></em></p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="../img/banner5.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class="font-weight-bold badge badge-success" style="font-size: 20px;">Zakwathu Promo.</h5>
        <p class="font-weight-bold text-light bg-primary" style="font-size: 35px;">Get Ready For Zakwathu Promo. On 16th Nov. With a <em><span class="font-weight-bold text-warning" style="font-size: 40px;">30% OFF!</span></em></p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>

<!-- ===================== END ACCOUNT SECTION - PROMOTION SECTION ============================ -->
<br>
<!-- ===================== DISPLAYING CATEGORIES  ============================ -->
<div class="container-fluid">
<div class="container">
  <div class="section-title">
          <h2 class="text-dark font-weight-bold" style="text-decoration: underline; "> <i class="bx bx-sort"></i> Categories</h2>
</div>
<br>
<div class="row justify-content-center">   
<?php  
       while ($row=mysqli_fetch_assoc($getCategory)){?>
<div class="card ml-3 mb-2" style="width: 18rem;">
<img class="card-img-top" src="../img/products/<?php echo $row['product_img_url'];?>" alt="Card image cap">
<div class="card-body text-center">
<h5 class="card-title"><?php echo $row["category_name"];?></h5>
<a href="categories.php?action=agricultural&click=construction&press=heavy" class="btn btn-primary">View More</a>
</div>
</div>
<?php
}
?>
</div>
</div>
</div>
<!-- ===================== END DISPLAYING CATEGORIES  ============================ -->
<br>
<br>
</main><!-- End #main -->
<?php require 'footer.php';?>

