<?php require 'functions/ViewFunctions.php';?>
<?php require 'links.php';?>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
    <?php require 'header.php';?>
    </header>
    <!--header end-->
    <!--sidebar start-->
   <?php require 'sidebar.php';?>
    <!--sidebar end-->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-list-alt"></i> Unapproved Orders</h3>
          </div>
        </div>
            <!--notification start-->
        <section class="panel">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Unapproved Orders
              </header>
              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th> Customer ID</th>
                    <th> Product Name</th>
                    <th> Quantity</th>
                    <th> Amount</th>
                    <th> Date</th>
                    <th>Approve / Reject</th>
                  </tr>
                     <?php if(!empty($uorders)): $eventsCount=0; foreach ($uorders as $uorder):?>
                  <tr> 
                    <td class="text-center"><?php echo $uorder->order_user_id;?></td>
                    <td><?php echo $uorder->product_name;?></td>
                    <td class="text-center"><?php echo $uorder->product_quantity;?></td>
                    <td class="text-center"><?php echo $uorder->order_amount;?></td>
                    <td><?php echo $uorder->order_date_created;?></td>
                    <td>
                      <div class="btn-group">
                        
                        <a class="btn btn-success" href="unapproved_orders.php?approve=<?php echo $uorder->order_id;?>">Approve</a>
                        <a class="btn btn-danger" href="unapproved_orders.php?reject=<?php echo $uorder->order_id;?>">Reject</a>
                      </div>
                    </td>
                  </tr>
                <?php endforeach; endif ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
      </section>
    </section>
  </section>
    <!--main content end-->
<?php require 'footer.php';?>
