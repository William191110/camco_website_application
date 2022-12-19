<?php require 'functions/InsertFunctions.php';?>
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
            <h3 class="page-header"><i class="fa fa-files-o"></i> Add Products</h3>
          </div>
        </div>
        <!-- Form validations -->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Add products in stock
              </header>
              <div class="panel-body">
                <div class="form">
          <form class="form-validate form-horizontal" method="POST" action="edit_products.php">
           <?php  
$product_id = intval($_GET['id']);
$sql="SELECT * FROM products WHERE product_id=:id";
$query = $DB_Conn->prepare($sql);
$query->bindParam(':id', $product_id, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0) 
{
foreach ($results as $result)
{
?>
            <div class="form-group ">
            <label for="pname" class="control-label col-lg-2">Product image <span class="required"></span></label>
            <div class="col-lg-10">
            <input class="form-control" name="pimg" value="<?php echo $result->product_img_url;?>"  type="file" required/>
            <input class="form-control" name="pid" value="<?php echo $result->product_id;?>"  type="hidden" required/>
            </div>
            </div>

            <div class="form-group ">
            <label for="pname" class="control-label col-lg-2">Product Name <span class="required"></span></label>
            <div class="col-lg-10">
            <input class="form-control" name="pname" value="<?php echo $result->product_name;?>"  type="text" required />
            </div>
            </div>

                    <div class="form-group ">
                    <label for="pprice" class="control-label col-lg-2">Product Price <span class="required"></span></label>
                    <div class="col-lg-10">
                    <input class="form-control" value="<?php echo $result->product_price;?>" type="text" name="pprice" required />
                    </div>
                    </div>

                    <div class="form-group ">
                    <label for="prodnum" class="control-label col-lg-2">Number of products <span class="required"></span></label>
                    <div class="col-lg-10">
            <input class="form-control" type="text" value="<?php echo $result->product_number;?>" name="prodnum" required />
                    </div>
                    </div>


                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Description <span class="required"></span></label>
                      <div class="col-lg-10">
        <textarea name="pdescription" class="form-control" type="text"><?php echo $result->product_description;?></textarea>
                      </div>
                      </div>
                 
                    <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-primary" type="submit" name="upproducts">Save</button>
                    <a class="btn btn-default" type="button"  href="add_products.php">Cancel</a> 
                    </div>
                    </div>
                    <?php
                     }
                   }
                     ?>
                  </form>
                </div>
              </div>
            </section>
          </div>
        </div>
      </section>
    </section>
    <!--main content end-->
    <?php require 'footer.php';?>