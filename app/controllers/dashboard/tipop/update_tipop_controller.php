<?php
require_once("../../app/models/tipop.class.php");
try{
    if(isset($_GET['id'])){
        $tipop = new Tipop;
        if($tipop->setId($_GET['id'])){
            if($tipop->readTipop()){
                if(isset($_POST['actualizar'])){
                    $_POST = $tipop->validateForm($_POST);
                    if($tipop->setTipop($_POST['tipop'])){
                        if($tipop->updateTipop()){
                            Page::showMessage(1, "tipo de producto modificado", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }else{
                        throw new Exception("tipo de producto incorrecto");
                    }      
                }
            }else{
                Page::showMessage(2, "tipo de producto inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "tipo de producto incorrecta", "index.php");
        }      
    }else{
        Page::showMessage(3, "Seleccione un tipo de producto", "index.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/tipop/update_tipop.php");
?>