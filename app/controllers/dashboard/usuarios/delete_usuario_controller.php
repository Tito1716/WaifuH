<?php
require_once("../../app/models/usuario.class.php");
try{
	if(isset($_GET['id'])){
		$usuario = new Usuario;
		if($usuario->setId($_GET['id'])){
			if($usuario->readUsuario()){
				if(isset($_POST['eliminar'])){
					if($usuario->deleteUsuario()){
						if($usuario->unsetFoto()){
							Page::showMessage(1, "usuario eliminado", "index.php");
						}else{
							throw new Exception("No se eliminó el archivo de la imagen");
						}
					}else{
						throw new Exception(Database::getException());
					}
				}
			}else{
				throw new Exception("usuario inexistente");
			}	
		}else{
			throw new Exception("usuario incorrecto");
		}
	}else{
		Page::showMessage(3, "Seleccione usaurio", "index.php");
	}
}catch (Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/usuarios/delete_usuario.php");
?>