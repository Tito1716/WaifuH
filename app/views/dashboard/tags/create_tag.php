<div class="white container">
<h1 class="center-align">
                    Crear un tag
                </h1>
<form method='post' enctype='multipart/form-data'>
    <div class='row'>
        <div class='input-field col s12 m6'>
            <i class='material-icons prefix'>note_add</i>
            <input id='tag' type='text' name='tag' class='validate' value='<?php print($tag->getTag()) ?>' required/>
            <label for='tag'>Nombre del tag</label>
        </div>
    <div class='row center-align'>
        <a href='index.php' class='btn waves-effect red tooltipped' data-tooltip='Cancelar'><i class='material-icons'>cancel</i></a>
        <button type='submit' name='crear' class='btn waves-effect blue tooltipped' data-tooltip='Crear'><i class='material-icons'>save</i></button>
    </div>
</form>
</div>