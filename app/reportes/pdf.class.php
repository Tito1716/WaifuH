<?php
//se manda a llamar la libreria de fpdf
require_once('../libraries/fpdf181/fpdf.php');

class PDF extends FPDF{
    //se define el encabezado del reporte 
    function Header()
{
    // Logo
    $this->Image('../../web/img/logo final.png',90,10,30);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(80);
    // Salto de línea
    $this->Ln(20);
    
    
}
//se define el pie de pagina del reporte 
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}
?>