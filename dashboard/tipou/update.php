<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("modificar tipo de usuario");
require_once("../../app/controllers/dashboard/tipou/update_tipou_controller.php");
Page::templateFooter();
?>