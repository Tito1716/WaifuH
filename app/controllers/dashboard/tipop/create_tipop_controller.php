<?php
require_once("../../app/models/tipop.class.php");
try{
    $tipop = new Tipop;
    if(isset($_POST['crear'])){
        $_POST = $tipop->validateForm($_POST);
            if($tipop->setTipop($_POST['tipo_producto'])){
                if($tipop->createTipop()){
                    Page::showMessage(1, "Tipo de producto creado", "index.php");
                }

        }else{
            throw new Exception("Tipo de producto incorrecto");
        }    
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tipop/create_tipop.php");
?>