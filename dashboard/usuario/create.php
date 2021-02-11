<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Agregar un usuario");
require_once("../../app/controllers/dashboard/usuarios/create_usuario_controller.php");
Page::templateFooter();
?>