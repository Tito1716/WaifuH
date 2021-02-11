<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("carrito");
require_once("../app/controllers/public/carrito/carrito_controllers.php");
Page::templateFooter();
?>