<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Editar mi perfil");
require_once("../../app/controllers/dashboard/account/profile_controller.php");
Page::templateFooter();
?>