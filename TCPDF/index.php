<?php
include('libraries/TCPDF/tcpdf.php');
$pdf = new TCPDF('p','mm','A4');
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
$pdf->AddPage();

$pdf->SetFont('Helvetica','',16);
$pdf->Cell(190,10,"Test pour Teleprogramme",1,1,'C');
$pdf->Ln();
$pdf->SetFont('Helvetica','',12);

$html = "
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Gender</th>
            </tr>
        </thead>
        <tbody>
";

$file = file_get_contents("MOCK_DATA.json");
$data = json_decode($file);
foreach($data as $student) {
    $html .= "
        <tr>
            <td>". $student->id ."</td>
            <td>". $student->first_name ."</td>
            <td>". $student->last_name ."</td>
            <td>". $student->email ."</td>
            <td>". $student->gender ."</td>
        </tr>
    ";
};

$html .= "
        </tbody>
    </table>
    <style>
        table {
            border-collapse: collapse;
            border: 2px solid #888;
        }
        th,td {
            border: 1px solid #888;
            padding: 2px;
        }
        table tr th {
            background-color: #888;
            color: #fff;
            font-weight: bold;
        }
    </style>
";

$pdf->writeHTMLCell(192,0,9,'',$html,0);
$pdf->Output();