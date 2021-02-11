<div class="contenedor">
                <!-- la calse contenedor es propia ye sta en el archivo css que se referencio anterioirmente-->
                <img height="170px" src="../../web/img/logo final.png" width="400px">
                    <!-- se pone el logo-->
                </img>
            </div>
<form method='post' autocomplete='off'>
    <div class='container'>
        <!--aqui comineza la creacion del formulario de inicio de sesion-->
        <div class='cuadro'>
            <!-- cuadro una clase propia-->
            <div class='row'>
                <div class='col6 m6'>
                    <div class='card pink darken-2'>
                        <!--se le pone el color al card que contendra el formulario-->
                        <div class='card-content white-text'>
                            <span class='card-title white-text'>
                                Iniciar sesion
                            </span>
                            <div class='row'>
                                <form class='col s12'>
                                    <!-- se comienza a estructurar el formulario-->
                                    <div class='row'>
                                        <div class='input-field'>
                                            <i class='material-icons prefix'>
                                                account_circle
                                            </i>
                                            <input id='nombre_usuario' type='text' name='nombre_usuario' class='validate' value='<?php print($object->getNombreuser()) ?>' required/>
                                            <label for='nombre_usuario'>Usuario</label>
                                            </input>
                                        </div>
                                        <div class='input-field'>
                                            <i class='material-icons prefix'>
                                                lock
                                            </i>
                                            <input id='clave' type='password' name='clave' class='validate' value='<?php print($object->getClave()) ?>' required/>
                                            <label for='clave'>Contraseña</label>
                                            </input>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class='card-action'>
                            <!-- se crea un boton con ventana modal para la bienvenida-->
                            <button type='submit' name='iniciar' class='btn waves-effect waves-light'>Ingresar</button>
                            <a class='waves-effect waves-light btn' href='recovery.php'>
                                olvide mi contraseña
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>