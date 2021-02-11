<?php
require_once("../../app/models/tipou.class.php");
try{
    if(isset($_GET['id'])){
        $tipou = new Tipou;
        if($tipou->setId($_GET['id'])){
            if($tipou->readTipou()){
                if(isset($_POST['eliminar'])){
                    if($tipou->deleteTipou()){
                        Page::showMessage(1, "Tipo de usuario eliminado", "index.php");
                }else{
                    throw new Exception(Database::getException());
                }
            }
            }else{
				throw new Exception("tipo usuario inexistente");
			}
        }else{
			throw new Exception("tipo de usuario incorrecto");
		}
    }else{
		Page::showMessage(3, "Seleccione un tipo de usuario", "index.php");
	}
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipou/delete_tipou.php");
?>