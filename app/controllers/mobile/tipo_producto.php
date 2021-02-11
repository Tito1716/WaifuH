<?php
header("Access-Control-Allow-Origin: *", false);
if(isset($_GET["accion"])){
    require_once("../../models/database.class.php");
    require_once("../../helpers/validators.class.php");
    require_once("../../../app/models/tipop.class.php"); 
    $object = new Tipop;

    $retornar = array();

    switch ($_GET["accion"]) {
        case "seleccionar":
            $retornar["registros"] = $object->getTipop_pagina();
        break;
        
        default:
            
            break;
    }

    $retornar["error_db"] = Database::getException();
    header("Content-type: application/json");
    echo json_encode($retornar);
}

?>