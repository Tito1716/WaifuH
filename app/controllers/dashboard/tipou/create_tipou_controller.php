<?php
require_once("../../app/models/tipou.class.php");
try{
    $tipou = new Tipou;
    if(isset($_POST['crear'])){
        $_POST = $tipou->validateForm($_POST);
            if($tipou->setTipou($_POST['tipo_usuario'])){
                if($tipou->createTipou()){
                    Page::showMessage(1, "Tipo de usuario creado", "index.php");
                }

        }else{
            throw new Exception("Tipo de usuario incorrecto");
        }    
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipou/create_tipou.php");
?>