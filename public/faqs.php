<?php
require_once("../app/views/public/templates/page.class.php");
Page::templateHeader("faqs");
require_once("../app/controllers/public/faqs/faqs_controllers.php");
Page::templateFooter();
?>