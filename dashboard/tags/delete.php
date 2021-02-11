<?php
require_once("../../app/views/dashboard/templates/page.class.php");
Page::templateHeader("delete tag");
require_once("../../app/controllers/dashboard/tags/delete_tag_controller.php");
Page::templateFooter();
?>