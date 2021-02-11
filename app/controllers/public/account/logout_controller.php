<?php
require_once("../app/models/cliente.class.php");
$object = new Cliente;
if($object->logOut()){
    Page::showMessage(1, "Autenticación eliminada", "indexp.php");
}else{
    Page::showMessage(2, "Ocurrió un problema", "indexp.php");
}
?>