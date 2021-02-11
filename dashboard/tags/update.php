<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("modificar tag");
require_once("../../app/controllers/dashboard/tags/update_tag_controller.php");
Page::templateFooter();
?>