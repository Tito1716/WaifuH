<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("modificar tipo de producto");
require_once("../../app/controllers/dashboard/tipop/update_tipop_controller.php");
Page::templateFooter();
?>