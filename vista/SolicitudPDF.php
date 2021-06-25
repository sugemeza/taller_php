<?php
require('../fpdf/fpdf.php');
require_once('../controlador/Conexion.php');

class SolicitudPDF extends FPDF
{
// Page header
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial','B',18);
        // Move to the right
        $this->Cell(60);
        // Title
        $this->Cell(70,10,'Reportes de solicitudes',0,0,'C');
        // Line break
        $this->Ln(20);

        //Cabeceras
        $this->Cell(60, 10,utf8_decode('Código'), 1, 0, 'C', 0);
        $this->Cell(60, 10,'Responsable', 1, 0, 'C', 0);
        $this->Cell(70, 10,'Fecha', 1, 1, 'C', 0);
    }

// Page footer
    function Footer()
    {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Page number
        $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
    }
}

$Db = Db:: Conectar();
$sql = $Db->query('SELECT * FROM solicitudes');


$pdf = new SolicitudPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $pdf->Cell(60, 10,$row['solicitud_id'], 1, 0, 'C', 0);
    $pdf->Cell(60, 10,$row['usuario_id'], 1, 0, 'C', 0);
    $pdf->Cell(70, 10,$row['fechaServicio'], 1, 1, 'C', 0);
}

$pdf->Output();
?>