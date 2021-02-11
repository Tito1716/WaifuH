<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("eliminar tipo de usuario");
require_once("../../app/controllers/dashboard/tipou/delete_tipou_controller.php");
Page::templateFooter();
?>