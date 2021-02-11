<?php
require_once("../models/database.class.php");//se manda a llamar la clase donde se encuentra la conexion a la base de datos
require_once("pdf.class.php");//se manda a llamar la clase de fpdf
session_start();//se detecta la sesion del usuario 
if(!$_SESSION['id_usuario']){
    header('location: ../../web/400.html');
}
    setlocale(LC_ALL, 'es_SV');
	
	$pdf = new pdf('P', 'mm', 'letter');//se define que la pagina tendra orientacion vertical, se medira en milimetros y que sea en tamaño carta
    $pdf->AliasNbPages();//se crea la consulta para la generacion del reporte
    $pdf->SetMargins(10, 10, 10); //Margenes Izquierda, derecha, arriba
    $pdf->AddPage();//se crea la consulta para la generacion del reporte

     
    $pdf->SetFillColor(232,232,232);//se define el color de la pagina
    $pdf->SetFont('Arial','B',12);//se define el tipo de letra del encabezado

    $pdf->Cell(30);//celda

    $pdf->SetAutoPageBreak(true,25);//linea necesaria para la separacion entre el encabezado y el cuerpo del reporte

    $pdf->cell(30);//celda
    $pdf->Cell(130,10,'Reporte de productos por categoria',1,0,'C');
    $pdf->ln(10);//salto de linea
    $pdf->cell(115,10,'generado por:'.$_SESSION['nombre_usuario'],0,1,'R');// se manda  allamr al usuario que este dentro
    $pdf->Cell(30);//celda
    $pdf->Cell(65,6,date('d/m/y'),1,0,'C',2);//se define la fecha en que se genero el reporte
    ini_set("date.timezone","America/El_Salvador");//se define la zona horaria en este caso el salvador
    $pdf->cell(65,6,date("h:i:s"),1,1,'C',2);//se define la hora en la cual se genro el reporte
    $pdf->ln(5);//salto de linea

    $pdf->SetFont('Arial','',10);//se define la fuente de la separacion de las categorias
    
    $query = "SELECT id_tipoproducto, tipo_producto FROM tipo_producto";//consulta para extraer las categorias de la base
    $params = array(null);//linea necesaria
    $titulo = Database::getRows($query, $params);//linea necesaria

	foreach($titulo as $tipo)//foreach para la separacion por categorias
	{
        $pdf->ln(10);
        $pdf->Cell(196,10,utf8_decode("Categoria: ".$tipo['tipo_producto']),1,1,'C',2);//titulo de la separacion(nombre de la categoria)
        $query = "SELECT p.nombre_producto, p.precio,p.descripcion,t.tipo_producto FROM producto p, tipo_producto t WHERE p.id_tipoproducto = t.id_tipoproducto AND t.id_tipoproducto = $tipo[id_tipoproducto]";//se crea la consulta en donde se extaren los productos y se ordenan por categotia
        $params = array(null);//linea necesaria
        $productos = Database::getRows($query, $params);//linea necesaria
        //se crea el encabezado de la tabla en donde se muestran los datos
        $pdf->Cell(40,6,'Nombre del producto',1,0,'C',1);
        $pdf->Cell(130,6,'Descripcion',1,0,'C',1);
        $pdf->Cell(26,6,'Precio',1,1,'C',1);

        if($productos){//se crea la condicion para mostrar los productos
            foreach($productos as $funko)//se hace el segundo foreach para ubicar los productos por la categoria correspondiente
            {
                //se mandan a llamr los datos de la base de datos para rellenar la tabla
                $pdf->Cell(40,6,utf8_decode($funko['nombre_producto']),1,0,'C');  
                $pdf->Cell(130,6,utf8_decode($funko['descripcion']),1,0,'C'); 
                $pdf->Cell(26,6,utf8_decode($funko['precio']),1,1,'C');  
            }
        }else{
            $pdf->Cell(196,6,'No hay productos',1,1,'C');// se crea el else en el cual se activa el si una categoria no posee ningun producto
        }
	}
	$pdf->Output();//salida del reporte
?>