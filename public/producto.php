<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("PRODUCTOS");
require_once("../app/controllers/public/store/detalle.php");
Page::templateFooter();
?>