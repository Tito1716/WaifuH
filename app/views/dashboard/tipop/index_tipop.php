<div class="contenedor">
                <!-- la calse contenedor es propia ye sta en el archivo css que se referencio anterioirmente-->
                <img height="170px" src="../../web/img/logo final.png" width="400px">
                    <!-- se pone el logo-->
                </img>
            </div>
<div class=" white container">
<h1 class="center-align">
                    Tipos de producto
                </h1>
<div class='row'>   
    <form method='post'>
        <div class='input-field col s6 m4'>
            <i class='material-icons prefix'>search</i>
            <input id='buscar' type='text' name='busqueda'/>
            <label for='buscar'>Buscar tipo de producto</label>
        </div>
        <div class='input-field col s6 m4'>
            <button type='submit' name='buscar' class='btn waves-effect green tooltipped' data-tooltip='iniciar busqueda'><i class='material-icons'>check_circle</i></button>
		</div>
		<div class='input-field center-align col s12 m4'>
        <a href='create.php' class='btn waves-effect pink accent-4 tooltipped' data-tooltip='Crear tipo de producto'><i class='material-icons'>add_circle</i></a>
    </div>
	</form>
</div>
<table class='highlight'id='mi_tabla'>
	<thead>
		<tr>
			<th>Tipo de producto</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody> 
	<?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[tipo_producto]</td>
			<td>
				<a href='update.php?id=$row[id_tipoproducto]' class='blue-text tooltipped'  data-tooltip='modificar tipo de usuario'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[id_tipoproducto]' class='red-text tooltipped'  data-tooltip='eiminar tipo de usuario'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>
</div>