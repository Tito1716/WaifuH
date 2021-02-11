<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Productos");
require_once("../../app/controllers/dashboard/Productos/create_producto_controllers.php");
Page::templateFooter();
?>