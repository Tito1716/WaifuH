<?php
class Tags extends Validator{
	//Declaración de propiedades
	private $id_tag = null;
    private $tag = null;
    
    public function setId($value){
		if($this->validateId($value)){
			$this->id_tag = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
        return $this->id_tag;
    }
    public function setTag($value){
		if($this->validateAlphabetic($value,1,50)){
			$this->tag = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTag(){
        return $this->tag;
    }
    
    //Metodos para manejar el CRUD
	public function getTag_pagina(){ //SELECT id_usuario, nombre_usuario, apellido_usuario, telefono, nickname, correo, contrasena, nombre_genero, nombre_tipo FROM usuarios INNER JOIN generos_usuario USING(id_genero) INNER JOIN tipo_usuario USING(id_tipo) ORDER BY apellido_usuario
		$sql = "SELECT id_tag, tag FROM tags ORDER BY tag";
		$params = array(null);
        return Database::getRows($sql, $params);
    }
    public function searchTag($value){
		$sql = "SELECT * FROM tags WHERE tag LIKE ?";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
    }
    public function createTag(){
		$sql = "INSERT INTO tags(tag) VALUES(?)";
		$params = array($this->tag);
		return Database::executeRow($sql, $params);
    }
    public function readTag(){
		$sql = "SELECT tag FROM tags WHERE id_tag = ?";
		$params = array($this->id_tag);
		$tag = Database::getRow($sql, $params);
		if($tag){
			$this->tag = $tag['tag'];
			return true;
		}else{
			return null;
		}
    }
    public function updateTag(){
		$sql = "UPDATE tags SET tag = ? WHERE id_tag = ?";
		$params = array($this->tag, $this->id_tag );
		return Database::executeRow($sql, $params);
    }
    public function deleteTag(){
		$sql = "DELETE FROM tags WHERE id_tag = ?";
		$params = array($this->id_tag);
		return Database::executeRow($sql, $params);
	}
}
?> 