<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear tipo de usuario");
require_once("../../app/controllers/dashboard/tipou/create_tipou_controller.php");
Page::templateFooter();
?>