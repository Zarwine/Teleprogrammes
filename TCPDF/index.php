<?php
include('libraries/TCPDF/tcpdf.php');
$pdf = new TCPDF('p','mm','A4');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();
$pdf->Cell(190,10,"This is a cell",1,1,'C');
$pdf->writeHTMLCell(0,0,'','',"<h1>This is HTML Content</h1>",1,1);
$pdf->Cell(20,10,"cell",1,0);
$pdf->Output();