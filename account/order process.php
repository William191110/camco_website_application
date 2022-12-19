<?php 
require 'DB_CONNECTION.php';

@session_start();
if(isset($_POST["order_btn"])){

//ASSIGNING VARIABLES
$product_id= "product_id";
$product_img_url = "product_img_url";
$product_name = "product_name";
$product_price = "product_price";
$product_quantity = "product_quantity";
$product_number = "product_number";

if(isset($_SESSION['cart'])){
$item_array_id=array_column($_SESSION["cart"], "product_id");
if(!in_array($_GET["product_id"], $item_array_id))
{
$count=count($_SESSION['cart']);
$item_array=array(
'product_id' =>$_GET['product_id'],
'product_img_url' =>$_POST['product_img_url'],
'product_name' =>$_POST['product_name'],
'product_price' =>$_POST['product_price'],
'product_quantity' =>$_POST['product_quantity'],
'product_number' =>$_POST['product_number']
);
$_SESSION['cart'][$count]=$item_array;  
}
else{
  echo '<script>alert("Item is already ordered")</script>';
} 
}
else{
$item_array=array(
'product_id' =>$_GET['product_id'],
'product_img_url' =>$_POST['product_img_url'],
'product_name' =>$_POST['product_name'],
'product_price' =>$_POST['product_price'],
'product_quantity' =>$_POST['product_quantity'],
'product_number' =>$_POST['product_number']
);
//storing details above into $_SESSION['cart']
$_SESSION['cart'][0]=$item_array;
}
//@array_push($_SESSION['cart']);  
}
?>