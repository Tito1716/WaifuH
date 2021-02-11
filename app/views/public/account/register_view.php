<div class="container white">
    <h1 class="center-align">
        registro de cliente
    </h1>
    <form method='post' enctype="multipart/form-data" autocomplete='off'> 
        <div class='row'>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>person</i>
                <input id='Nombreuser' type='text' name='Nombreuser' class='validate' value='<?php print($usuario-> getNombreuser()) ?>' required/>
                <label for='Nombreuser'>Nombre de usuario</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>face</i>
                <input id='nombre' type='text' name='nombre' class='validate' value='<?php print($usuario->getNombres()) ?>' required/>
                <label for='nombre'>Nombre</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>lock</i>
                <input id='clave1' type='password' name='clave1' class='validate' value='<?php print($usuario->getClave()) ?>' required/>
                <label for='clave1'>Clave</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>lock</i>
                <input id='clave2' type='password' name='clave2' class='validate' value='<?php print($usuario->getClave()) ?>' required/>
                <label for='clave2'>Confirmar clave</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>map</i>
                <input id='direccion' type='text' name='direccion' class='validate' value='<?php print($usuario->getDireccion()) ?>' required/>
                <label for='direccion'>Direccion</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>email</i>
                <input id='correo' type='email' name='correo' class='validate' value='<?php print($usuario->getCorreo()) ?>' required/>
                <label for='correo'>Correo</label>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix'>event</i>
                <input id='fecha' type='text' name='fecha' class='datepicker' value='<?php print($usuario->getFecha()) ?>' required/>
                <label for='fecha'>Fecha de nacimiento</label>
            </div>
            <div class='input-field col s12 m6'>
                        <i class='material-icons prefix iconlist'>help_outline</i>
                <?php
                Page::showSelect("Pregunta de seguridad", "pregunta", $usuario->getPregunta(), $usuario->getPreguntas());
                ?>
            </div>
            <div class='input-field col s12 m6'>
                <i class='material-icons prefix iconlist'>person_pin</i>
                <input id='respuesta' type='password' name='respuesta' class='validate' value='<?php print($usuario->getRespuesta()) ?>' required/>
                <label for='respuesta'>Respuesta</label>
            </div>
            <div class='input-field col s12 m6'>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>Seleccionar foto</span>
                        <input type="file" id='foto' name='foto'>
                    </div>
                    <div class="file-path-wrapper">
                        <input  type="text" class="file-path validate"  value='<?php print($usuario->getFoto()) ?>' required/>
                    </div>
                </div>
            </div>
            <div class='row center-align'>
                <button type='submit' name='registrar' class='btn waves-effect blue'><i class='material-icons'>send</i></button>
            </div>
        </div>
    </form>
</div>