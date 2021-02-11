<?php
require_once("../../app/models/tipop.class.php");
try{
    if(isset($_GET['id'])){
        $tipop = new Tipop;
        if($tipop->setId($_GET['id'])){
            if($tipop->readTipop()){
                if(isset($_POST['eliminar'])){
                    if($tipop->deleteTipop()){
                        Page::showMessage(1, "Tipo de producto eliminado", "index.php");
                }else{
                    throw new Exception(Database::getException());
                }
            }
            }else{
				throw new Exception("tipo producto inexistente");
			}
        }else{
			throw new Exception("tipo de producto incorrecto");
		}
    }else{
		Page::showMessage(3, "Seleccione un tipo de producto", "index.php");
	}
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipop/delete_tipop.php");
?>