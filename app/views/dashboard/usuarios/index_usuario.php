<div class="contenedor">
                <!-- la calse contenedor es propia ye sta en el archivo css que se referencio anterioirmente-->
                <img height="170px" src="../../web/img/logo final.png" width="400px">
                    <!-- se pone el logo-->
                </img>
<div class="white container">
<h1 class="center-align">
                    Productos
                </h1>
<div class='row'>   
    <form method='post'>
        <div class='input-field col s6 m4'>
            <i class='material-icons prefix'>search</i>
            <input id='buscar' type='text' name='busqueda'/>
            <label for='buscar'>Buscador</label>
        </div>
        <div class='input-field col s6 m4'>
            <button type='submit' name='buscar' class='btn waves-effect green tooltipped' data-tooltip='Buscar por nombre o descripción'><i class='material-icons'>check_circle</i></button>
        </div>
    </form>
    <div class='input-field center-align col s12 m4'>
        <a href='create.php' class='btn waves-effect indigo tooltipped' data-tooltip='Crear producto'><i class='material-icons'>add_circle</i></a>
    </div>
</div>
<table class='highlight' id='mi_tabla'>
	<thead>
		<tr>
			<th>NOMBRE USUARIO</th>
            <th>NOMBRE</th>
            <th>DIRECCION</th>
            <th>EMAIL</th>
			<th>FECHA DE NACIMIENTO</th>
			<th>FOTO</th>
			<th>ACCIÓN</th> 
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
			<td>$row[nombre_usuario]</td>
			<td>$row[nombre]</td>
            <td>$row[direccion]</td>
            <td>$row[email]</td>
            <td>$row[fecha_nacimiento]</td>
			<td><img src='../$row[foto]' class='materialboxed' width='100' height='100'></td>
			<td>
				<a href='update.php?id=$row[id_usuario]' class='blue-text tooltipped'  data-tooltip='modificar tag'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[id_usuario]' class='red-text tooltipped'  data-tooltip='eiminar tag'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>
</div>