<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Crear tag");
require_once("../../app/controllers/dashboard/tags/create_tag_controller.php");
Page::templateFooter();
?>