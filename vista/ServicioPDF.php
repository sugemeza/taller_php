<?php
require('../fpdf/fpdf.php');
require_once('../controlador/Conexion.php');

class ServicioPDF extends FPDF
{
// Page header
    function Header()
    {
        // Arial bold 15
        $this->SetFont('Arial','B',18);
        // Move to the right
        $this->Cell(60);
        // Title
        $this->Cell(70,10,'Reportes de servicios',0,0,'C');
        // Line break
        $this->Ln(20);

        //Cabeceras
        $this->Cell(30, 10,utf8_decode('Código'), 1, 0, 'C', 0);
        $this->Cell(55, 10,utf8_decode('Nombre'), 1, 0, 'C', 0);
        $this->Cell(33, 10,utf8_decode('Categoría'), 1, 0, 'C', 0);
        $this->Cell(40, 10,'Precio', 1, 0, 'C', 0);
        $this->Cell(30, 10,'Estado', 1, 1, 'C', 0);

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
$sql = $Db->query('SELECT * FROM servicios');


$pdf = new ServicioPDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',16);

while ($row = $sql->fetch(PDO::FETCH_ASSOC)){
    $pdf->Cell(30, 10,$row['servicio_id'], 1, 0, 'C', 0);
    $pdf->Cell(55, 10,$row['nombre'], 1, 0, 'C', 0);
    $pdf->Cell(33, 10,$row['categoria_id'], 1, 0, 'C', 0);
    //$pdf->Cell(60, 10,$row['descripcion'], 1, 0, 'C', 0);
    $pdf->Cell(40, 10,$row['precio'], 1, 0, 'C', 0);
    $pdf->Cell(30, 10,$row['estado'], 1, 1, 'C', 0);
}

$pdf->Output();
?>