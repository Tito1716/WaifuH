<?php
require_once("../app/models/producto.class.php");
try{
	$Producto = new Producto;
	$Producto = $Producto->getProductos();
	if($Producto){
		require_once("../app/views/public/store/producto.php");
	}else{
		Page::showMessage(3, "No hay categorías disponibles", null);
	}

}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), null);
}
?>