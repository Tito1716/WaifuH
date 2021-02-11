<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("Tags");
require_once("../../app/controllers/dashboard/tags/tags_controllers.php");
Page::templateFooter();
?>