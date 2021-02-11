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
			<th>IMAGEN 1</th>
            <th>IMAGEN 2</th>
            <th>IMAGEN 3</th>
            <th>IMAGEN 4</th>
			<th>NOMBRE</th>
			<th>PRECIO (US$)</th>
			<th>DESCRIPCION</th>
			<th>TAG</th>
			<th>ACCIÓN</th>
		</tr>
	</thead>
	<tbody>
	<?php
	foreach($data as $row){
		print("
		<tr>
            <td><img src='../../web/img/productos/$row[foto1]' class='materialboxed' width='100' height='100'></td>
            <td><img src='../../web/img/productos/$row[foto2]' class='materialboxed' width='100' height='100'></td>
            <td><img src='../../web/img/productos/$row[foto3]' class='materialboxed' width='100' height='100'></td>
            <td><img src='../../web/img/productos/$row[foto4]' class='materialboxed' width='100' height='100'></td>
			<td>$row[nombre_producto]</td>
			<td>$row[precio]</td>
            <td>$row[descripcion]</td>
            <td>$row[tag]</td>
			<td>
				<a href='update.php?id=$row[id_producto]' class='blue-text'><i class='material-icons'>mode_edit</i></a>
				<a href='delete.php?id=$row[id_producto]' class='red-text'><i class='material-icons'>delete</i></a>
			</td>
		</tr>
		");
	}
	?>
	</tbody>
</table>
</div>