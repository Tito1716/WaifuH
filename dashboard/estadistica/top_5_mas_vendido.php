<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Estadistica");
require_once("../../app/controllers/dashboard/estadistica/top_5_mas_vendido.php");
Page::templateFooter();
?>
