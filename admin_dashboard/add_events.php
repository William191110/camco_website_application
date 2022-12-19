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
            <h3 class="page-header"><i class="fa fa-table"></i>Create Event</h3>
          </div>
        </div>
        <!-- page start-->
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                <a href="#" class="text-left" style="text-decoration: none;">Events</a>
              </header>
             <form method="POST" action="add_events.php">
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Name</label>
      <input type="text" name="ename" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Host</label>
      <input type="text" name="hname" class="form-control" required>
    </div>
  </div>
    <div class="form-group col-md-6">
      <label for="">Guest</label>
      <input type="text" name="gname" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Location</label>
      <input type="text" name="location" class="form-control" required>
    </div>
      <div class="form-group col-md-6">
      <label for="">Start Date</label>
      <input type="date" name="sdate" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">End Date</label>
      <input type="date" name="edate" class="form-control" required>
    </div>
         <div class="form-group col-md-6">
      <label for="">Start Time</label>
      <input type="time" name="stime" class="form-control" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">End Time </label>
      <input type="time" name="etime" class="form-control" required>
    </div>
  </div>
  <div class="container" style="padding-left: 45%;">
  <button type="submit" name="addevent" class="btn btn-primary">Create Event</button>
</div>
</form>
            </section>
          </div>
        </div>
      </section>
    </section>
    <!--main content end-->
   <?php require 'footer.php';?>