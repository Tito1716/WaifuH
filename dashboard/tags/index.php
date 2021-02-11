<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("tags");
require_once("../../app/controllers/dashboard/tags/index_tag_controller.php");
Page::templateFooter();
?>