<div class="container white">
                <h1 class="center-align">
                   Editar mi perfil
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
        <div class='input-field col s12 m6 center align'>
        <a href="../../dashboard/account/password.php" class="waves-effect waves-light btn"><i class="material-icons left">sync</i>Cambiar contraseña</a>
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
        <!-- aqui poner fecha si no sirve-->
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
        <!-- si no sirve pegar aqui -->
    </div>
    <div class='row center-align'>
    <button type='submit' name='editar' class='btn waves-effect blue tooltipped' data-tooltip='editar'><i class='material-icons'>save</i></button>
    </div>
</form>  
</div>