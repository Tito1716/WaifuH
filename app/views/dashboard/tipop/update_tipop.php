<div class="white container">
<h1 class="center-align">
                    Modificar
                </h1>
<form method='post' enctype='multipart/form-data'>
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>note_add</i>
            <input id='tipop' type='text' name='tipop' class='validate' value='<?php print($tipop->getTipop()) ?>' required/>
            <label for='tipop'>Nombre del tipo de producto</label>
        </div>
    </div>
        <div class='row center-align'>
         <a href='index.php' class='btn waves-effect red tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
            <button type='submit' name='actualizar' class='btn waves-effect blue tooltipped' data-tooltip='Actualizar'><i class='material-icons'>save</i></button>
        </div>
</form>
<br>
</div>