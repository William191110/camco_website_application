<?php
require 'dbConfig.php';
$DB_Conn=DB_Con();

function numberOfusers($DB_Conn){
	$query=$DB_Conn->query("SELECT * FROM users WHERE user_type=0;");
	if ($query->rowCount()) {
		$numOfusers=$query->rowCount();
		return $numOfusers;
	} else{
		$numOfusers=0;
		return $numOfusers;
	}

}
$numOfusers=numberOfusers($DB_Conn);

function numberOfproducts($DB_Conn){

	$query=$DB_Conn->query("SELECT sum(product_number) as totalproducts FROM products");
	$query->execute();
    $row=$query->fetch(PDO::FETCH_ASSOC);
    $numOfproducts=$row['totalproducts'];
    if($numOfproducts>0){
    	return $numOfproducts;
    }
     else{
		$numOfproducts=0;
		return $numOfproducts;
	}

}
$numOfproducts=numberOfproducts($DB_Conn);

function numberOforders($DB_Conn){
	$query=$DB_Conn->query("SELECT sum(product_quantity) AS totalorders FROM orders WHERE order_status = 0;");
	$query->execute();
    $row=$query->fetch(PDO::FETCH_ASSOC);
    $numOforders=$row['totalorders'];
	if ($numOforders>0) {
		return $numOforders;
	} else{
		$numOforders=0;
		return $numOforders;
	}

}
$numOforders=numberOforders($DB_Conn);

function numberOfevents($DB_Conn){
	$query=$DB_Conn->query("SELECT * FROM events");
	if ($query->rowCount()) {
		$numOfevents=$query->rowCount();
		return $numOfevents;
	} else{
		$numOfevents=0;
		return $numOfevents;
	}

}
$numOfevents=numberOfevents($DB_Conn);

function RegisteredUsers($DB_Conn){
	$sql = $DB_Conn->prepare("SELECT
	    user_id, 
		user_name,
		user_phone,
		user_email,
		user_type,
		user_location FROM users
		WHERE user_type=0;");
	$sql->execute();
	while ($row=$sql->fetchAll(PDO::FETCH_ASSOC)) {
		$users = $row;
		return $users;
	}
}
$users=RegisteredUsers($DB_Conn);

function ViewProducts($DB_Conn) {
	$sql =$DB_Conn->prepare("SELECT 
		product_id, 
		product_name,
		product_price,
		product_number, 
		product_description 
		FROM products");
	$sql->execute();
	while ($row = $sql->fetchAll(PDO::FETCH_ASSOC)) {
		$products=$row;
		return $products;
	}
}

$products = ViewProducts($DB_Conn);


function Categories($DB_Conn){
	$sql =$DB_Conn->prepare("SELECT category_name FROM categories");
	$sql->execute();
	while ($row = $sql->fetchAll(PDO::FETCH_OBJ)) {
		$categories = $row;
		return $categories;
	}
}
$categories=Categories($DB_Conn);

function UnapprovedOrders($DB_Conn){
	$sql=$DB_Conn->prepare("SELECT
	    orders.order_id, 
		orders.order_user_id,
		products.product_name,
		orders.product_quantity,
		orders.order_amount,
		orders.order_date_created 
		FROM orders 
		LEFT JOIN products 
		ON products.product_id = orders.order_product_id
		WHERE order_status=0");
	$sql->execute();
	while ($row=$sql->fetchAll(PDO::FETCH_OBJ)) {
		$uorders=$row;
		return $uorders;
	}
}
$uorders=UnapprovedOrders($DB_Conn);

function ApprovedOrders($DB_Conn){
	$sql=$DB_Conn->prepare("SELECT
	    orders.order_id, 
		orders.order_user_id,
		products.product_name,
		orders.product_quantity,
		orders.order_amount,
		orders.order_date_created 
		FROM orders 
		LEFT JOIN products 
		ON products.product_id = orders.order_product_id
		WHERE order_status=1");
	$sql->execute();
	while ($row=$sql->fetchAll(PDO::FETCH_OBJ)) {
		$aorders=$row;
		return $aorders;
	}
}
$aorders=ApprovedOrders($DB_Conn);

function OrdersHistory($DB_Conn){
	$sql=$DB_Conn->prepare("SELECT
	    orders.order_id, 
		orders.order_user_id,
		products.product_name,
		orders.product_quantity,
		orders.order_amount,
		orders.order_date_created 
		FROM orders 
		LEFT JOIN products 
		ON products.product_id = orders.order_product_id
		WHERE order_status=2");
	$sql->execute();
	while ($row=$sql->fetchAll(PDO::FETCH_OBJ)) {
		$ordersh=$row;
		return $ordersh;
	}
}
$ordersh=OrdersHistory($DB_Conn);

function Events($DB_Conn){
	$sql=$DB_Conn->prepare("SELECT event_id, event_name, event_host, event_guest,event_location, event_start_date, event_start_time FROM events");
	$sql->execute();
	
	while ($row=$sql->fetchAll(PDO::FETCH_ASSOC)) {
		$events=$row;
		return $events;
	}
}
$events=Events($DB_Conn);

//DELETE EVENT
if(isset($_REQUEST['event_id']))
{
$event_id=intval($_GET['event_id']);
$sql = "DELETE FROM events WHERE event_id=:id";
$query = $DB_Conn->prepare($sql);
$query-> bindParam(':id',$event_id, PDO::PARAM_STR);
$query -> execute();
echo "<script>alert('Event successfully deleted');</script>";
echo "<script>window.location.href='./events.php'</script>";
}

//APPROVING ORDER
if(isset($_REQUEST['approve'])) {
	$order_id=intval($_GET['approve']);

	function ApproveOrder($DB_Conn){ 
		global $order_id;

		$query=$DB_Conn->prepare("UPDATE orders SET order_status=:os 
			WHERE order_id=:oid");

		$query->bindParam(':os', $order_status, PDO::PARAM_STR);
		$query->bindParam(':oid', $order_id, PDO::PARAM_STR);
		$order_status=1;
		
 	if($query->execute())
 	{
 	  echo "<script>alert('Order Has Been Approved');</script>"; 
 	  echo "<script>window.location.href='./unapproved_orders.php'</script>";	
 	}
 	else
 	{
 	echo "<script>alert('Cannot Approve Order, something went wrong. Please try again');</script>";
 	}

	}
	ApproveOrder($DB_Conn);
}

//REJECTING ORDER
if(isset($_REQUEST['reject'])) {
	$order_id=intval($_GET['reject']);

	function ApproveOrder($DB_Conn){ 
		global $order_id;

		$query=$DB_Conn->prepare("DELETE FROM orders WHERE order_id=:oid");

		$query->bindParam(':oid', $order_id, PDO::PARAM_STR);
		
 	if($query->execute())
 	{
 	  echo "<script>alert('Order Has Been Rejected');</script>";
 	  echo "<script>window.location.href='./unapproved_orders.php'</script>";	
 	}
 	else
 	{
 	echo "<script>alert('Cannot Reject Order, something went wrong. Please try again');</script>";
 	}
	}
	ApproveOrder($DB_Conn);
}

//REMOVING PRODUCT 
if(isset($_REQUEST['remove'])) {
	$product_id=intval($_GET['remove']);

	function RemoveProduct($DB_Conn){ 
		global $product_id;

		$query=$DB_Conn->prepare("DELETE FROM products WHERE product_id=:id");

		$query->bindParam(':id', $product_id, PDO::PARAM_STR);
		
 	if($query->execute())
 	{
 	  echo "<script>alert('Product Has Been Removed');</script>"; 
 	  echo "<script>window.location.href='./view_products.php'</script>"; 	
 	}
 	else
 	{
 	echo "<script>alert('Cannot Remove product, something went wrong. Please try again');</script>";
 	}
	}
	RemoveProduct($DB_Conn);
}

//REJECTING ORDER
if(isset($_REQUEST['delorder'])) {
	$order_id=intval($_GET['delorder']);

	function ApproveOrder($DB_Conn){ 
		global $order_id;

		$query=$DB_Conn->prepare("DELETE FROM orders WHERE order_id=:oid");

		$query->bindParam(':oid', $order_id, PDO::PARAM_STR);
		
 	if($query->execute())
 	{
 	  echo "<script>alert('Record is successfully deleted');</script>";
 	  echo "<script>window.location.href='./orders_history.php'</script>";	
 	}
 	else
 	{
 	echo "<script>alert('Cannot delete record, something went wrong. Please try again');</script>";
 	}
	}
	ApproveOrder($DB_Conn);
}
?>