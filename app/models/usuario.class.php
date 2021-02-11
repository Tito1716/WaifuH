<?php
class Usuario extends Validator{
	//Declaración de propiedades
	private $id_usuario = null;
	private $nombre_usuario = null;
	private $nombre = null;
	private $clave = null;
	private $direccion = null;
	private $email = null;
	private $pregunta = null;
	private $respuesta = null;
	private $fecha_nacimiento = null;
	private $foto = null;
	private $id_tipouser = null;
 
	public function setId($value){
		if($this->validateId($value)){
			$this->id_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id_usuario;
	}

	public function setNombreuser($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->nombre_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombreuser(){
		return $this->nombre_usuario;
	}

	public function setNombres($value){
		if($this->validateAlphabetic($value, 1, 50)){
			$this->nombre = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombres(){
		return $this->nombre;
	}

	public function setClave($value){
		if($this->validatePassword($value)){
			$this->clave = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getClave(){
		return $this->clave;
	}

	public function setDireccion($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->direccion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDireccion(){
		return $this->direccion;
	}

	public function setCorreo($value){
		if($this->validateEmail($value)){
			$this->email = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getCorreo(){
		return $this->email;
	}

	public function setPregunta($value){
		if($this->validateId($value)){
			$this->pregunta = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPregunta(){
		return $this->pregunta;
	}

	public function setRespuesta($value){
		if($this->validateAlphabetic($value, 1, 50)){
			$this->respuesta = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getRespuesta(){
		return $this->respuesta;
	}

	public function setFecha($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->fecha_nacimiento = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getFecha(){
		return $this->fecha_nacimiento;
	}

	public function setFoto($file){
		if($this->validateImage($file, $this->foto, "C:/xampp/htdocs/Waifu-House/web/img/usuario/", 500, 500)){
			$this->foto = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getFoto(){
		return $this->foto;
	}
	public function unsetFoto(){
		if(unlink("C:/xampp/htdocs/Waifu-House/web/img/usuario/".$this->foto)){
			$this->foto = null;
			return true;
		}else{
			return false;
		}
    }

	public function setId_tipouser($value){
		if($this->validateId($value)){
			$this->id_tipouser = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId_tipouser(){
		return $this->id_tipouser;
	}

	//Métodos para manejar la sesión del usuario
	public function verificacion(){
		$sql = "SELECT * FROM usuario WHERE nombre_usuario = ? AND id_tipouser = 1";
		$params = array($this->nombre_usuario);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id_usuario = $data['id_usuario'];
			$this->nombre_usuario = $data['nombre_usuario'];
			$this->foto = $data['foto'];
			if(password_verify($this->clave, $data['clave'])){
			return true;
			}
		}else{
			return false;
		}
	}

	public function checknombre_usuario(){
		$sql = "SELECT id_usuario FROM usuario WHERE nombre_usuario = ?";
		$params = array($this->nombre_usuario);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->id_usuario = $data['id_usuario'];
			return true;
		}else{
			return false;
		}
	}
	public function checkPassword(){
		$sql = "SELECT clave FROM usuario WHERE id_usuario = ?";
		$params = array($this->id_usuario);
		$data = Database::getRow($sql, $params);
		if(password_verify($this->clave, $data['clave'])){
			return true;
		}else{
			return false;
		}
	}
	public function changePassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE usuario SET clave = ? WHERE id_usuario = ?";
		$params = array($hash, $this->id_usuario);
		return Database::executeRow($sql, $params);
	}
	public function logOut(){
		return session_destroy();
	}
	//Metodos para manejar el CRUD
	public function getUsuarios(){ //SELECT id_usuario, nombre_usuario, apellido_usuario, telefono, nickname, correo, contrasena, nombre_genero, nombre_tipo FROM usuarios INNER JOIN generos_usuario USING(id_genero) INNER JOIN tipo_usuario USING(id_tipo) ORDER BY apellido_usuario
		$sql = "SELECT * FROM usuario WHERE id_tipouser = 1";
		$params = array(null);
		return Database::getRows($sql, $params);
	}

	public function getId_tipousers(){
		$sql = "SELECT id_tipouser, tipo_usuario FROM tipo_user";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchUsuario($value){
		$sql = "SELECT id_usuario, nombre_usuario, nombre, clave, direccion, email, fecha_nacimiento, foto, id_tipouser FROM usuario WHERE nombre LIKE ? OR nombre_usuario LIKE ? ORDER BY nombre";
		$params = array("%$value%", "%$value%");
		return Database::getRows($sql, $params);
	}
	public function createUsuario(){ 
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO usuario(nombre_usuario, nombre, clave, direccion, email, fecha_nacimiento, foto, id_pregunta, respuesta, id_tipouser) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre_usuario, $this->nombre, $hash, $this->direccion, $this->email, $this->fecha_nacimiento, $this->foto, $this->pregunta, $this->respuesta, $this->id_tipouser);
		return Database::executeRow($sql, $params);
	}
	public function createUsuarion(){ 
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "INSERT INTO usuario(nombre_usuario, nombre, clave, direccion, email, fecha_nacimiento, foto, id_pregunta, respuesta, id_tipouser) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$params = array($this->nombre_usuario, $this->nombre, $hash, $this->direccion, $this->email, $this->fecha_nacimiento, $this->foto, $this->pregunta, $this->respuesta, $this->id_tipouser);
		return Database::executeRow($sql, $params);
	}
	public function readUsuario(){
		$sql = "SELECT nombre_usuario, nombre, clave, direccion, email, fecha_nacimiento, foto, id_tipouser FROM usuario WHERE id_usuario = ?";
		$params = array($this->id_usuario);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombre_usuario = $user['nombre_usuario'];
			$this->nombre = $user['nombre'];
			$this->clave = $user['clave'];
			$this->direccion = $user['direccion'];
			$this->email = $user['email'];
			$this->fecha_nacimiento = $user['fecha_nacimiento'];
			$this->foto = $user['foto'];
			$this->id_tipouser = $user['id_tipouser'];
			return true;
		}else{
			return null;
		}
	}
	public function readUsuarioV2(){
		$sql = "SELECT * FROM usuario WHERE id_usuario = ?";
		$params = array($this->id_usuario);
		$user = Database::getRow($sql, $params);
		if($user){
			$this->nombre_usuario = $user['nombre_usuario'];
			$this->nombre = $user['nombre'];
			$this->clave = $user['clave'];
			$this->direccion = $user['direccion'];
			$this->email = $user['email'];
			$this->fecha_nacimiento = $user['fecha_nacimiento'];
			$this->foto = $user['foto'];
			$this->id_tipouser = $user['id_tipouser'];
			return true;
		}else{
			return null;
		}
	}
	public function updateUsuario(){
		$sql = "UPDATE usuario SET nombre_usuario = ?, nombre = ?, clave = ?, direccion = ?, email = ?, fecha_nacimiento = ?, foto = ?, id_tipouser = ? WHERE id_usuario = ?";
		$params = array($this->nombre_usuario, $this->nombre, $this->clave, $this->direccion, $this->email, $this->fecha_nacimiento, $this->foto, $this->id_tipouser, $this->id_usuario);
		return Database::executeRow($sql, $params);
	}
	public function deleteUsuario(){
		$sql = "DELETE FROM usuario WHERE id_usuario = ?";
		$params = array($this->id_usuario);
		return Database::executeRow($sql, $params);
	}
	public function checkRespuesta(){
		$sql = "SELECT respuesta FROM usuario WHERE id_usuario = ?";
		$params = array($this->id_usuario);
		$data = Database::getRow($sql, $params);
		if($this->respuesta == $data['respuesta']){
			return true;
		}else{
			return false;
		}
	}
	public function resetPassword(){
		$hash = password_hash($this->clave, PASSWORD_DEFAULT);
		$sql = "UPDATE usuario SET clave = ? WHERE id_usuario = ?";
		$params = array($hash, $this->id_usuario);
		return Database::executeRow($sql, $params);
	}
	public function getPreguntas(){
		$sql = "SELECT id_pregunta, pregunta FROM preguntas";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function ReadPregunta(){
		$sql = "SELECT id_pregunta, preguntas.pregunta FROM usuario INNER JOIN preguntas USING (id_pregunta) WHERE id_usuario = ?";
		$params = array($this->id_usuario);
		$data = Database::getRow($sql, $params);
		if($data){
			$this->pregunta = $data['pregunta'];
			return true;
		}else{
			return false;
		}
	}
}
?>  


