<!-- Importar archivos maestros con php -->
<?php
/* Se importa el modelo de la página*/
require_once("../../app/views/dashboard/templates/page.class.php");
/* Se establece el nombre de la página web */
Page::templateHeader("Recuperar contraseña");
/* Se importa el contenido de la página de inicio */
require_once("../../app/controllers/dashboard/account/recovery_controller.php");
/* Se importa el footer establecido */
Page::templateFooter();
?>
