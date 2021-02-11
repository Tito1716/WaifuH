<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Registrar primer usuario");
require_once("../app/controllers/public/account/register_controller.php");
Page::templateFooter();
?>