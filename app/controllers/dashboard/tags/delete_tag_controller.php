<?php
require_once("../../app/models/tags.class.php");
try{
    if(isset($_GET['id'])){
        $tag = new Tags;
        if($tag->setId($_GET['id'])){
            if($tag->readTag()){
                if(isset($_POST['eliminar'])){
                    if($tag->deleteTag()){
                        Page::showMessage(1, "Tag eliminado", "index.php");
                }else{
                    throw new Exception(Database::getException());
                }
            }
            }else{
				throw new Exception("tag inexistente");
			}
        }else{
			throw new Exception("tag incorrecto");
		}
    }else{
		Page::showMessage(3, "Seleccione un tag", "index.php");
	}
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tags/delete_tag.php");
?>