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
            <h3 class="page-header"><i class="fa fa-table"></i> Events</h3>
          </div>
        </div>
        <!-- page start-->
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
               <header class="panel-heading">
                <a href="#">Events to take place</a>
              </header>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th class="text-center">Event Number</th>
                      <th>Name</th>
                      <th>Host</th>
                      <th>Guest</th>
                      <th>Location</th>
                      <th>Start Date</th>
                      <th>Start Time</th>
                      <th>Edit/Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $x=1; if(!empty($events)): $eventsCount=0; foreach($events as $event):?>
                    <tr>
                      <td class="text-center"><?php echo $x++;?></td>
                      <td><?php echo $event['event_name'];?></td>
                      <td><?php echo $event['event_host'];?></td>
                      <td><?php echo $event['event_guest'];?></td>
                      <td><?php echo $event['event_location'];?></td>
                      <td><?php echo $event['event_start_date'];?></td>
                      <td><?php echo $event['event_start_time'];?></td>
                      <td>
                      <div class="btn-group">
                      <a class="btn btn-primary" href="edit_event.php?event_id=<?php echo $event['event_id'];?>" name="edit">Edit</a>
                      <a  class="btn btn-danger" href="events.php?event_id=<?php echo $event['event_id'];?>">Delete</a>
                      </div>
                    </td>
                    </tr>
                  <?php  endforeach; endif ?>
                  </tbody>
                </table>
              </div>
            </section>
          </div>
        </div>
      </section>
    </section>
    <!--main content end-->
    <?php require 'footer.php';?>