<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("Bienvenido");
require_once("../app/controllers/public/indexp/indexp_controllers.php");
Page::templateFooter();
?>