<?php
header("Access-Control-Allow-Origin: *", false);
if(isset($_GET["accion"])){
    require_once("../../models/database.class.php");
    require_once("../../helpers/validators.class.php");
    require_once("../../../app/models/producto.class.php"); 
    $object = new Producto;

    $retornar = array();

    switch ($_GET["accion"]) {
        case "seleccionar_x_tipo":
            $object->setTipop($_POST["id_tipoproducto"]);
            $retornar["registros"] = $object->getProductos_x_Tipop();
        break;
        
        default:
            
            break;
    }

    $retornar["error_db"] = Database::getException();
    header("Content-type: application/json");
    echo json_encode($retornar);
}

?>