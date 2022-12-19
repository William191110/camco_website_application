<!-- ================================= Header ============================================ -->
<?php require 'links.php'; ?>
<?php require 'header.php'; ?>
<!-- =====================End Header====================================================== -->

<!--================================= TRACKING ORDER DETAILS ========================== -->
<?php $ordersTrack="SELECT orders.*, products.product_name, products.product_img_url 
FROM orders 
LEFT JOIN products 
ON products.product_id = orders.order_product_id 
WHERE orders.order_user_id= '".$userid."' ";
$getOrderDetails=mysqli_query($con, $ordersTrack);?>
<!-- =================================TRACKING ORDER DETAILS============================= -->

<main id="main">   
<!-- =======  Section ======= -->
<section id="settings" class="contact">
<br>
<div class="container">
<a class="navbar-brand" href="#">
<img src="assets/img/logo.png" width="70" height="40" alt="" loading="lazy"> <span style="font-weight: bold;">Camco Orders</span>
  </a>
  <h2>Customer ID: #<?php echo $userid;?></h2>
  <p><marquee>Your Orders Will Be Approved If products ordered are available in stock</marquee></p>
  <p>Your orders list:</p>

  <form method="POST" action="ordersReceipt.php">   
  <table class="table table-hover table-bordered" style="cursor: pointer;">
    <thead>
      <tr>
        <th>Order ID</th>
        <th>Image</th>
        <th>Product Name</th>
        <th>Quantity</th>
        <th>Grand Total</th>
        <th>Order Date</th>
        <th>Order Status</th>
      </tr>
    </thead>
    <tbody>
<?php 
while($row=mysqli_fetch_assoc($getOrderDetails))
{
?>    
        <tr>
        <td><?php echo $row["order_id"];?></td>
        <td><img class="img-responsive" src="../img/products/<?php echo $row["product_img_url"];?>" style="height: 40px; border-radius: 60%;"></td>
        <td><?php echo $product_id ="".$row["product_name"]."";?></td>
        <input type="hidden" name="userid" value="<?php echo $userid;?>"/>
        <input type="hidden" name="order_location" value="<?php echo $row["order_location"];?>"/>
        <td><?php echo $row["product_quantity"];?></td>
        <td>MK<?php echo number_format($row["order_amount"],2);?></td>
        <td><?php echo $row["order_date_created"];?></td>
<!-- ============================== IF ORDER APPROVED / NOT ============================= -->
        <td id="status">
        <?php $orderStatus="".$row["order_status"]."";
        if($orderStatus == 0){?>
<span class="text-danger font-weight-bold">Not Approved</span>
        <?php }
        elseif ($orderStatus == 1) {?>
          <span class="text-info font-weight-bold">Approved</span>
        <?php }
        elseif ($orderStatus == 2) {?>
          <span class="text-success font-weight-bold">Purchased</span>
        </td>
        <?php }
        ?> 
      </tr>
<!-- =========================IF ORDER APPROVED / NOT =================================== -->
<?php
}
?>
</tbody>
  </table>
    <button type="submit" name="order_receipt" class="btn btn-primary receipt"><i class="bx bxs-receipt"></i> Download Receipt</button>
</form>
</div>
    </section><!-- End settings Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php require 'footer.php';?>