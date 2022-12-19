<?php require 'order process.php'?>

  <!--================================= Header =============================================-->
<?php require 'links.php'; ?>
<?php require 'header.php'; ?>
<!-- =====================End Header  ====================================================-->

<!-- ===================== SELECTING PRODUCTS  ====================================================-->
<?php $products="SELECT * FROM products";
$getproducts=mysqli_query($con, $products);?>
  <main id="main">
<!-- ===================== END SELECTING PRODUCTS ================================================-->

<!-- ======= products Section ======= -->
    <section id="products" class="productssection" style="background-color: #f5f8fd;">
      <div class="container">
        <br>
        <div class="section-title">
        <h2><i class="bx bx-purchase-tag font-weight-bold"></i> All Categories - Products</h2>
        </div>
        <br>
        <div class="row">
          <!--- ====== DISPLAYING PRODUCTS====----->
              <?php  
       while ($row=mysqli_fetch_assoc($getproducts)){?>
          <div class="col-lg-4">                                            <!---==PRODUCT ID====--->
            <form method="POST" action="products.php?product_id=<?php echo $row["product_id"];?>">
                                                       <!---===PRODUCT ID===---->
          <img class="card-img-top" src="../img/products/<?php echo $row['product_img_url'];?>" style="height: auto;">
    <input type="hidden" name="product_img_url" value="<?php echo $row["product_img_url"];?>"/>
          <div class="products card-body text-center" style="cursor: pointer;">

          <!---PRODUCT NAME --->
          <p class="card-title" style="font-size: 16px;"><?php echo $row['product_name'];?></p>
          <input type="hidden" name="product_name" value="<?php echo $row["product_name"];?>"/>
          <!--===PRODUCT NAME===--->

          <!---PRODUCT PRICE --->
          <p class="card-text">MK<?php echo number_format($row['product_price'],2);?></p>
          <input type="hidden" name="product_price" value="<?php echo $row["product_price"];?>"/>
          <!---===PRODUCT PRICE===--->

           <!---===PRODUCT QUANTITY===--->
          <p>Quantity: <input type="number" value="1" min="1" max="<?php echo $row['product_number'];?>"
           name="product_quantity" style="width: 50%;"></p>
           <input type="hidden" name="product_number" value="<?php echo $row["product_number"];?>"/>

           <p class="text-info font-weight-bold"><?php $checkProductNum="".$row['product_number']."";
           if($checkProductNum == 0){?>
            <span class="text-danger font-weight-bold">[Out Of Stock]</span>
           <?php }
           ?></p>
          <!---===PRODUCT QUANTITY===--->
          <button type="submit" name="order_btn" class="btn btn-primary">Add To Cart</button>
        </form>
          </div>
          </div>
        <?php 
        }
        ?> 
          <!--- ======END DISPLAYING PRODUCTS====----->
        </div>
        </div>
    </section><!-- End products Section -->
  </main><!-- End #main -->
  <?php require 'footer.php';?>