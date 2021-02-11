<?php
require_once("../../app/models/tags.class.php");
try{
    $tag = new Tags;
    if(isset($_POST['crear'])){
        $_POST = $tag->validateForm($_POST);
            if($tag->setTag($_POST['tag'])){
                if($tag->createTag()){
                    Page::showMessage(1, "Tag creado", "index.php");
                }

        }else{
            throw new Exception("Tag incorrecto");
        }    
    }
}catch(Exception $error){
    Page::showMessage(2, $error->getMessage(), null);
}
require_once("../../app/views/dashboard/tags/create_tag.php");
?>