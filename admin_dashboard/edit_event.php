
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
             <form method="POST" action="edit_event.php">
           <?php  
$event_id = intval($_GET['event_id']);
$sql ="SELECT * FROM events WHERE event_id=:id";
$query = $DB_Conn-> prepare($sql);
$query->bindParam(':id', $event_id, PDO::PARAM_STR);
$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0) 
{
foreach ($results as $result)
{
?>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">Name</label>
      <input type="hidden" name="eventid" class="form-control" value="<?php echo $result->event_id;?>">
      <input type="text" name="ename" class="form-control" value="<?php echo $result->event_name;?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Host</label>
      <input type="text" name="hname" class="form-control" value="<?php echo $result->event_host;?>" required>
    </div>
  </div>
    <div class="form-group col-md-6">
      <label for="">Guest</label>
      <input type="text" name="gname" class="form-control" value="<?php echo $result->event_guest;?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">Location</label>
      <input type="text" name="location" class="form-control" value="<?php echo $result->event_location;?>" required>
    </div>
      <div class="form-group col-md-6">
      <label for="">Start Date</label>
      <input type="date" name="sdate" class="form-control" value="<?php echo $result->event_start_date;?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">End Date</label>
      <input type="date" name="edate" class="form-control" value="<?php echo $result->event_end_date;?>" required>
    </div>
         <div class="form-group col-md-6">
      <label for="">Start Time</label>
      <input type="time" name="stime" class="form-control" value="<?php echo $result->event_start_time;?>" required>
    </div>
    <div class="form-group col-md-6">
      <label for="">End Time </label>
      <input type="time" name="etime" class="form-control" value="<?php echo $result->event_end_time;?>" required>
    </div>
  </div>
  <div class="container" style="padding-left: 45%;">
  <button type="submit" name="eupdate" class="btn btn-primary">Update</button>
</div>
<?php
 }
}
 ?>
</form>
            </section>
          </div>
        </div>
      </section>
    </section>
    <!--main content end-->
   <?php require 'footer.php';?>