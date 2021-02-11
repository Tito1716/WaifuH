<?php
require_once("../../app/models/tipou.class.php");
try{
    $tipou = new Tipou;
    if(isset($_POST['buscar'])){
        $_POST = $tipou->validateForm($_POST);
        $data = $tipou->searchTipou($_POST['busqueda']);
        if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $tipou->getTipou_pagina();
		}
    }else{
		$data = $tipou->getTipou_pagina();
    }
    if($data){
		require_once("../../app/views/dashboard/tipou/index_tipou.php");
	}else{
		Page::showMessage(3, "No hay tipos de usuario disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>