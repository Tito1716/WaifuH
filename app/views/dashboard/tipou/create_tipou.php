<div class="white container">
<h1 class="center-align">
                    Crear un tipo de usuario
                </h1>
<form method='post' enctype='multipart/form-data'>
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>note_add</i>
            <input id='tipo_usuario' type='text' name='tipo_usuario' class='validate' value='<?php print($tipou->getTipou()) ?>' required/>
            <label for='tipo_usuario'>Nombre del tipo usuario</label>
        </div>
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect red tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
    </div>
</form>
</div>