<!-- Se importa la vista de la página de inicio -->
<?php
//Se Llama el modelo de clase usuario
require_once("../../app/models/usuario.class.php");
try{
	if(isset($_GET['id'])){
  if(isset($_POST['cambiar'])){
    $usuario = new Usuario;
  	$_POST = $usuario->validateForm($_POST);
  	if($usuario->setId($_GET['id'])){
      if($_POST['clave_nueva_1'] == $_POST['clave_nueva_2']){
      	if($usuario->setClave($_POST['clave_nueva_1'])){
          if($usuario->resetPassword()){
            Page::showMessage(1, "Clave cambiada", "../account/login.php");
          }else{
            throw new Exception(Database::getException());
          }
        }else{
          throw new Exception("Clave actual menor a 6 caracteres");
        }
      }else{
        throw new Exception("Claves nuevas diferentes");
      }
    }else{
      Page::showMessage(2, "Usuario incorrecto", "../account/login.php");
    }
  }
  }else{
    Page::showMessage(3, "No se capturó el usuario", "../account/login.php");
  }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/passrest_view.php");
?>
