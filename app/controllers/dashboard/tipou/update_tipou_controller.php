<?php
require_once("../../app/models/tipou.class.php");
try{
    if(isset($_GET['id'])){
        $tipou = new Tipou;
        if($tipou->setId($_GET['id'])){
            if($tipou->readTipou()){
                if(isset($_POST['actualizar'])){
                    $_POST = $tipou->validateForm($_POST);
                    if($tipou->setTipou($_POST['tipou'])){
                        if($tipou->updateTipou()){
                            Page::showMessage(1, "tipo de usuario modificado", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }else{
                        throw new Exception("tipo de usuario incorrecto");
                    }      
                }
            }else{
                Page::showMessage(2, "tipo de usuario inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "tipo de usuario incorrecta", "index.php");
        }      
    }else{
        Page::showMessage(3, "Seleccione un tipo de usuario", "index.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/tipou/update_tipou.php");
?>