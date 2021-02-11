<?php

require_once("fpdf.php");
require_once("../models/usuarios.class.php");

    $pdf = new Ejemplo('P', 'mm', 'letter');
    $pdf->AliasNbPages();
    $pdf->SetMargins(10, 10, 10, 10); //Margenes Izquierda, derecha, arriba, abajo
    $pdf->AddPage();
    //$pdf->SetTopMargins(10);

    $hoy = date("d/m/Y h:i a");

    $pdf->SetFillColor(232,232,232);
    $pdf->SetFont('Arial','B',12);
    
    //$pdf->ln(40);

    $pdf->SetAutoPageBreak(true,25);

    $usuario = new Usuario;
    $info = $usuario->getUsuarioReporte($_GET['id']);

    $pdf->Cell(5);
    $pdf->Cell(95, 10, "Emitido por: ".$info['nombre_usuario']." ".$info['apellido_usuario'], 1, 0, 'C');
    $pdf->Cell(95, 10, "Fecha: ".$hoy, 1, 1, 'C');
    $pdf->ln(5);
    $pdf->Cell(30);
    $pdf->Cell(140, 10, utf8_decode('MANGAS POR GÉNEROS'), 1, 0, 'C');
    $pdf->ln(5);

	$pdf->SetFont('Arial','',11);

    $query = "SELECT id_genero_manga, nombre_genero_manga FROM generos_manga";
    $params = array(null);
    $titulo = Database::getRows($query, $params);

	foreach($titulo as $genero)
	{
        $pdf->ln(10);
        $pdf->Cell(196,10,utf8_decode("Género: ".$genero['nombre_genero_manga']),1,1,'C',2);

        $query = "SELECT p.nombre_manga, p.id_genero_manga, e.nombre_editorial, i.nombre_idioma, a.nombre_autor, p.existencias, p.precio FROM productos_manga p, editoriales e, idiomas i, autores a WHERE p.id_editorial = e.id_editorial AND i.id_idioma = p.id_idioma AND p.id_autor = a.id_autor AND p.id_genero_manga = $genero[id_genero_manga]";
        $params = array(null);
        $productos = Database::getRows($query, $params);

        $pdf->Cell(40,6,'Nombre del manga',1,0,'C',1);
        $pdf->Cell(40,6,'Editorial',1,0,'C',1);
        $pdf->Cell(25,6,'Idioma',1,0,'C',1);
        $pdf->Cell(40,6,'Autor',1,0,'C',1);
        $pdf->Cell(31,6,'Existencias',1,0,'C',1);
        $pdf->Cell(20,6,'Precio',1,1,'C',1);

        if($productos){
            foreach($productos as $manga)
            {
                $pdf->Cell(40,6,utf8_decode($manga['nombre_manga']),1,0,'C');  
                $pdf->Cell(40,6,utf8_decode($manga['nombre_editorial']),1,0,'C'); 
                $pdf->Cell(25,6,utf8_decode($manga['nombre_idioma']),1,0,'C');  
                $pdf->Cell(40,6,utf8_decode($manga['nombre_autor']),1,0,'C');  
                $pdf->Cell(31,6,utf8_decode($manga['existencias']),1,0,'C');  
                $pdf->Cell(20,6,utf8_decode("$".$manga['precio']),1,1,'C');  
            }
        }else{
            $pdf->Cell(196,6,'No hay productos',1,1,'C');
        }
    }
	$pdf->Output();
?>