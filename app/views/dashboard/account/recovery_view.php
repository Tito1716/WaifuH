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
                        <img src="../../web/img/admins.jpg" height="100" class="profile-image-login">
                        <!-- Texto abajo de la imagen -->
                        <p class="center-align">Recuperar contraseña.</p>
                        <!-- Barra separadora -->
                        <div class="divider"></div>
                    </div>
                    <!-- Campo de texto para ingresar los datos -->

                    <div id="validar-usuario" class="col s12">
                        <div class='input-field col s12'>
                        <!-- Icono al lado del campo de texto -->
                            <i class="material-icons prefix iconlist">account_circle</i>
                            <!--  -->
                            <input id='nombre_usuario' type='text' name='nombre_usuario' class='validate' value='<?php print($object->getNombreuser())?>' required />
                            <label for='nombre_usuario'>Ingrese su usuario</label>
                        </div>
                        <div class="input-field col offset-s2 s8 center">
                            <!-- Boton con diseño -->
                            <button type='submit' name='verificar-usuario' class="btn-large waves-effect waves-light">Comprobar usuario
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
