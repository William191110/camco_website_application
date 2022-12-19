<?php require 'functions/ViewFunctions.php';?>
<?php require 'links.php';?>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php require 'header.php';?>
    <!--header end-->
    <!--sidebar start-->
<?php require 'sidebar.php';?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-file-text-o"></i>View Categories &amp; Add Category</h3>
          </div>
        </div>
          <div class="col-lg-12">
            <section class="panel">
          <div class="col-lg-12">
            <section class="panel">
              <br>
 <div class="row">
          <div class="col-md-6 portlets">
                <section class="panel">
              <header class="panel-heading">
                List of categories available
              </header>
              <ul class="list-group">
                <?php $x=1; foreach ($categories as $category) :?>
          <li class="list-group-item"><?php echo $x++;?>.<?php echo $category->category_name;?></li>
              <?php endforeach?>
              </ul>
            </section>
          </div>
          <div class="col-md-6 portlets ">
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="pull-left disabled">Add Categories</div>
                <div class="widget-icons pull-right">
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="padd">
                  <div class="form quick-post">
                    <!-- -->
                    <form class="form-horizontal">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-2" for="name">Name</label>
                        <div class="col-lg-10">
                          <input type="text" class="form-control" placeholder="System No Longer Support This Function" readonly="System No Longer Support This Function">
                        </div>
                      </div>
                      <!-- Buttons -->
                      <div class="form-group">
                        <!-- Buttons -->
                        <div class="col-lg-offset-2 col-lg-9">
                          <button type="submit" class="btn btn-primary disabled">Add</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="widget-foot">
                  <!-- Footer goes here -->
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- project team & activity end -->
            </section>
          </div>
        <!-- page end-->
            </section>
    <!--main content end-->
 <?php require 'footer.php';?>
