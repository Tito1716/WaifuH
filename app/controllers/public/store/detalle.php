<?php
require_once("../app/models/producto.class.php");
try{
    if(isset($_GET['id'])){
        $Producto = new Producto;
        if($Producto->setId($_GET['id'])){
            if($Producto->readProducto()){
                require_once("../app/views/public/store/detalle.php");
            }else{
				throw new Exception("Producto inexistente");
			}
        }else{
			throw new Exception("Producto incorrecto");
		}
    }else{
		throw new Exception("Seleccione producto");
	}
}catch(Exception $error){
        Page::showMessage(3, $error->getMessage(), "index.php");
}
?>