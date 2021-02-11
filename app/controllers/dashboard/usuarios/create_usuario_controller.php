<?php
require_once("../../app/models/usuario.class.php");
try{
    $usuario = new Usuario;
        if(isset($_POST['crear'])){
            $_POST = $usuario->validateForm($_POST);
            if($usuario->setNombreuser($_POST['nombreuser'])){
                if($usuario->setNombres($_POST['nombre'])){
                    if($_POST['clave1'] == $_POST['clave2']){
                        if($usuario->setClave($_POST['clave1'])){
                            if($_POST['clave1'] != $_POST['nombreuser']){
                             if($usuario->setDireccion($_POST['direccion'])){
                                if($usuario->setCorreo($_POST['correo'])){
                                    if($usuario->setFecha($_POST['fecha'])){
                                        if(is_uploaded_file($_FILES['foto']['tmp_name'])){
                                            if($usuario->setFoto($_FILES['foto'])){
                                                if($usuario->setId_tipouser(2)){ 
                                                    if($usuario->setPregunta($_POST['pregunta'])){
                                                        if($usuario->setRespuesta($_POST['respuesta'])){
                                                    if($usuario->createUsuario()){
                                                                Page::showMessage(1, "Usuario creado", "index.php");
                                                            }else{
                                                                if($usuario->unsetFoto()){
                                                                    throw new Exception(Database::getException());
                                                                }else{
                                                                    throw new Exception("Elimine la imagen manualmente");
                                                                }
                                                            
                                                    }
                                                }else{
                                                    throw new Exception("Respuesta incorrecta");
                                                }
                                            }else{
                                                throw new Exception("Pregunta incorrecta");
                                            }
                                                }else{
                                                    throw new Exception("Seleccione un tipo de usuario");
                                                }   
                                            }else{
                                                throw new Exception($usuario->getImageError());
                                            } 
                                        }else{
                                            throw new Exception("Seleccione una imagen");
                                        }
                                    }else{
                                        throw new Exception("Fecha incorrecta");
                                    }
                                }else{
                                    throw new Exception("Correo incorrecto");
                                }
                            }else{
                                throw new Exception("Direccion incorrecta");
                            }
                        }else{
                            throw new Exception("La clave no puede ser igual al usuario");
                        }
                        }else{
                            throw new Exception("Clave menor a 6 caracteres");
                        }
                    }else{
                        throw new Exception("Claves diferentes");
                    }
                }else{
                    throw new Exception("Nombre incorrecto");
                }
            }else{
                throw new Exception("Nombre de usuario incorrecto");
            }
        }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/usuarios/create_usuario.php");
?>