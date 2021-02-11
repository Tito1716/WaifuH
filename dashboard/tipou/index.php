<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("tipo de usuario");
require_once("../../app/controllers/dashboard/tipou/index_tipou_controller.php");
Page::templateFooter();
?>