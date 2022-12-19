<?php
require 'DB_CONNECTION.php';


require 'rotation.php';

if(isset($_POST['order_receipt'])){


$userid=$_POST['userid'];
$order_location=$_POST['order_location'];

$date=date("m-d-Y");





$ordersTrack="SELECT orders.*, products.* 
FROM orders 
LEFT JOIN products 
ON products.product_id = orders.order_product_id 
WHERE orders.order_user_id= '".$userid."' AND orders.order_status = 1";
$getOrderDetails=mysqli_query($con, $ordersTrack);



class PDF extends PDF_Rotate
{
function RotatedText($x,$y,$txt,$angle)
{
	//Text rotated around its origin
	$this->Rotate($angle,$x,$y);
	$this->Text($x,$y,$txt);
	$this->Rotate(0);
}

function RotatedImage($file,$x,$y,$w,$h,$angle)
{
	//Image rotated around its upper-left corner
	$this->Rotate($angle,$x,$y);
	$this->Image($file,$x,$y,$w,$h);
	$this->Rotate(0);
}
}

$pdf = new PDF('P','mm','A4');

$pdf->AddPage();

/*set font to arial, bold, 14pt*/
$pdf->SetFont('Arial','B',20);





/*Cell(width , height , text , border , end line , [align] )*/
$pdf->image('assets/img/logo.png', 10,6, 30);
$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(59 ,10,'',0,1);


$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'Order Details',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'',0,1);


$pdf->SetFont('Arial','',10);



$pdf->Cell(25 ,5,'Customer ID:',0,0);
$pdf->Cell(34 ,5,$userid,0,1);
$pdf->Cell(25 ,5,'Issued Date:',0,0);
$pdf->Cell(34 ,5,$date,0,1);
$pdf->Cell(25 ,5,'Location:',0,0);
$pdf->Cell(34 ,5,$order_location,0,1);



 
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);


$pdf->RotatedImage('circle.png',60,100,40,16,45);
$pdf->SetFont('Arial','', 13);
$pdf->RotatedText(68,103,'Order Approved',40);


$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Order List:',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(15 ,6,'Order ID',1,0,'C');
$pdf->Cell(65 ,6,'Product Name',1,0,'C');
$pdf->Cell(40 ,6,'Price',1,0,'C');
$pdf->Cell(22 ,6,'Quantity	',1,0,'C');
$pdf->Cell(40 ,6,'Grand Total',1,1,'C');/*end of line*/
/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);



while ($row=mysqli_fetch_assoc($getOrderDetails)){
		$pdf->Cell(15 ,6,$row["order_id"],1,0);
		$pdf->Cell(65 ,6,$row["product_name"],1,0);
		$pdf->Cell(40 ,6,number_format($row["product_price"],2),1,0,'R');
		$pdf->Cell(22 ,6,$row["product_quantity"],1,0,'R');
		$pdf->Cell(40 ,6,number_format($row["order_amount"],2),1,1,'R');
	}


$pdf->Output();

foreach ($getOrderDetails as $keys => $values) {        
$order_product_id=mysqli_real_escape_string($con, $values["order_product_id"]);
$order_status=mysqli_real_escape_string($con, $values["order_status"]);





$updateOrders = "UPDATE orders SET order_status='2' WHERE order_product_id='".$order_product_id."' ";

if ($con->query($updateOrders) === TRUE) {	  
}

}
}



?>

