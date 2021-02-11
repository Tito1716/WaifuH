<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Permisos");
require_once("../../app/controllers/dashboard/Permisos/permisos_controllers.php");
Page::templateFooter();
?>