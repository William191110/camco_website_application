<?php
require 'dbConfig.php';
$DB_Conn=DB_Con();

//ADD PRODUCT
if (isset($_POST['addproducts'])) {
	$pimg=$_POST['pimg'];
	$pname=$_POST['pname'];
	$pprice=$_POST['pprice'];
	$prodnum=$_POST['prodnum'];
	$pdescription=$_POST['pdescription'];

	function AddProduct($DB_Conn){
		global $pimg, $pname ,$pprice, $prodnum, $pdescription;

		$query=$DB_Conn->prepare("INSERT INTO products (product_name, product_price,product_img_url, product_number, product_description) 
			 VALUES(:pn,:pp,:img,:pnum,:pd) ");
		$query->bindParam(':pn', $pname, PDO::PARAM_STR);
		$query->bindParam(':img', $pimg, PDO::PARAM_STR);
		$query->bindParam(':pp', $pprice, PDO::PARAM_INT);
		$query->bindParam(':pnum',$prodnum, PDO::PARAM_INT);
		$query->bindParam(':pd', $pdescription, PDO::PARAM_STR);
		@$query->execute();
		$lastInsertId = $DB_Conn->lastInsertId();
 	if($lastInsertId)
 	{
 	  echo "<script>alert('Product succesfully added');</script>";
 	  echo "<script>window.location.href='./add_products.php'</script>";	
 	}
 	else
 	{
 	echo "<script>alert('Cannot add product, something went wrong. Please try again');</script>";
 	}

	}
	AddProduct($DB_Conn);

}

//UPDATE PRODUCT
if (isset($_POST['upproducts'])) {
	$pid=$_POST['pid'];
	$pimg=$_POST['pimg'];
	$pname=$_POST['pname'];
	$pprice=$_POST['pprice'];
	$prodnum=$_POST['prodnum'];
	$pdescription=$_POST['pdescription'];

	function UpdateProduct($DB_Conn){
		global $pid, $pimg, $pname ,$pprice, $prodnum, $pdescription;

		$query=$DB_Conn->prepare("UPDATE products SET product_name=:pn, product_img_url=:img, product_price=:pp, 
			 product_number=:pnum, product_description=:pd  
			WHERE product_id=:id");

	$query->bindParam(':pn', $pname, PDO::PARAM_STR);
		$query->bindParam(':img', $pimg, PDO::PARAM_STR);
		$query->bindParam(':pp', $pprice, PDO::PARAM_INT);
		$query->bindParam(':pnum',$prodnum, PDO::PARAM_INT);
		$query->bindParam(':pd', $pdescription, PDO::PARAM_STR);
		$query->bindParam(':id', $pid, PDO::PARAM_STR);
 	if($query->execute())
 	{
 	  echo "<script>alert('Product succesfully Updated');</script>";
 	  echo "<script>window.location.href='./view_products.php'</script>";	
 	}
 	else
 	{
 	echo "<script>alert('Cannot update product, something went wrong. Please try again');</script>";
 	}

	}
	UpdateProduct($DB_Conn);

}


//ADD EVENT
if (isset($_POST['addevent'])) {
	$ename=$_POST['ename'];
	$hname=$_POST['hname'];
	$gname=$_POST['gname'];
	$location=$_POST['location'];
	$sdate=$_POST['sdate'];
	$edate=$_POST['edate'];
	$stime=$_POST['stime'];
	$etime=$_POST['etime'];

	function AddEvent($DB_Conn){
		global $ename, $hname ,$gname, $location, $sdate, $edate ,$stime, $etime;

		$query=$DB_Conn->prepare("INSERT INTO events (event_name, event_host,event_guest, event_location, event_start_date,event_end_date,event_start_time,event_end_time) 
			 VALUES(:en,:hn,:gn,:lc,:sd,:ed,:st,:et)");
		$query->bindParam(':en', $ename, PDO::PARAM_STR);
		$query->bindParam(':hn', $hname, PDO::PARAM_STR);
		$query->bindParam(':gn', $gname, PDO::PARAM_STR);
		$query->bindParam(':lc',$location, PDO::PARAM_STR);
		$query->bindParam(':sd', $sdate, PDO::PARAM_STR);
		$query->bindParam(':ed', $edate, PDO::PARAM_STR);
		$query->bindParam(':st', $stime, PDO::PARAM_STR);
		$query->bindParam(':et', $etime, PDO::PARAM_STR);
		$query->execute();
		$lastInsertId = $DB_Conn->lastInsertId();
 	if($lastInsertId)
 	{
 	  echo "<script>alert('Event succesfully added');</script>";
 	  echo "<script>window.location.href='./add_events.php'</script>";	
 	}
 	else
 	{
 	echo "<script>alert('Cannot add event, something went wrong. Please try again');</script>";
 	}

	}
	AddEvent($DB_Conn);

}

//UPDATE EVENT
if (isset($_POST['eupdate'])) {
	$eventid=$_POST['eventid'];
	$ename=$_POST['ename'];
	$hname=$_POST['hname'];
	$gname=$_POST['gname'];
	$location=$_POST['location'];
	$sdate=$_POST['sdate'];
	$edate=$_POST['edate'];
	$stime=$_POST['stime'];
	$etime=$_POST['etime'];

	function UpdateEvent($DB_Conn){
		global $eventid, $ename, $hname ,$gname, $location, $sdate, $edate ,$stime, $etime;

		$query=$DB_Conn->prepare("UPDATE events SET event_name=:en, event_host=:hn, 
			event_guest=:gn, event_location=:lc, event_start_date=:sd, event_end_date=:ed, 
			event_start_time=:st, event_end_time=:et 
			WHERE event_id=:eid");

		$query->bindParam(':en', $ename, PDO::PARAM_STR);
		$query->bindParam(':hn', $hname, PDO::PARAM_STR);
		$query->bindParam(':gn', $gname, PDO::PARAM_STR);
		$query->bindParam(':lc', $location, PDO::PARAM_STR);
		$query->bindParam(':sd', $sdate, PDO::PARAM_STR);
		$query->bindParam(':ed', $edate, PDO::PARAM_STR);
		$query->bindParam(':st', $stime, PDO::PARAM_STR);
		$query->bindParam(':et', $etime, PDO::PARAM_STR);
		$query->bindParam(':eid',$eventid, PDO::PARAM_INT);
 	if($query->execute())
 	{
 	  echo "<script>alert('Event succesfully Updated');</script>";
 	  echo "<script>window.location.href='./events.php'</script>";	
 	}
 	else
 	{
 	echo "<script>alert('Cannot update event, something went wrong. Please try again');</script>";
 	}

	}
	UpdateEvent($DB_Conn);

}


?>