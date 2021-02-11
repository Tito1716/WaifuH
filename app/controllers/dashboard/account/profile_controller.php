<?php
require_once("../../app/models/usuario.class.php");
try{
    $usuario = new Usuario;
    if($usuario->setId($_SESSION['id_usuario'])){
        if($usuario->readUsuarioV2()){
            if(isset($_POST['editar'])){
                $_POST = $usuario->validateForm($_POST);
                if($usuario->setNombreuser($_POST['nombreuser'])){
                    if($usuario->setNombres($_POST['nombre'])){
                        if($usuario->setDireccion($_POST['direccion'])){
                            if($usuario->setCorreo($_POST['correo'])){
                                if(is_uploaded_file($_FILES['foto']['tmp_name'])){
                                    throw new Exception($usuario->getImageError());
                                }else{                                               
                                         if($usuario->updateUsuario()){
                                            $_SESSION['nombre_usuario'] = $usuario->getNombreuser();
                                             Page::showMessage(1, "usuario modificado", "index.php");
                                         }else{
                                             if($usuario->unsetFoto()){
                                                 throw new Exception(Database::getException());
                                             }else{
                                                 throw new Exception("Elimine la imagen manualmente");
                                             }
                                            }
                                        }
                                         
                            }else{
                                throw new Exception("Correo incorrecto");
                            }
                        }else{
                            throw new Exception("Direccion incorrecta");
                        }
                    }else{
                        throw new Exception("nombre incorrecto");
                    }
                }else{
                    throw new Exception("Nombre de usuario incorrecto");
                }
            }
        }else{
            Page::showMessage(2, "Usuario inexistente", "index.php");
        }
    }else{
        Page::showMessage(2, "Usuario incorrecto", "index.php");
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/account/profile_view.php");
?>