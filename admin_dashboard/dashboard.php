<?php require 'functions/ViewFunctions.php';?>
<?php require 'links.php';?>

  <!-- container section start -->
  <section id="container" class="">
    <?php require 'header.php';?>
    <?php require 'sidebar.php';?>
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Camco Adminstrator</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.php">Dashboard</a></li>
            </ol>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-user"></i>
              <div class="count"><?php echo $numOfusers;?></div>
              <div class="title">Total Users</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-database"></i>
              <div class="count"><?php echo $numOfproducts;?></div>
              <div class="title">Total Products</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-database"></i>
              <div class="count"><?php echo $numOforders;?></div>
              <div class="title">Total Orders</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-calendar"></i>
              <div class="count"><?php echo $numOfevents;?></div>
              <div class="title">Total Events</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>
        <!--/.row-->


        <div class="row">
          <div class="col-lg-9 col-md-12">
<div class="panel panel-default">
              <div class="panel-heading">
                <h2><i class="fa fa-flag-o red"></i><strong>Registered Customers</strong></h2>
                <div class="panel-actions">
                  <a href="index.html#" class="btn-setting"></a>
                  <a href="index.html#" class="btn-minimize"></a>
                  <a href="index.html#" class="btn-close"></a>
                </div>
              </div>
              <div class="panel-body">
                <table class="table bootstrap-datatable table-hover countries">
                  <thead>
                    <tr>
                      <th class="text-center">ID</th>
                      <th>User</th>
                      <th>Phone Number</th>
                      <th>Email</th>
                      <th>Location</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($uorders)): foreach ($users as $user) :?>
                    <tr>
                      <td class="text-center"><?php echo $user['user_id'];?></td>
                      <td><?php echo $user['user_name'];?></td>
                      <td><?php echo $user['user_phone'];?></td>
                      <td><?php echo $user['user_email'];?></td>
                      <td><?php echo $user['user_location'];?></td>
                    </tr>
                    <?php endforeach; endif ?>
                  </tbody>
                </table>
              </div>
            </div>
            </div>

<!-- CAMCO WEB & COMPANY INFO -->
          <div class="col-md-3">
            <!-- List starts -->
            <ul class="today-datas">
              <!-- List #1 -->
              <li>
                <!-- Graph -->
                <div><span id="todayspark1" class="spark"></span></div>
                <!-- Text -->
                <div class="datas-text">11,500 visitors/day</div>
              </li>
              <li>
                <div><span id="todayspark2" class="spark"></span></div>
                <div class="datas-text">15,000 Page views</div>
              </li>
              <li>
                <div><span id="todayspark3" class="spark"></span></div>
                <div class="datas-text">30.55% Orders Rate</div>
              </li>
              <li>
                <div><span id="todayspark4" class="spark"></span></div>
                <div class="datas-text">MK46,00 Revenue/Day</div>
              </li>
              <li>
                <div><span id="todayspark5" class="spark"></span></div>
                <div class="datas-text">12,000000 visitors every Month</div>
              </li>
            </ul>
          </div> 
<!-- CAMCO WEB & COMPANY INFO -->
        </div>

        </div><br><br>
      </section>
      <?php require 'footer.php';?>