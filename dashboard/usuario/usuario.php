<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Control de usuarios");
require_once("../../app/controllers/dashboard/usuarios/usuario_controllers.php");
Page::templateFooter();
?>