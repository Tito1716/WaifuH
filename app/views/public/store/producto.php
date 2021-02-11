<div class='container'>
    <h4 class='center'>NUESTROS FUNKOS</h4>
    <div class='row'>
        <div class='input-field col s6 m6'>
            <i class='material-icons prefix'>search</i>
            <input id='buscar' type='text' name='busqueda'/>
            <label for='buscar'>Buscar tipo de usuario</label>
        </div>
        <div class='input-field col s6 m6'>
            <button type='submit' name='buscar' class='btn waves-effect green tooltipped' data-tooltip='buscar producto'><i class='material-icons'>check_circle</i></button>
		</div>
		<div class='input-field center-align col s12 m6'>
       <h6 class='teal-text'>.</h6>
    </div>
    <?php
    foreach($Producto as $Producto){
        print("
            <div class='col s12 m6 l3'>
                <div class='card hoverable'>
                    <div class='card-image waves-effect waves-block waves-light'>
                        <img class='activator' src='../web/img/Productos/$Producto[foto1]'>
                    </div>
                    <div class='card-content'>
                        <span class='card-title activator grey-text text-darken-4'>$Producto[nombre_producto]<i class='material-icons right'>more_vert</i></span>
                        <p class='center'><a href='producto.php?id=$Producto[id_producto]' class='tooltipped' data-tooltip='Ver más'><i class='small material-icons'>visibility</i></a></p>
                        <p> precio ($) $Producto[precio]</p>
                        
                    </div>
                    <div class='card-reveal'>
                        <span class='card-title grey-text text-darken-4'>$Producto[nombre_producto]<i class='material-icons right'>close</i></span>
                        <p> $Producto[descripcion]</p>
                    </div>
                </div>
            </div>
        ");
    }
    ?>
    </div>
</div>