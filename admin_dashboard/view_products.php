<?php require 'functions/ViewFunctions.php';?>
<?php require 'links.php';?>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php require 'header.php';?>
    <!--header end-->
    <!--sidebar start-->
    <?php require 'sidebar.php';?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i> Products</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
          <section class="panel">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Products Available in stock
              </header>
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th> Product ID</th>
                    <th>Product Name</th>
                    <th>Price</th>
                    <th> Total Products</th>
                    <th> Description</th>
                    <th> Actions</th>
                  </tr>
                  <?php foreach ($products as $product):?>
                  <tr>
                    <td class="text-center"><?php echo $product['product_id'];?></td>
                    <td><?php echo $product['product_name'];?></td>
                    <td><?php echo $product['product_price'];?></td>
                    <td class="text-center"><?php echo $product['product_number'];?></td>
                    <td><?php echo $product['product_description'];?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-primary" href="edit_products.php?id=<?php echo $product['product_id'];?>">Edit</a>
                        <a class="btn btn-danger" href="view_products.php?remove=<?php echo $product['product_id'];?>">Delete</a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    <?php require 'footer.php';?>