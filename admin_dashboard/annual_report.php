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
            <h3 class="page-header"><i class="fa fa-user-md"></i> Annual Report</h3>
            
          </div>
        </div>

<div class="row">
  <div class="col-sm-6">
       <form>
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Name</label>
      <input type="text" class="form-control mb-2" placeholder="Type Year">
    </div>
<br>
  </div>
</form>
</div>
  </div>
  <div class="container">
          <a class="btn btn-info" type="submit" href="functions/annual_report.php">Generate Annual Report</a>
        </div>
        </section>
    </section>
    <!--main content end--><br><br><br><br><br><br><br>
    <?php require 'footer.php';?>