<?php
require_once("../../app/models/usuario.class.php");
try{
    if(isset($_GET['id'])){
        $usuario = new Usuario;
        if($usuario->setId($_GET['id'])){
            if($usuario->readUsuarioV2()){
                if(isset($_POST['actualizar'])){
                    $_POST = $usuario->validateForm($_POST);
                    if($usuario->setNombreuser($_POST['nombreuser'])){
                        if($usuario->setNombres($_POST['nombre'])){
                            if($usuario->setDireccion($_POST['direccion'])){
                                if($usuario->setCorreo($_POST['correo'])){
                                    if($usuario->setFecha($_POST['fecha'])){
                                        if(is_uploaded_file($_FILES['foto']['tmp_name'])){
                                            if(!$usuario->setFoto($_FILES['foto'])){
                                                throw new Exception($usuario->getImageError());
                                            }
                                        }else{
                                            if($usuario->setId_tipouser($_POST['tipo'])){                                                
                                                if($usuario->updateUsuario()){
                                                    Page::showMessage(1, "usuario modificado", "index.php");
                                                }else{
                                                    if($usuario->unsetFoto()){
                                                        throw new Exception(Database::getException());
                                                    }else{
                                                        throw new Exception("Elimine la imagen manualmente");
                                                    }
                                                }
                                            }else{
                                                throw new Exception("Seleccione un tipo de usuario");
                                            }
                                        }
                                    }else{
                                        throw new Exception("Seleccione una fecha");
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
                Page::showMessage(2, "usuario inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "usuario incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione usuario", "index.php");
    }
}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/usuarios/update_usuario.php");
?>