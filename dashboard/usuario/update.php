<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Modificar un usuario");
require_once("../../app/controllers/dashboard/usuarios/update_usuario_controller.php");
Page::templateFooter();
?>