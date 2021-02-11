<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Agregar un producto");
require_once("../../app/controllers/dashboard/productos/create_producto_controller.php");
Page::templateFooter();
?>