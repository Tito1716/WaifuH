<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("tipo de producto");
require_once("../../app/controllers/dashboard/tipop/index_tipop_controller.php");
Page::templateFooter();
?>