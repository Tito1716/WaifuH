<?php
require_once("../models/database.class.php");// se manda a llamar la clase donde se encuentra la conexion a la base de datos
require_once("pdf.class.php");//se manda a llamar la clase de fpdf
session_start();//se detecta la sesion del usuario 
if(!$_SESSION['id_usuario']){
    header('location: ../../web/400.html');
}
    setlocale(LC_ALL, 'es_SV');
    $query = "SELECT fecha, id_producto, id_usuario FROM ventas";//se crea la consulta para la generacion del reporte
    $params = array(null);//linea necesaria
    $resultado = Database::getRows($query, $params);//linea necesaria
	
	$pdf = new pdf('P', 'mm', 'letter');// se declara que la pafina sera tamaño carta, se medira el mm y tendra orientacion vertical
    $pdf->AliasNbPages();//linea necesaria para la numeracion de paginas
    $pdf->SetMargins(10, 10, 10); //Margenes Izquierda, derecha, arriba
    $pdf->AddPage();//linea para agregar paginas

     
    $pdf->SetFillColor(232,232,232);//se define el color de la pagina
    $pdf->SetFont('Arial','B',12);//se define el tipo de letra del encabezado
    $pdf->Cell(30);//celda
    $pdf->Cell(130,10,'Reporte de ventas',1,0,'C');//titulo del reporte
    $pdf->ln(10);//salto de linea
    $pdf->cell(115,10,'generado por:'.$_SESSION['nombre_usuario'],0,1,'R');// se manda  allamr al usuario que este dentro
    $pdf->Cell(30);//celda
    $pdf->Cell(65,6,date('d/m/Y'),1,0,'C',2);//se define la fecha en que se genero el reporte
    ini_set("date.timezone","America/El_Salvador");//se define la zona horaria en este caso el salvador
    $pdf->cell(65,6,date("h:i:s"),1,1,'C',2);//se define la hora en la cual se genro el reporte
    $pdf->ln(15);//salto de linea
    //se definen el encabezado de la tabla en la que se muestran los datos
	$pdf->Cell(60,6,'Fecha de venta',1,0,'C',2);
    $pdf->Cell(60,6,'Producto vendidos',1,0,'C',2);
    $pdf->Cell(60,6,'vendedor',1,1,'C',2);
    

    $pdf->SetAutoPageBreak(true,25);//linea necesaria para la separacion entre el encabezado y el cuerpo del reporte

	$pdf->SetFont('Arial','',10);//se define la fuente del cuerpo del reporte
	
	foreach($resultado as $row)//se define el foreach en donde se llaman los campos de la base de datos
	{
          //se llaman los datos de la base de datos y se ponene en las celdas del cuerpo del reporte
        $pdf->Cell(60,6,utf8_decode($row['fecha']),1,0,'C');
		$pdf->Cell(60,6,utf8_decode($row['id_producto']),1,0,'C');
        $pdf->Cell(60,6,utf8_decode($row['id_usuario']),1,1,'C');
	}
	$pdf->Output();//salida del reporte
?>