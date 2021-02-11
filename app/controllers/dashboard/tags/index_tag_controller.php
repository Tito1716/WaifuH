<?php
require_once("../../app/models/tags.class.php");
try{
    $tag = new Tags;
    if(isset($_POST['buscar'])){
        $_POST = $tag->validateForm($_POST);
        $data = $tag->searchTag($_POST['busqueda']);
        if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $tag->getTag_pagina();
		}
    }else{
		$data = $tag->getTag_pagina();
    }
    if($data){
		require_once("../../app/views/dashboard/tags/index_tag.php");
	}else{
		Page::showMessage(3, "No hay tags disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>