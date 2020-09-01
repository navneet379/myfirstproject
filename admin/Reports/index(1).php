<?php
include('config.php');
$database = new Database();
$result = $database->runQuery("select p.P_name , Booking_date , Booking_enddate , count(b.B_id) as total from booking b join package p where b.P_id = p.P_id
GROUP by p.P_id;");
$header = $database->runQuery("SELECT UCASE(`COLUMN_NAME`) 
FROM `INFORMATION_SCHEMA`.`COLUMNS` 
WHERE `TABLE_SCHEMA`='gym' 
AND `TABLE_NAME` in ('booking','package')
and `COLUMN_NAME` in ('B_id','P_name','Booking_date','Booking_enddate')");
require('fpdf/fpdf.php');
$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',10);
// Set header
 $pdf->Image('rename.jpg',10,-1,25);
    // Move to the right
    $pdf->Cell(60);
    // Title
    $pdf->Cell(80,10,'Booking List',1,0,'C');
    // Line break
    $pdf->Ln(20);
			$pdf->Cell(45,20,'Package name',1);
			$pdf->Cell(45,20,'Booking date',1);
			$pdf->Cell(45,20,'Booking end date',1);
			$pdf->Cell(45,20,'Total',1);
			
			
	/*
foreach($header as $heading) {
	foreach($heading as $column_heading)
}*/
foreach($result as $row) {
	$pdf->Ln();
	foreach($row as $column)
		$pdf->Cell(45,12,$column,1);
}
$pdf->Output();

// Set footer
   $pdf->SetY(-15);
    // Arial italic 8
    $pdf->SetFont('Arial','I',8);
    // Page number
    $pdf->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
?>