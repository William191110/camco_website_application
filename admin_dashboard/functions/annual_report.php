<?php
require 'dbConfig.php';


require 'rotation.php';





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
$pdf->image('../img/logo.png', 10,6, 30);
$pdf->Cell(71 ,10,'',0,0);
$pdf->Cell(59 ,10,'',0,1);


$pdf->SetFont('Arial','B',15);
$pdf->Cell(71 ,5,'Annual Report',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'',0,1);


$pdf->SetFont('Arial','',10);



$pdf->Cell(25 ,5,'Year:',0,0);
$pdf->Cell(34 ,5,2020,0,1);
$pdf->Cell(25 ,5,'Released Date:',0,0);
$pdf->Cell(34 ,5,'11 November',0,1);
$pdf->Cell(25 ,5,'City:',0,0);
$pdf->Cell(34 ,5,'Lilongwe',0,1);



 
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Annual Report Details:',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(20 ,6,'Month',1,0,'C');
$pdf->Cell(45 ,6,'Orders Rate/month',1,0,'C');
$pdf->Cell(45 ,6,'Products sold/month',1,0,'C');
$pdf->Cell(32 ,6,'Revenue/month',1,0,'C');
$pdf->Cell(40 ,6,'Profits',1,1,'C');/*end of line*/
/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);




		$pdf->Cell(20 ,6,'January',1,0);
		$pdf->Cell(45 ,6,'76.34%',1,0,'C');
		$pdf->Cell(45 ,6,'79%',1,0,'C');
		$pdf->Cell(32 ,6,'MK460,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'80%',1,1,'C');

		$pdf->Cell(20 ,6,'February',1,0);
		$pdf->Cell(45 ,6,'50.45%',1,0,'C');
		$pdf->Cell(45 ,6,'50%',1,0,'C');
		$pdf->Cell(32 ,6,'MK160,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'40%',1,1,'C');

		$pdf->Cell(20 ,6,'March',1,0);
		$pdf->Cell(45 ,6,'37.45%',1,0,'C');
		$pdf->Cell(45 ,6,'28%',1,0,'C');
		$pdf->Cell(32 ,6,'MK560,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'60%',1,1,'C');

		$pdf->Cell(20 ,6,'April',1,0);
		$pdf->Cell(45 ,6,'60%',1,0,'C');
		$pdf->Cell(45 ,6,'70%',1,0,'C');
		$pdf->Cell(32 ,6,'MK100,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'40%',1,1,'C');

		$pdf->Cell(20 ,6,'May',1,0);
		$pdf->Cell(45 ,6,'49%',1,0,'C');
		$pdf->Cell(45 ,6,'57.3%',1,0,'C');
		$pdf->Cell(32 ,6,'MK300,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'35%',1,1,'C');

		$pdf->Cell(20 ,6,'June',1,0);
		$pdf->Cell(45 ,6,'70.03%',1,0,'C');
		$pdf->Cell(45 ,6,'79%',1,0,'C');
		$pdf->Cell(32 ,6,'MK100,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'35%',1,1,'C');

		$pdf->Cell(20 ,6,'July',1,0);
		$pdf->Cell(45 ,6,'20.45%',1,0,'C');
		$pdf->Cell(45 ,6,'39%',1,0,'C');
		$pdf->Cell(32 ,6,'MK250,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'50%',1,1,'C');

		$pdf->Cell(20 ,6,'August',1,0);
		$pdf->Cell(45 ,6,'30.34%',1,0,'C');
		$pdf->Cell(45 ,6,'29%',1,0,'C');
		$pdf->Cell(32 ,6,'MK340,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'48%',1,1,'C');

		$pdf->Cell(20 ,6,'September',1,0);
		$pdf->Cell(45 ,6,'78%',1,0,'C');
		$pdf->Cell(45 ,6,'69.7%',1,0,'C');
		$pdf->Cell(32 ,6,'MK320,00',1,0,'C');
		$pdf->Cell(40 ,6,'20%',1,1,'C');

		$pdf->Cell(20 ,6,'October',1,0);
		$pdf->Cell(45 ,6,'45%',1,0,'C');
		$pdf->Cell(45 ,6,'39%',1,0,'C');
		$pdf->Cell(32 ,6,'MK230,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'34%',1,1,'C');

		$pdf->Cell(20 ,6,'November',1,0);
		$pdf->Cell(45 ,6,'46.00%',1,0,'C');
		$pdf->Cell(45 ,6,'34%',1,0,'C');
		$pdf->Cell(32 ,6,'MK340,000',1,0,'C');
		$pdf->Cell(40 ,6,'90%',1,1,'C');

		$pdf->Cell(20 ,6,'December',1,0);
		$pdf->Cell(45 ,6,'75.00%',1,0,'C');
		$pdf->Cell(45 ,6,'67%',1,0,'C');
		$pdf->Cell(32 ,6,'MK100,540,000',1,0,'C');
		$pdf->Cell(40 ,6,'61%',1,1,'C');
	


$pdf->Output();





?>

