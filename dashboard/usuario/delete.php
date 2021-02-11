<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Eliminar un usuario");
require_once("../../app/controllers/dashboard/usuarios/delete_usuario_controller.php");
Page::templateFooter();
?>