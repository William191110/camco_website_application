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
            <h3 class="page-header"><i class="fa fa-list-alt"></i> Orders History</h3>
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
                     <th> Record</th>
                    <th> Customer ID</th>
                    <th> Product Name</th>
                    <th> Quantity</th>
                    <th> Amount</th>
                    <th> Date</th>
                    <th>Delete Record</th>
                  </tr>
                     <?php $i=1; if(!empty($ordersh)): $eventsCount=0; foreach ($ordersh as $order):?>
                  <tr> 
                    <td class="text-center"><?php echo $i++;?></td>
                    <td class="text-center"><?php echo $order->order_user_id;?></td>
                    <td><?php echo $order->product_name;?></td>
                    <td class="text-center"><?php echo $order->product_quantity;?></td>
                    <td class="text-center"><?php echo $order->order_amount;?></td>
                    <td><?php echo $order->order_date_created;?></td>
                    <td>
                      <div class="btn-group">
                        <a class="btn btn-danger" href="orders_history.php?delorder=<?php echo $order->order_id;?>">Delete</a>
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
