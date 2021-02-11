<!-- Formularios para acceder -->
<div class='container' id='acceder'>
	<h4 class='center-align'>¿quieres ser parte de nosotros?</h4>
	<ul class='tabs center-align'>
		<li class='tab'><a href='#cuenta'>CREAR CUENTA</a></li>
		<li class='tab'><a href='#sesion'>INICIAR SESIÓN</a></li>
	</ul>
	<!-- Formulario para nueva cuenta -->
	<div id='cuenta' class='white'>
		<form method='post'>
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
        <div class="file-field input-field">
      <div class="btn">
        <span>Seleccionar foto</span>
        <input type="file" id='foto' name='foto'>
      </div>
      <div class="file-path-wrapper">
        <input  type="text" class="file-path validate"  value='<?php print($usuario->getFoto()) ?>' required/>
      </div>
    </div>
    <br>
    <br>
			</div>
			<div class='row center-align'>
				<div class='col s12'>
					<input id='condicion' type='checkbox' name='condicion'>
					<label for='condicion'>Acepto <a href='#terminos' class="modal-trigger">términos y condiciones</a></label>
				</div>
				<div class='col s12'>
                <button type='submit' name='registrar' class='btn waves-effect blue'><i class='material-icons'>send</i></button>
				</div>
			</div>
		</form>
	</div>
	<!-- Formulario para iniciar sesión -->
	<div id='sesion' class='white'>
		<form method='post'>
			<div class='row'>
				<div class='input-field col s12 m6 offset-m3'>
					<i class='material-icons prefix'>email</i>
					<input id='usuario' type='email' name='usuario' class='validate'>
					<label for='usuario' data-error='Error' data-success='Bien'>Correo</label>
				</div>
				<div class='input-field col s12 m6 offset-m3'>
					<i class='material-icons prefix'>security</i>
					<input id='clave' type='password' name='clave' class='validate'>
					<label for='clave' data-error='Error' data-success='Bien'>Contraseña</label>
				</div>
			</div>
			<div class='row center-align'>
				<button type='submit' name='iniciar' class='btn waves-effect blue'><i class='material-icons'>send</i></button>
			</div>
		</form>
	</div>
</div>

<div id='terminos' class='modal'>
	<div class='modal-content'>
		<h4 class='center-align'>TÉRMINOS Y CONDICIONES</h4>
		<p> El presente Política de Privacidad establece los términos en que Waifu house usa y protege la información que es proporcionada por sus usuarios al momento de utilizar su sitio web. Esta compañía está comprometida con la seguridad de los datos de sus usuarios. Cuando le pedimos llenar los campos de información personal con la cual usted pueda ser identificado, lo hacemos asegurando que sólo se empleará de acuerdo con los términos de este documento. Sin embargo esta Política de Privacidad puede cambiar con el tiempo o ser actualizada por lo que le recomendamos y enfatizamos revisar continuamente esta página para asegurarse que está de acuerdo con dichos cambios.

Información que es recogida

Nuestro sitio web podrá recoger información personal por ejemplo: Nombre,  información de contacto como  su dirección de correo electrónica e información demográfica. Así mismo cuando sea necesario podrá ser requerida información específica para procesar algún pedido o realizar una entrega o facturación.

Uso de la información recogida

Nuestro sitio web emplea la información con el fin de proporcionar el mejor servicio posible, particularmente para mantener un registro de usuarios, de pedidos en caso que aplique, y mejorar nuestros productos y servicios.  Es posible que sean enviados correos electrónicos periódicamente a través de nuestro sitio con ofertas especiales, nuevos productos y otra información publicitaria que consideremos relevante para usted o que pueda brindarle algún beneficio, estos correos electrónicos serán enviados a la dirección que usted proporcione y podrán ser cancelados en cualquier momento.

Waifu house está altamente comprometido para cumplir con el compromiso de mantener su información segura. Usamos los sistemas más avanzados y los actualizamos constantemente para asegurarnos que no exista ningún acceso no autorizado.

Cookies

Una cookie se refiere a un fichero que es enviado con la finalidad de solicitar permiso para almacenarse en su ordenador, al aceptar dicho fichero se crea y la cookie sirve entonces para tener información respecto al tráfico web, y también facilita las futuras visitas a una web recurrente. Otra función que tienen las cookies es que con ellas las web pueden reconocerte individualmente y por tanto brindarte el mejor servicio personalizado de su web.

Nuestro sitio web emplea las cookies para poder identificar las páginas que son visitadas y su frecuencia. Esta información es empleada únicamente para análisis estadístico y después la información se elimina de forma permanente. Usted puede eliminar las cookies en cualquier momento desde su ordenador. Sin embargo las cookies ayudan a proporcionar un mejor servicio de los sitios web, estás no dan acceso a información de su ordenador ni de usted, a menos de que usted así lo quiera y la proporcione directamente. Usted puede aceptar o negar el uso de cookies, sin embargo la mayoría de navegadores aceptan cookies automáticamente pues sirve para tener un mejor servicio web. También usted puede cambiar la configuración de su ordenador para declinar las cookies. Si se declinan es posible que no pueda utilizar algunos de nuestros servicios.

Enlaces a Terceros

Este sitio web pudiera contener en laces a otros sitios que pudieran ser de su interés. Una vez que usted de clic en estos enlaces y abandone nuestra página, ya no tenemos control sobre al sitio al que es redirigido y por lo tanto no somos responsables de los términos o privacidad ni de la protección de sus datos en esos otros sitios terceros. Dichos sitios están sujetos a sus propias políticas de privacidad por lo cual es recomendable que los consulte para confirmar que usted está de acuerdo con estas.

Control de su información personal

En cualquier momento usted puede restringir la recopilación o el uso de la información personal que es proporcionada a nuestro sitio web.  Cada vez que se le solicite rellenar un formulario, como el de alta de usuario, puede marcar o desmarcar la opción de recibir información por correo electrónico.  En caso de que haya marcado la opción de recibir nuestro boletín o publicidad usted puede cancelarla en cualquier momento.

Esta compañía no venderá, cederá ni distribuirá la información personal que es recopilada sin su consentimiento, salvo que sea requerido por un juez con un orden judicial.

Waifu house Se reserva el derecho de cambiar los términos de la presente Política de Privacidad en cualquier momento.</p>
	</div>
	<div class='divider'></div>
	<div class='modal-footer'>
		<a href='#!' class='modal-action modal-close btn waves-effect'><i class='material-icons'>done</i></a>
	</div>
</div>