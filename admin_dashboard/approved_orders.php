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
            <h3 class="page-header"><i class="fa fa-list-alt"></i> Approved Orders</h3>
          </div>
        </div>
    
            <!--notification start-->
        <section class="panel">
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
             Approved Orders
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                    <th> Customer ID</th>
                    <th> Product Name</th>
                    <th> Quantity</th>
                    <th> Amount</th>
                    <th> Date</th>
                    <?php if(!empty($aorders)): $eventsCount=0; foreach ($aorders as $aorder) :?> 
                  <tr>
                    <td class="text-center"><?php echo $aorder->order_user_id;?></td>
                    <td><?php echo $aorder->product_name;?></td>
                    <td class="text-center"><?php echo $aorder->product_quantity;?></td>
                    <td class="text-center"><?php echo $aorder->order_amount;?></td>
                    <td><?php echo $aorder->order_date_created;?></td>
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