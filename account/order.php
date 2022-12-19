<?php
require 'links.php';

if(isset($_POST['ordernow'])){
$total_amount= $_POST["total_amount"];
$items_total=$_POST["items_total"];

foreach ($_SESSION["cart"] as $keys => $values) {        
$product_id=mysqli_real_escape_string($con, $values["product_id"]);
$product_price=mysqli_real_escape_string($con, $values["product_price"]);
$product_quantity=mysqli_real_escape_string($con, $values["product_quantity"]);
$product_number=mysqli_real_escape_string($con, $values["product_number"]);

//PRODUCT NUMBER UPDATE
$UpdateProductNum=$values["product_number"] - $values["product_quantity"];
$UpdateproductNumber= "UPDATE products SET product_number='$UpdateProductNum' WHERE product_id='".$product_id."'";
if ($con->query($UpdateproductNumber) === TRUE) {  
}//PRODUCT NUMBER UPDATE

//STORING ORDERS
//product_quantity x product_price = total amount
$grand_amount = $values["product_price"] * $values["product_quantity"];
$sql= "INSERT INTO orders(
order_id, /*id*/
order_product_id, /*product id*/
product_quantity, /*product quantity*/
order_location, /*location of order*/
order_user_id,  /*user id*/
order_amount /*total products cost*/
)
 
VALUES(
'".NULL."', 
'".$product_id."',
'".$product_quantity."', 
'".$user_location."', 
'".$userid."', 
'".$grand_amount."' 
)";
mysqli_query($con, $sql);
echo '<script>alert("Your orders are being processed")</script>';
echo '<script>window.location="shopping_cart.php"</script>';
unset($_SESSION["cart"]);
}
}
?>