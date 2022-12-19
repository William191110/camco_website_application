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
$pdf->Cell(71 ,5,'Monthly Report',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->Cell(59 ,5,'',0,1);


$pdf->SetFont('Arial','',10);



$pdf->Cell(25 ,5,'Month:',0,0);
$pdf->Cell(34 ,5,'July',0,1);
$pdf->Cell(25 ,5,'Released Date:',0,0);
$pdf->Cell(34 ,5,'11 November 2020',0,1);
$pdf->Cell(25 ,5,'City:',0,0);
$pdf->Cell(34 ,5,'Lilongwe',0,1);



 
$pdf->Cell(130 ,5,'',0,0);
$pdf->Cell(25 ,5,'',0,0);
$pdf->Cell(34 ,5,'',0,1);

$pdf->SetFont('Arial','B',15);
$pdf->Cell(130 ,5,'Monthly Report Details:',0,0);
$pdf->Cell(59 ,5,'',0,0);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(189 ,10,'',0,1);



$pdf->Cell(50 ,10,'',0,1);

$pdf->SetFont('Arial','B',10);
/*Heading Of the table*/
$pdf->Cell(20 ,6,'Week',1,0,'C');
$pdf->Cell(45 ,6,'Orders Rate/week',1,0,'C');
$pdf->Cell(45 ,6,'Products sold/week',1,0,'C');
$pdf->Cell(32 ,6,'Revenue/week',1,0,'C');
$pdf->Cell(40 ,6,'Profits',1,1,'C');/*end of line*/
/*Heading Of the table end*/
$pdf->SetFont('Arial','',10);




		$pdf->Cell(20 ,6,'1st',1,0,'C');
		$pdf->Cell(45 ,6,'76.34%',1,0,'C');
		$pdf->Cell(45 ,6,'59%',1,0,'C');
		$pdf->Cell(32 ,6,'MK260,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'80%',1,1,'C');

		$pdf->Cell(20 ,6,'2nd',1,0,'C');
		$pdf->Cell(45 ,6,'50.45%',1,0,'C');
		$pdf->Cell(45 ,6,'50%',1,0,'C');
		$pdf->Cell(32 ,6,'MK100,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'40%',1,1,'C');

		$pdf->Cell(20 ,6,'3rd',1,0,'C');
		$pdf->Cell(45 ,6,'37.45%',1,0,'C');
		$pdf->Cell(45 ,6,'28%',1,0,'C');
		$pdf->Cell(32 ,6,'MK460,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'60%',1,1,'C');

		$pdf->Cell(20 ,6,'4th',1,0,'C');
		$pdf->Cell(45 ,6,'60%',1,0,'C');
		$pdf->Cell(45 ,6,'40%',1,0,'C');
		$pdf->Cell(32 ,6,'MK100,000,000',1,0,'C');
		$pdf->Cell(40 ,6,'40%',1,1,'C');

$pdf->Output();





?>

