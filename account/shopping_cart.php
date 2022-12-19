
<?php require 'order.php';?>
  <!-- ================================= Header ========================================= -->
 <?php require 'links.php'; ?>
 <?php require 'header.php'; ?>
  <!-- =====================End Header================================================= -->

  <main id="main">

    
    <!-- ======= shopping cart Section ======= -->
    <section id="cart" class="shopping_cart section-bg"  style="background-color: #f5f8fd;">
      <br>
      <div class="container">
        <div class="section-title text-dark">
          <h2><i class="bx bx-cart"></i> My Cart</h2>
        </div>
      <div class="container">
      <h4 class="text-light" style="font-size: 18px;">Items Available In Your Cart</h4>
      </div>
<?php
if(isset($_GET["action"])){
if($_GET["action"] == "delete")
{
foreach ($_SESSION["cart"] as $keys => $values) 
{
if($values["product_id"] == $_GET["product_id"])
{
unset($_SESSION["cart"][$keys]); 
} 
}
}
}
?>
<div class="container">
    <table class="table table-responsive-sm" style="cursor: pointer;">
      <form method="POST" action="order.php">
      <thead>
      <tr class="text-light" style="background-color: #3a8bcd;">
        <th>Product Image</th>
        <th>Order Details</th>
        <th>Remove</th>
 
      </tr>
      </thead>

      <tbody>
       <?php 
       if(!empty($_SESSION["cart"]))
       {
        $total=0;
        foreach ($_SESSION["cart"] as $keys => $values) {?>
      <tr>
        <td> 
      <img class="img-responsive" src="../img/products/<?php echo $values["product_img_url"];?>" style="height: 90px;">
      </td>
      <td class="text-info" style="font-weight: bold;"> 
      <?php echo $values['product_name'];?>
      <hr class="bg-info">
     MK<?php echo number_format($values['product_price'],2);?>
       <hr class="bg-info">
       Quantity: <?php echo $values["product_quantity"];?>
       <hr class="bg-info">
     Total: MK<?php echo number_format($values["product_quantity"] * $values["product_price"],2);?>
      </td>
       <td class="remove-product-btn"><a class="btn btn-danger" type="button" name="submit" href="shopping_cart.php?action=delete&product_id=<?php echo $values["product_id"];?>" style="text-decoration: none;  color: #fff;"><i class="fas fa-trash"></i>Remove</a></td>
      </tr>
      <?php
      $total=$total + ($values["product_quantity"] * $values["product_price"]);
      @$items= $items + $values["product_quantity"]; }
    ?>
 <tr>
  <td></td>
<td class="text-right text-info"><b>Total Items<b>:</td>
<td><?php echo $items_total=number_format($items);?>
   <input type="hidden" name="items_total" value="<?php echo $items_total=number_format($items);?>"/></td>
<td class="text-right text-info"><b>Grand Total<b>:</td>
<td>MK<?php echo $total_amount=number_format($total,2);?>
<input type="hidden" name="total_amount" value="<?php echo number_format($total,2);?>"/>
 </td>
 <td class="proceed-btn"><button class="btn btn-info" type="submit" name="ordernow" value="submit">Order Now</button></td>


 </tr>
    <?php
}
  ?>
    </tbody>
    </form>
    </table>
    <p class="container text-center text-info" style="font-weight: bold;">
<?php $notification="Your Shopping Cart Is Empty";
if(empty($_SESSION["cart"])){ 
echo $notification;
}
?>
</p>
</div>
</section><!-- End shopping cart Section -->


  </main><!-- End #main -->



  <!-- ======= Footer ======= -->
  <?php require 'footer.php';?>