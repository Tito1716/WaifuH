<?php
require_once("../../app/models/tags.class.php");
try{
    if(isset($_GET['id'])){
        $tag = new Tags;
        if($tag->setId($_GET['id'])){
            if($tag->readTag()){
                if(isset($_POST['actualizar'])){
                    $_POST = $tag->validateForm($_POST);
                    if($tag->setTag($_POST['tag'])){
                        if($tag->updateTag()){
                            Page::showMessage(1, "tag modificado", "index.php");
                        }else{
                            throw new Exception(Database::getException());
                        }
                    }else{
                        throw new Exception("tag incorrecto");
                    }      
                }
            }else{
                Page::showMessage(2, "tag inexistente", "index.php");
            }
        }else{
            Page::showMessage(2, "tag incorrecta", "index.php");
        }      
    }else{
        Page::showMessage(3, "Seleccione un tag", "index.php");
    }
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "index.php");
}
require_once("../../app/views/dashboard/tags/update_tag.php");
?>