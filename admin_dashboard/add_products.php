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
          <form class="form-validate form-horizontal" method="POST" action="add_products.php">
                 <div class="form-group ">
            <label for="pname" class="control-label col-lg-2">Product image <span class="required"></span></label>
            <div class="col-lg-10">
            <input class="form-control" name="pimg"  type="file" required/>
            </div>
            </div>

            <div class="form-group ">
            <label for="pname" class="control-label col-lg-2">Product Name <span class="required"></span></label>
            <div class="col-lg-10">
            <input class="form-control" name="pname"  type="text" required />
            </div>
            </div>

                    <div class="form-group ">
                    <label for="pprice" class="control-label col-lg-2">Product Price <span class="required"></span></label>
                    <div class="col-lg-10">
                    <input class="form-control"  type="text" name="pprice" required />
                    </div>
                    </div>

                    <div class="form-group ">
                    <label for="prodnum" class="control-label col-lg-2">Number of products <span class="required"></span></label>
                    <div class="col-lg-10">
                    <input class="form-control"  type="text" name="prodnum" required />
                    </div>
                    </div>


                     <div class="form-group ">
                      <label for="cemail" class="control-label col-lg-2">Description <span class="required"></span></label>
                      <div class="col-lg-10">
                      <textarea name="pdescription" class="form-control" type="text"></textarea>
                      </div>
                      </div>
                 
                    <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-primary" type="submit" name="addproducts">Save</button>
                    <a class="btn btn-default" type="button"  href="add_products.php">Cancel</a> 
                    </div>
                    </div>
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