<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Modificar un producto");
require_once("../../app/controllers/dashboard/productos/update_producto_controller.php");
Page::templateFooter();
?>