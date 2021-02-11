<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("eliminar tipo de producto");
require_once("../../app/controllers/dashboard/tipop/delete_tipop_controller.php");
Page::templateFooter();
?>