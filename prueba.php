<?php
require_once("../../app/helpers/validator.class.php");
require_once("../../app/models/database.class.php");
require_once("../../app/models/usuario.class.php");
require_once("../../app/helpers/component.class.php");

class Page extends Component{
	/* Se declara el título de cada página en una función estática 
	para que se rellene según la sección activa */
	public static function templateHeader($title){
		/* Se inicializa una sesión para utilizarla en cada sección */
		session_start();
		/* Se establece la zona horaria */
		ini_set("date.timezone","America/El_Salvador");
		/* Se imprime el contenido del modelo web */
    print(" 
      <!DOCTYPE html>
        <html>
          <head>
            <meta charset='utf-8'>
            <!--Import Google Icon Font-->
                <link type='text/css' href='../../web/css/icon.css' rel='stylesheet'>
                <!--Import materialize.css-->
                <link type='text/css' rel='stylesheet' href='../../web/css/materialize.min.css'  media='screen,projection'/>
                <script type='text/javascript' src='../../web/js/jquery-3.3.1.min.js'></script>
                <script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
                <link href='../../web/css/icon.css' rel='shortcut icon'>
                <!--Let browser know website is optimized for mobile-->
                <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
          </head>
          <body>
    ");
    if(isset($_SESSION['id_usuario'])){
				//Tiempo en segundos para dar vida a la sesión.
				$inactivo = 3600;//20min en este caso.
			
				//Calculamos tiempo de vida inactivo.
				$vida_session = time() - $_SESSION['tiempo'];
			
					//Compraración para redirigir página, si la vida de sesión sea mayor a el tiempo insertado en inactivo.
					if($vida_session > $inactivo){
						//Removemos sesión.
						session_unset();
						//Destruimos sesión.
						session_destroy();              
						//Redirigimos pagina.
						self::showMessage(3, "Su tiempo ha caducado", "../account/login.php");
			
						exit();
					} else {  // si no ha caducado la sesion, actualizamos
						$_SESSION['tiempo'] = time();
					}
      print("
      <header>
        <ul id='slide-out' class='sidenav'>
          <li><div class='user-view'>
            <div class='background'>
              <img src='../../web/img/paralax/123.jpg'>
            </div>
            <a href='perfil.php'><img class='circle' src='../../web/img/cards/rolando.jpg'></a>
            <h6><b>$_SESSION[alias]</b></h6>
            <a href='perfil.php'><span class='orange-text email'>Rolando@rolando.com</span></a>
          </div></li>
          <li><a class='dropdown-trigger' href='#' data-target='dropdown1'><i class='material-icons left'>arrow_drop_down</i><span class='orange-text'>Mantenimientos</a></li>
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href='../../dashboard/productos/index.php'>Productos</a></li>
            <li class='divider' tabindex='-1'></li>
            <li><a href='../../dashboard/usuarios/index.php'>Usuarios</a></li>
            <li class='divider' tabindex='-1'></li>
            <li><a href='mantenimientos_clientes.php'>Clientes</a></li>
            <li><a href='../../dashboard/categoria/categories.php'>Categorias</a></li>
          </ul>
          <li><a href='mantenimientos_usuarios.php'><i class='material-icons left'>apps</i><span class='black-text'>Usuarios</a></li>
          <li><a href='perfil.php'><i class='material-icons left'>account_circle</i><span class='orange-text'>Mi perfil</a></li>
          <li><a href='../reportes/index.php'><i class='material-icons left'>insert_chart</i><span class='orange-text'>Reportes</a></li>
          <li><a href='../account/logout.php'><i class='material-icons left'>group</i><span class='black-text'>Salir</a></li>
        </ul>
          <a href='#' data-target='slide-out' class='sidenav-trigger'><i class='material-icons'>menu</i></a>
          
          </div>
        </header>
      ");
		}else{
      print("
        <header>
          <div class='navbar-fixed'>
            <nav>
              <div class='nav-wrapper white'>
                <a href='index.php' class='brand-logo center'>
              <img  src='../../web/img/logo.png' height='60'></a>
                <ul class='right hide-on-med-and-down'>
            <li><a href='../public/index.php'><i class='material-icons active left'>check_circle</i><span class='white-text'>Sitio publico</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </header>
        <main class='container'>
			");
			$filename = basename($_SERVER['PHP_SELF']);
			if($filename != "login.php" && $filename != "register.php"){
				self::showMessage(3, "¡Debe iniciar sesión!", "../account/login.php");
				self::templateFooter();
				exit;
			}else{
				print("<h3 class='center-align'>$title</h3>");
			}
		}
}
public static function templateFooter(){
print("
</main>
<script type='text/javascript' src='../../web/js/materialize.min.js'></script>
<script type='text/javascript' src='../../web/js/main.js'></script>  
</body>  
<footer>
<div class='parallax-container'>
<div class='parallax'><img src='../../web/img/slider/11.jpg'></div>
</footer>
</html>
");
  }
}
?>