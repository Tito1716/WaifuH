<?php
class Tipop extends Validator{
    private $id_tipop = null;
    private $tipop = null;
    public function setId($value){
		if($this->validateId($value)){
			$this->id_tipop = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
        return $this->id_tipop;
    }
    public function setTipop($value){
		if($this->validateAlphabetic($value,1,50)){
			$this->tipop = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipop(){
        return $this->tipop;
    }
    //Metodos para manejar el CRUD
	public function getTipop_pagina(){ //SELECT id_usuario, nombre_usuario, apellido_usuario, telefono, nickname, correo, contrasena, nombre_genero, nombre_tipo FROM usuarios INNER JOIN generos_usuario USING(id_genero) INNER JOIN tipo_usuario USING(id_tipo) ORDER BY apellido_usuario
		$sql = "SELECT * FROM tipo_producto";
		$params = array(null);
        return Database::getRows($sql, $params);
    }
    public function searchTipop($value){
		$sql = "SELECT * FROM tipo_producto WHERE tipo_producto LIKE ?";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
    }
    public function createTipop(){
		$sql = "INSERT INTO tipo_producto(tipo_producto) VALUES(?)";
		$params = array($this->tipop);
		return Database::executeRow($sql, $params);
    }
    public function readTipop(){
		$sql = "SELECT tipo_producton FROM tipo_producto WHERE id_tipoproducto = ?";
		$params = array($this->id_tipop);
		$tipop = Database::getRow($sql, $params);
		if($tipop){
			$this->tipop = $tipop['tipo_producton'];
			return true;
		}else{
			return null;
		}
    }
    public function updateTipop(){
		$sql = "UPDATE tipo_producto SET tipo_producton = ? WHERE id_tipoproducto = ?";
		$params = array($this->tipop, $this->id_tipop );
		return Database::executeRow($sql, $params);
		}
		public function deleteTipop(){
			$sql = "DELETE FROM tipo_producto WHERE id_tipoproducto = ?";
			$params = array($this->id_tipop);
			return Database::executeRow($sql, $params);
		}
}
?> 