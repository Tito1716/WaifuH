<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear tipo de producto");
require_once("../../app/controllers/dashboard/tipop/create_tipop_controller.php");
Page::templateFooter();
?>