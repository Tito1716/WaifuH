<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("eliminar");
require_once("../../app/controllers/dashboard/productos/delete_producto_controller.php");
Page::templateFooter();
?>