<!-- Se importa la vista de la página de inicio -->
<?php
require_once("../../app/models/usuario.class.php");
try{
  $object = new Usuario;
  if($object->getUsuarios()){
		if(isset($_POST['verificar-usuario'])){
			$_POST = $object->validateForm($_POST);
			if($object->setNombreuser($_POST['nombre_usuario'])){
				if($object->checknombre_usuario()){
					$_COOKIE['id_usuario'] = $object->getId();
					Page::showMessage(1, "Usuario verificado", "passgen.php?id=$_COOKIE[id_usuario]");
				}else{
					throw new Exception("Alias inexistente");
				}
			}else{
				throw new Exception("Alias incorrecto");
			}
		}
	}else{
			Page::showMessage(3, "No hay usuarios disponibles", "register.php");
	}
}catch(Exception $error){
  Page::showMessage(2, $error->getMessage(), null);
}
//Se importa el modelo de la clase usuarios
require_once("../../app/views/dashboard/account/recovery_view.php");
?>
