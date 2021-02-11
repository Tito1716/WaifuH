<?php
require_once("../app/helpers/validators.class.php");
require_once("../app/helpers/component.class.php");
require_once("../app/models/database.class.php");
require_once("../app/models/cliente.class.php");
class Page extends Component{
	public static function templateHeader($title){
        session_start();
		ini_set("date.timezone","America/El_Salvador");
        print("
        <!DOCTYPE html>
        <html class='teal accent-2'>
            <head>
                <meta charset='utf-8'>
                    <title>
                        Waifu House
                    </title>
                    <!--Import Google Icon Font-->
                    <link href='../web/css/fuente.css' rel='stylesheet'>
                        <!--Import materialize.css-->
                        <link href='../web/css/materialize.min.css' media='screen,projection' rel='stylesheet' type='text/css'/>
                        <link href='../web/css/Waifu_house.css' rel='stylesheet'>
                            <link href='../web/css/style.css' rel='stylesheet'>
                                <!--Let browser know website is optimized for mobile-->
                                <meta content='width=device-width, initial-scale=1.0' name='viewport'/>
                            </link>
                        </link>
                    </link>
                    <script type='text/javascript' src='../web/js/sweetalert.min.js'></script>
                </meta>
            </head>
            <body>
        ");
        if(isset($_SESSION['id_usuario'])){
            if($_SESSION['ultima_actividad'] < time()-$_SESSION['tiempo_expirar']){
                session_destroy();
                self::showMessage(3, "Su tiempo ha caducado", "login.php");
            }else{
                $_SESSION['ultima_actividad'] = time();
            }
            print("
            <header>
                <nav>
                    <!--se comienza a crear la barra de menu-->
                    <div class='nav-wrapper pink accent-4'>
                        <a class='brand-logo' href='../public/indexp.php'>
                            <img height='65' src='../web/img/logo.png' width='160'/>
                        </a>
                        <!-- se le agrega una imagen como logo y se le ponen las dimensiones-->
                        <ul class='right hide-on-med-and-down'>
                            <!-- se crean las secciones de la pagina-->
                            <li>
                                <a href='../public/indexp.php'>
                                    <i class='material-icons left'>
                                        home
                                    </i>
                                    Inicio
                                </a>
                            </li>
                            <li>
                                <a href='../public/store.php'>
                                    <i class='material-icons left'>
                                        store
                                    </i>
                                    tienda
                                </a>
                            </li>
                            <li>
                                <a href='../public/carrito.php'>
                                    <i class='material-icons left'>
                                        shopping_cart
                                    </i>
                                    Carrito
                                </a>
                            </li>  <li>
                            <a class='dropdown-button' data-activates='ddusuario'>$_SESSION[nombre_usuario]
                                <i class='material-icons iconlist left'>account_circle</i>
                                <i class='material-icons right'>arrow_drop_down</i>
                            </a>
                            </li>

                            </ul>
                            <ul id='ddusuario' class='dropdown-content'>
                                <li><a href='../public/profile.php'><i class='material-icons icons'>edit</i>Cuenta</a></li>
                                <li><a href='../public/password.php'><i class='material-icons icons'>lock</i>Cambiar clave</a></li>
                                <li><a href='../public/logout.php'><i class='material-icons icons'>cancel</i>Salir</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <main>
            ");
        }else{
        print("
        <header>
            <nav>
                <!--se comienza a crear la barra de menu-->
                <div class='nav-wrapper pink accent-4'>
                    <a class='brand-logo' href='../public/indexp.php'>
                        <img height='65' src='../web/img/logo.png' width='160'/>
                    </a>
                    <!-- se le agrega una imagen como logo y se le ponen las dimensiones-->
                    <ul class='right hide-on-med-and-down'>
                        <!-- se crean las secciones de la pagina-->
                        <li>
                            <a href='../public/indexp.php'>
                                <i class='material-icons left'>
                                    home
                                </i>
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href='../public/store.php'>
                                <i class='material-icons left'>
                                    store
                                </i>
                                tienda
                            </a>
                        </li>
                        <li>
                            <a href='../public/carrito.php'>
                                <i class='material-icons left'>
                                    shopping_cart
                                </i>
                                Carrito
                            </a>
                        </li>  <li>
                        <a href='../public/login.php'>
                            <i class='material-icons left'>
                            account_box
                            </i>
                            Ingresar
                        </a>
                        </li>

                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
            <main>
        ");
        }
	}

	public static function templateFooter(){
		print("
				</main>
			<footer class='page-footer pink accent-2'>
    <div class='row section'>
        <div class='container '>
            <h3 class='header light center-align'>
                Siguenos en nuestras redes sociales
            </h3>
            <div class='footmedia'>
                <div class='col s12 m3 l3'>
                    <img class='FooterIcon' src='../web/img/Facebook.png'>
                    </img>
                </div>
                <div class='col s12 m3 l3'>
                    <img class='FooterIcon' src='../web/img/Twitter.png'>
                    </img>
                </div>
                <div class='col s12 m3 l3'>
                    <img class='FooterIcon' src='../web/img/instagram.png'>
                    </img>
                </div>
                <div class='col s12 m3 l3'>
                    <img class='FooterIcon' src='../web/img/GooglePlus.png'>
                    </img>
                </div>
            </div>
        </div>
    </div>
    <div class='footer-copyright #c51162 pink accent-4'>
        <div class='container'>
            Copyright© 2018 Waifu House Aviso legal, politica de privacidad y de afiliación.
            <div class='col s12'>
                <a href='../public/faqs.php'>
                    <h5 class='right white-text'>
                        Preguntas Frecuentes
                    </h5>
                </a>
            </div>
            <p>
                Web diseñada por
            </p>
            <p class='right creators'>
                Andrés Aguilar: andres_ashiok@yahoo.com
                <br>
                    Rodrigo Guevara: vegarodri@gmail.com
                </br>
            </p>
        </div>
    </div>
</footer>
<!--Import jQuery before materialize.js-->
<script src='../web/js/jquery.js' type='text/javascript'>
</script>
<script src='../web/js/main.js' type='text/javascript'>
</script>
<script src='../web/js/materialize.min.js' type='text/javascript'>
</script>
<script src='../web/js/init.js' type='text/javascript'>
</script>
<script type='text/javascript'>
    $(document).ready(function(){
  // the 'href' attribute of the modal trigger must specify the modal ID that wants to be triggered
  $('.modal').modal();
});
</script>
</body>
</html>
	");
	}
}
?>
			