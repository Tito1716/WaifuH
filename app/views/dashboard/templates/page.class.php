<?php
require_once("../../app/helpers/validators.class.php");
require_once("../../app/helpers/component.class.php");
require_once("../../app/models/database.class.php");
require_once("../../app/models/usuario.class.php");
class Page extends Component{
    public static function templateHeader($title){
        session_start();
		ini_set("date.timezone","America/El_Salvador");
        print("
        <!DOCTYPE html>
        <html class= 'teal accent-2'>
            <head>
                <title>Dashboard - $title</title>
                <!--Import Google Icon Font-->
                <link href= '../../web/css/fuente.css' rel='stylesheet'>
                    <!--se referencia el css para tenerlo de manera local-->
                    <!--Import materialize.css-->
                    <link href= '../../web/css/materialize.min.css' media='screen,projection' rel='stylesheet' type='text/css'/>
                    <link href ='../../web/css/estilos.css' rel='stylesheet' type='text/css'>
                    <link href ='../../web/css/jquery.dataTables.min.css' rel='stylesheet' type='text/css'>
                    <script type='text/javascript' src='../../web/js/sweetalert.min.js'></script>
                    <script type='text/javascript' src='../../web/js/jquery-3.3.1.min.js'></script>
                    <script type='text/javascript' src='../../web/js/highcharts.js'></script>
                    <script type='text/javascript' src='../../web/js/exporting.js'></script>
                    <script src='../../web/js/recaptcha.js' async defer></script>
                        <!--Let browser know website is optimized for mobile-->
                        <meta content= 'width=device-width, initial-scale=1.0' name='viewport'/>
            </head>
            <body>
            ");
            if(isset($_SESSION['id_usuario'])){
                if($_SESSION['ultima_actividad'] < time()-$_SESSION['tiempo_expirar']){
                    session_destroy();
                    self::showMessage(3, "Su tiempo ha caducado", "../account/login.php");
                }else{
                    $_SESSION['ultima_actividad'] = time();
                }
            print("
                <header>
                <ul id='dropdown1' class='dropdown-content'>
            <li><a href='../../dashboard/estadistica/top_5_mas_vendido.php'>TOP 5 MAS VENDIDOS</a></li>
            <li><a href='../../dashboard/estadistica/cantidad_por_tag.php'>PRODUCTOS POR TAG</a></li>
            <li><a href='../../dashboard/estadistica/cantidad_por_cantidad_producto.php'>PRODUCTOS POR CATEGORIA</a></li>
            <li><a href='../../dashboard/estadistica/usuarios_por_rango.php'>USUARIOS POR RANGO</a></li>
            <li><a href='../../dashboard/estadistica/venta.php'>VENTA</a></li>
          </ul>
                <ul class= 'side-nav' id='slide-out'>
                    <!-- se comienza a crear el side bar del menu-->
                    <li>
                        <div class= 'user-view'>
                            <div class= 'background'>
                                <img src= '../../web/img/Paisaje 4.jpg'>
                                    <!-- se selecciona la imagen de fondo del sidebar-->
                                </img>
                            </div>
                            <a href= '../account/profile.php'>
                                <!-- se pone la infomacion del ususaio-->
                                <img class= 'circle' src='../../web/img/Skias.png'/>
                            </a>
                            <a href= '../account/profile.php'>
                                <span class= 'white-text name'>
                                    <b>$_SESSION[nombre_usuario]</b>
                                </span>
                            </a>
                            <a>
                                <span class= 'white-text email'>
                                <b>$_SESSION[email]</b>
                                </span>
                                <!-- aqui termina la seccion de informacion del usuario-->
                            </a>
                        </div>
                        <!-- div para el contenido del sidebar-->
                    </li>
                    <li>
                        <a class= 'waves-effect' href= '../account/index.php'>
                            dashboard
                        </a>
                    </li>
                    <li>
                    <a class='dropdown-button black-text' data-activates='dropdown1' data-beloworigin='true'>Graficos<i class='material-icons right'>arrow_drop_down</i></a>
                    </li>
                    <li>
                        <div class= 'divided'>
                        </div>
                    </li>
                    <li>
                        <div class= 'divided'>
                            <!-- clase para crear una pequena linea entre las cajas de texto en el side bar-->
                        </div>
                    </li>
                    <li>
                        <a class= 'waves-effect' href= '../usuario/'>
                            control de usuarios
                        </a>
                    </li>
                    <li>
                        <div class= 'divided'>
                            <!-- clase para crear una pequena linea entre las cajas de texto en el side bar-->
                        </div>
                    </li>
                    <li>
                        <a class= 'waves-effect' href= '../productos/'>
                            control de productos
                        </a>
                    </li>
                    <li>
                        <div class= 'divided'>
                        </div>
                    </li>
                    <li>
                        <a class= 'waves-effect' href= '../tipou/'>
                            tipos de usuario
                        </a>
                    </li>
                    <li>
                        <a class= 'waves-effect' href= '../../dashboard/permisos/permisos.php'>
                            Permisos de usuario
                        </a>
                    </li>
                    <li>
                        <div class= 'divided'>
                        </div>
                    </li>
                    <li>
                    <a class= 'waves-effect' href='../tipop/'>
                        Tipo de producto
                    </a>
                </li>
                <li>
                    <div class= 'divided'>
                    </div>
                </li>
                    <li>
                        <a class= 'waves-effect' href='../tags/'>
                            Tags
                        </a>
                    </li>
                    <li>
                        <div class= 'divided'>
                        </div>
                    </li>
                    <li>
                        <div class= 'divided'>
                        </div>
                    </li>
                    <li>
                        <a class= 'waves-effect' href='../account/profile.php'>
                            editar mi perfil
                        </a>
                    </li>
                    <li>
                        <div class= 'divided'>
                            <!-- clase para crear una pequena linea entre las cajas de texto en el side bar-->
                        </div>
                    </li>
                    <li>
                        <a class= 'waves-effect' href= '../account/logout.php'>
                            salir
                        </a>
                    </li>
                </ul>
                <a class= 'button-collapse btn btn-floating pulse' data-activates= 'slide-out' href=''>
                    <!--boton que activa el sidebar modificado con la clase floating-pulse-->
                    <i class= 'material-icons'>
                        menu
                    </i>
                </a>
            </header>
            <main>
                ");
            }else{
                print("
                    <header>
                        
                    </header>

                   
                        <main>
                    
                ");
                $filename = basename($_SERVER['PHP_SELF']);
			    if($filename != "login.php" && $filename != "register.php" && $filename !="recovery.php"
				&& $filename !="passgen.php" && $filename !="passrest.php"){
                    self::showMessage(3, "¡Debe iniciar sesión!", "../account/login.php");
                    self::templateFooter();
                    exit;
                }else{
                   
                }
            }
    }

    public static function templateFooter(){
        print("
        </main>
        <footer>
          <br>
          <br>
          <br>
        </footer>
        <!--Import jQuery before materialize.js-->
        <script src='../../web/js/jquery.dataTables.min.js' type='text/javascript'>
        </script>
        <script src='../../web/js/tabla.js' type='text/javascript'>
        </script>
        <script src='../../web/js/materialize.min.js' type='text/javascript'>
        </script>
        <script src='../../web/js/privado.js' type='text/javascript'>
        </script>
    </body>
</html>
        ");
    }
}
?>