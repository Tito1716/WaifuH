<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Editar mi perfil");
require_once("../app/controllers/public/account/profile_controller.php");
Page::templateFooter();
?>