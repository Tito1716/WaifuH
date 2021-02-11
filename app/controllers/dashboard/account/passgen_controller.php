<!-- Se importa la vista de la página de inicio -->
<?php
require_once("../../app/models/usuario.class.php");
try{
	$object = new Usuario;
	if(isset($_GET['id'])){
		if($object->getUsuarios()){
			if($object->setId($_GET['id'])){
				if($object->ReadPregunta()){
					if(isset($_POST['verificar-respuesta'])){
						$_POST = $object->validateForm($_POST);
						if($object->setRespuesta($_POST['respuesta'])){
							if($object->checkRespuesta()){
								Page::showMessage(1, "Respuesta correcta", "passrest.php?id=$_GET[id]");
							}else{
								throw new Exception("Respuesta incorrecta");
							}
						}else{
							throw new Exception("Respuesta incorrectas");
						}
					}
				}else{
					throw new Exception("No se cargó la pregunta correctamente");
				}
			}else{
				throw new Exception("No se cargó el correlativo correctamente");
			}
		}else{
			Page::showMessage(3, "No hay usuarios disponibles", "register.php");
		}
	}else{
		Page::showMessage(3, "No se capturó el usuario", "register.php");
	}
}catch(Exception $error){
  Page::showMessage(2, $error->getMessage(), null);
}
//Se importa el modelo de la clase usuarios
require_once("../../app/views/dashboard/account/passgen_view.php");
?>