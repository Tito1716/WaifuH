<?php
require_once("../../app/models/producto.class.php");
try{
    if(isset($_GET['id'])){ 
        $producto = new Producto;
        if($producto->setId($_GET['id'])){
            if($producto->readProducto()){
                if(isset($_POST['actualizar'])){
                    $_POST = $producto->validateForm($_POST);
                    if($producto->setNombre($_POST['nombre'])){
                        if($producto->setPrecio($_POST['precio'])){
                            if($producto->setDescripcion($_POST['descripcion'])){
                                if($producto->setTipop($_POST['tipo'])){
                                    if($producto->setTag($_POST['Tag'])){
                                        if(is_uploaded_file($_FILES['archivo1']['tmp_name'])){
                                            if($producto->setFoto1($_FILES['archivo1'])){
                                                if($producto->setFoto2($_FILES['archivo2'])){
                                                    if($producto->setFoto3($_FILES['archivo3'])){
                                                        if($producto->setFoto4($_FILES['archivo4'])){
                                                            if($producto->updateProducto()){
                                                                Page::showMessage(1, "Producto modificado", "index.php");
                                                            }else{
                                                                throw new Exception(Database::getException());
                                                            }
                                                        }else{
                                                            throw new Exception($producto->getImageError());
                                                        }
                                                    }else{
                                                        throw new Exception($producto->getImageError());
                                                    }
                                                }else{
                                                    throw new Exception($producto->getImageError());
                                                }
                                            }else{
                                                throw new Exception($producto->getImageError());
                                            }
                                        }else{
                                            throw new Exception("Seleccione una imagen");
                                        }
                                    }else{
                                        throw new Exception("Seleccione un tag");
                                    }
                                }else{
                                    throw new Exception("Seleccione un tipo de producto");
                                }
                            }else{
                                throw new Exception("Descripción incorrecta");
                            }
                        }else{
                            throw new Exception("Precio incorrecto");
                        }
                    }else{
                        throw new Exception("Nombre incorrecto");
                    }
                }
            }else{
                Page::showMessage(2, "Producto inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "Producto incorrecto", "index.php");
        }
    }else{
        Page::showMessage(3, "Seleccione producto", "index.php");
    }

}catch (Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/productos/update_producto.php");
?>