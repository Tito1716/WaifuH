<!-- Crear página para iniciar sesión -->
<div id="login-page" class="row">
    <!-- Crear formulario tipo tarjeta para formulario -->
    <div class="col s12 offset-l2 l8 z-depth-1 card-panel fondo">
        <!-- Crear formulario -->
        <form method="post" autocomplete='off'>
            <!-- Inicio de las filas -->
            <div class="row">
                <!-- Centrar formulario -->
                <div class="center">
                    <!-- Cabecera del formulario con imagen -->
                    <div class="input-field col s12">
                        <!-- Buscar imagen y darle diseño -->
                        <img src="../../web/img/logo final.png" height="100" class="profile-image-login">
                        <!-- Texto abajo de la imagen -->
                        <p class="center-align">Recuperar contraseña.</p>
                        <!-- Barra separadora -->
                        <div class="divider"></div>
                    </div>
                    <!-- Campo de texto para ingresar los datos -->
                    <div id="pregunta-seguridad" class="col s12">
                        <div class='input-field col s12 m12 l12'>
                            <i class='material-icons prefix iconlist'>person_pin</i>
                            <input disabled id='pregunta' type='text' name='pregunta' class='validate' value='<?php print($object->getPregunta()) ?>' required/>
                            <label for='pregunta'>Pregunta de seguridad</label>
                        </div>
                        <div class='input-field col s12 m12 l12'>
                            <i class='material-icons prefix iconlist'>person_pin</i>
                            <input id='respuesta' type='password' name='respuesta' class='validate' value='<?php print($object->getRespuesta()) ?>' required/>
                            <label for='respuesta'>Respuesta</label>
                        </div>
                        <div class="input-field col offset-s2 s8 center">
                            <!-- Boton con diseño -->
                            <button type='submit' name='verificar-respuesta' class="btn-large waves-effect waves-light">Generar contraseña
                                <!-- Poner icono al botón -->
                                <i class="material-icons left">verified_user</i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
