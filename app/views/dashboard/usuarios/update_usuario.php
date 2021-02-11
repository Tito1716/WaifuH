<div class="container white">
                <h1 class="center-align">
                   Modificar Usuario
                </h1> 
<form method='post' enctype='multipart/form-data' autocomplete='off'> 
    <div class='row'>
        <div class='input-field col s12 m6'>
          	<i class='material-icons prefix'>person</i>
          	<input id='nombreuser' type='text' name='nombreuser' class='validate' value='<?php print($usuario-> getNombreuser()) ?>' required/>
          	<label for='nombreuser'>Nombre de usuario</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>face</i>
            <input id='nombre' type='text' name='nombre' class='validate' value='<?php print($usuario->getNombres()) ?>' required/>
            <label for='nombre'>Nombre</label>
        </div>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>lock</i>
            <input id='clave' type='password' name='clave' class='validate' value='<?php print($usuario->getClave()) ?>' required/>
            <label for='clave'>Clave</label>
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
            <input id='fecha' type='text' name='fecha' class='validate' value='<?php print($usuario->getFecha()) ?>' required/>
            <label for='fecha'>Fecha de nacimiento</label>
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
        <div class='input-field col s12 m6'>
        <?php
            Page::showSelect("seleccione tipo de usuartipoio", "tipo", $usuario->getId_tipouser(), $usuario->getId_tipousers());
        ?>
    </div>
    </div>
    <div class='row center-align'>
    <button type='submit' name='actualizar' class='btn waves-effect blue tooltipped' data-tooltip='Actualizar'><i class='material-icons'>save</i></button>
    </div>
</form>  
</div>