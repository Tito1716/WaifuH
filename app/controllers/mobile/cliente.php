<?php
header("Access-Control-Allow-Origin: *", false);
if(isset($_GET["accion"])){
    require_once("../../models/database.class.php");
    require_once("../../helpers/validators.class.php");
    require_once("../../../app/models/cliente.class.php"); 
    $object = new Cliente;

    $retornar = array();

    switch ($_GET["accion"]) {
        case "iniciar_sesion":
            $retornar["post"] = $_POST;
            $object->setNombreuser($_POST['nombre_usuario']);    
            $object->setClave($_POST['clave']);
            $retornar["resultado"] = $object->verificacion();
            if($retornar["resultado"]){
                session_start();
                $_SESSION["info_cliente"]["id_usuario"] = $object->getId();
                $_SESSION["info_cliente"]["nombre_usuario"] = $object->getNombreuser();
                $_SESSION["info_cliente"]["nombre"] = $object->getNombres();
                $_SESSION["info_cliente"]["direccion"] = $object->getDireccion();
                $_SESSION["info_cliente"]["email"] = $object->getCorreo();
                $_SESSION["info_cliente"]["fecha_nacimiento"] = $object->getFecha();
                $_SESSION["info_cliente"]["foto"] = $object->getFoto();
            }
        break;

        case "cliente":
            session_start();
            $retornar["info_cliente"] = $_SESSION["info_cliente"];
        break;

        case "cerrar_sesion":
            session_start();
            $retornar["resultado"] = session_destroy();
        break;
        
        default:
            
            break;
    }

    $retornar["error_db"] = Database::getException();
    header("Content-type: application/json");
    echo json_encode($retornar);
}

?>