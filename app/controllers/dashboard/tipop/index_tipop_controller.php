<?php
require_once("../../app/models/tipop.class.php");
try{
    $tipop = new Tipop;
    if(isset($_POST['buscar'])){
        $_POST = $tipop->validateForm($_POST);
        $data = $tipop->searchTipop($_POST['busqueda']);
        if($data){
			$rows = count($data);
			Page::showMessage(4, "Se encontraron $rows resuldatos", null);
		}else{
			Page::showMessage(4, "No se encontraron resultados", null);
			$data = $tipop->getTipop_pagina();
		}
    }else{
		$data = $tipop->getTipop_pagina();
    }
    if($data){
		require_once("../../app/views/dashboard/tipop/index_tipop.php");
	}else{
		Page::showMessage(3, "No hay tipos de producto disponibles", "create.php");
	}
}catch(Exception $error){
	Page::showMessage(2, $error->getMessage(), "../account/");
}
?>