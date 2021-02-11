<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Estadistica");
require_once("../../app/controllers/dashboard/estadistica/usuarios_por_rango.php");
Page::templateFooter();
?>