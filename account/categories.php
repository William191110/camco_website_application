<?php require 'order process.php'?>

<!--================================= Header =============================================-->
<?php require 'links.php'; ?>
<?php require 'header.php'; ?>
<!-- =====================End Header  ====================================================-->

  <main id="main">
<!-- ======= products Section 1 ======= -->
    <?php 
if(isset($_GET['action'])){
if($_GET["action"] == "agricultural"){?>        
    <section id="products" class="productssection" style="background-color: #f5f8fd;">
      <div class="container">
        <br>
        <div class="row">
          <?php          
$Category="SELECT categories.category_name, products.* 
FROM categories 
LEFT JOIN products 
ON products.product_category_id = categories.category_id 
WHERE categories.category_id=3";
$getCategory=mysqli_query($con, $Category);
if(mysqli_num_rows($getCategory)>0){
while($row=mysqli_fetch_array($getCategory)){?>
          <div class="col-lg-4">                                            <!---==PRODUCT ID====--->
            <form method="POST" action="categories.php?action=agricultural&click=construction&press=heavy&product_id=<?php echo $row["product_id"];?>">
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
      }
        ?> 
          
        </div>
        </div>
    </section><!-- End products Section 1 -->
    <?php
  }
}
?>

<!-- ======= products Section 2 ======= -->
    <?php 
if(isset($_GET['press'])){
if($_GET["press"] == "heavy"){?>        
    <section id="products" class="productssection" style="background-color: #f5f8fd;">
      <div class="container">
        <br>
        <div class="row">
          <?php          
$Category="SELECT categories.category_name, products.* 
FROM categories 
LEFT JOIN products 
ON products.product_category_id = categories.category_id 
WHERE categories.category_id=1";
$getCategory=mysqli_query($con, $Category);
if(mysqli_num_rows($getCategory)>0){
while($row=mysqli_fetch_array($getCategory)){?>
          <div class="col-lg-4">                                            <!---==PRODUCT ID====--->
             <form method="POST" action="categories.php?action=agricultural&click=construction&press=heavy&product_id=<?php echo $row["product_id"];?>">
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
      }
        ?> 
          
        </div>
        </div>
    </section><!-- End products Section 2-->
    <?php
  }
}
?>
<!-- ======= products Section 3 ======= -->
<?php 
if(isset($_GET['click'])){
if($_GET["click"] == "construction"){?>        
    <section id="products" class="productssection" style="background-color: #f5f8fd;">
      <div class="container">
        <br>
        <div class="row">
          <?php          
$Category="SELECT categories.category_name, products.* 
FROM categories 
LEFT JOIN products 
ON products.product_category_id = categories.category_id 
WHERE categories.category_id=2";
$getCategory=mysqli_query($con, $Category);
if(mysqli_num_rows($getCategory)>0){
while($row=mysqli_fetch_array($getCategory)){?>
          <div class="col-lg-4">                                            <!---==PRODUCT ID====--->
            <form method="POST" action="categories.php?action=agricultural&click=construction&press=heavy&product_id=<?php echo $row["product_id"];?>">
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
      }
        ?> 
          
        </div>
        </div>
    </section><!-- End products Section 3 -->
    <?php
  }
}
?>
</main><!-- End #main -->
<?php require 'footer.php';?>