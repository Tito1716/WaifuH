<?php
header("Access-Control-Allow-Origin: *", false);
if(isset($_GET["accion"])){
    require_once("../../models/database.class.php");
    require_once("../../helpers/validators.class.php");
    require_once("../../../app/models/comentarios.class.php");
    date_default_timezone_set("America/El_Salvador"); 
    
    $object = new Comentarios;

    $retornar = array();

    switch ($_GET["accion"]) {
        case "seleccionar_x_producto":
            $object->setIdProducto($_POST["id_producto"]);
            $retornar["registros"] = $object->getOpinionesValoraciones();
        break;

        case "insertar":
            $object->setIdProducto($_POST["id_producto"]);
            $object->setIdUsuario($_POST["id_usuario"]);
            $object->setOpinion($_POST["opinion"]);
            $object->setValoracion($_POST["valoracion"]);
            $object->setFecha(date("Y-m-d"));
            $object->setHora(date("h:i a"));
            $retornar["resultado"] = $object->createOpinion();
        break;

        case "editar":
            $object->setId($_POST["id_opinion"]);
            $object->setOpinion($_POST["opinion"]);
            $object->setValoracion($_POST["valoracion"]);
            $retornar["resultado"] = $object->updateOpinion();
        break;

        case "eliminar":
            $retornar["post"] = $_POST;
            $object->setId($_POST["id_opinion"]);
            $retornar["resultado"] = $object->deleteOpinion();
        break;
        
        default:
            
            break;
    }

    $retornar["error_db"] = Database::getException();
    header("Content-type: application/json");
    echo json_encode($retornar);
}

?>