<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Iniciar sesión");
require_once("../app/controllers/public/account/login_controller.php");
Page::templateFooter();
?>