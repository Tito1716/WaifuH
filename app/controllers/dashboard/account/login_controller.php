<?php
require_once("../../app/models/usuario.class.php");  
try{
	$object = new Usuario;
	if($object->getUsuarios()){
		if(isset($_POST['iniciar'])){
			$_POST = $object->validateForm($_POST);
			if($object->setNombreuser($_POST['nombre_usuario'])){
				if($object->checknombre_usuario()){
					if($object->setClave($_POST['clave'])){
						if($object->verificacion()){
							$_SESSION['id_usuario'] = $object->getId();
							$_SESSION['nombre_usuario'] = $object->getNombreuser();
							$_SESSION['email'] = $object->getCorreo();

							//variables para controlar que la se desactive
							$_SESSION['logged_in'] = true;
							$_SESSION['ultima_actividad'] = time();
							//tiempo de expirar, segundos
							$_SESSION['tiempo_expirar'] = 300;
							Page::showMessage(1, "Autenticación correcota", "index.php");
						}else{
							throw new Exception("Clave inexistente");
						}
					}else{
						throw new Exception("Clave menor a 6 caracteres");
					}
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
require_once("../../app/views/dashboard/account/login_view.php");
?>