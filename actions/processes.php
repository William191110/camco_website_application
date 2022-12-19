<?php
require 'dbCon.php';
//PRODUCTS
 $CART="SELECT * FROM products LIMIT 3";
 $get3products=mysqli_query($con, $CART);
 
//PRODUCTS
 $products="SELECT * FROM products";
 $getproducts=mysqli_query($con, $products);

 //Events
 $query="SELECT * FROM events ORDER BY event_id desc";
 $Events=mysqli_query($con, $query);

 //RETRIEVING PASSWORD
 if(isset($_POST['retrieve'])){
$user_email=$_POST['user_email'];
$user_password=md5($_POST['user_password']);
$user_name=$_POST['user_name'];

$verify= mysqli_query(
$con, "SELECT * FROM users WHERE user_name= '$user_name' AND user_email='$user_email'");

if(mysqli_num_rows($verify)>0)
{
	  $sql = "UPDATE users SET user_password='".md5($_POST['user_password'])."' WHERE user_email='$user_email' AND user_name='$user_name' ";
if ($con->query($sql) === TRUE) {

  echo '<script>alert("Your Password Has Been Reset")</script>';
  echo '<script>window.location="./index.php"</script>';  
} 
else {
    echo "Error: " . $sql . "<br>" . $con->error;
}
}
else
{
    
	echo "Details Do not match";
}
}
 ?>