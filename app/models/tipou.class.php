<?php
class Tipou extends Validator{
    //Declaración de propiedades
	private $id_tipou = null;
    private $tipou = null;
    public function setId($value){
		if($this->validateId($value)){
			$this->id_tipou = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
        return $this->id_tipou;
    }
    public function setTipou($value){
		if($this->validateAlphabetic($value,1,50)){
			$this->tipou = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipou(){
        return $this->tipou;
    }
    //Metodos para manejar el CRUD
	public function getTipou_pagina(){ //SELECT id_usuario, nombre_usuario, apellido_usuario, telefono, nickname, correo, contrasena, nombre_genero, nombre_tipo FROM usuarios INNER JOIN generos_usuario USING(id_genero) INNER JOIN tipo_usuario USING(id_tipo) ORDER BY apellido_usuario
		$sql = "SELECT id_tipouser, tipo_usuario FROM tipo_user ORDER BY tipo_usuario";
		$params = array(null);
        return Database::getRows($sql, $params);
    }
    public function searchTipou($value){
		$sql = "SELECT * FROM tipo_user WHERE tipo_usuario LIKE ?";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
    }
    public function createTipou(){
		$sql = "INSERT INTO tipo_user(tipo_usuario) VALUES(?)";
		$params = array($this->tipou);
		return Database::executeRow($sql, $params);
    }
    public function readTipou(){
		$sql = "SELECT tipo_usuario FROM tipo_user WHERE id_tipouser = ?";
		$params = array($this->id_tipou);
		$tipou = Database::getRow($sql, $params);
		if($tipou){
			$this->tipou = $tipou['tipo_usuario'];
			return true;
		}else{
			return null;
		}
    }
    public function updateTipou(){
		$sql = "UPDATE tipo_user SET tipo_usuario = ? WHERE id_tipouser = ?";
		$params = array($this->tipou, $this->id_tipou );
		return Database::executeRow($sql, $params);
    }
    public function deleteTipou(){
		$sql = "DELETE FROM tipo_user WHERE id_tipouser = ?";
		$params = array($this->id_tipou);
		return Database::executeRow($sql, $params);
	}
}
?> 