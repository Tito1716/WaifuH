<?php
class Comentarios extends Validator{
    //Declaración de propiedades
	private $id_opinion = null;
	private $id_valoracion = null;
	private $id_producto = null;
    private $id_usuario = null;
    private $opinion = null;
	private $valoracion = null;
	private $fecha = null;
	private $hora = null;

    public function setId($value){
		if($this->validateId($value)){
			$this->id_opinion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
        return $this->id_opinion;
	}
	public function setIdV($value){
		if($this->validateId($value)){
			$this->id_valoracion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdV(){
        return $this->id_valoracion;
    }
    public function setIdProducto($value){
		if($this->validateId($value)){
			$this->id_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdProducto(){
        return $this->id_producto;
    }
    public function setIdUsuario($value){
		if($this->validateId($value)){
			$this->id_usuario = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getIdUsuario(){
        return $this->id_usuario;
    }
    public function setOpinion($value){
		if($this->validateAlphanumeric($value,1,150)){
			$this->opinion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getOpinion(){
        return $this->opinion;
    }
    public function setValoracion($value){
		$this->valoracion = $value;
	}
	public function getValoracion(){
        return $this->valoracion;
    }
    public function setFecha($value){
		$this->fecha = $value;
	}
	public function getFecha(){
        return $this->fecha;
	}
    public function setHora($value){
		$this->hora = $value;
	}
	public function getHora(){
        return $this->hora;
	}
	
    public function createOpinion(){
		$sql = "INSERT INTO opinion (opinion,id_usuario,id_producto,fecha,hora,valoracion) VALUES(?,?,?,?,?,?);";
		$params = array($this->opinion,$this->id_usuario,$this->id_producto,$this->fecha,$this->hora,$this->valoracion);
		return Database::executeRow($sql, $params);
    }
    public function updateOpinion(){
		$sql = "UPDATE opinion SET opinion = ?, valoracion = ? WHERE id_opinion = ?;";
		$params = array($this->opinion,$this->valoracion,$this->id_opinion);
		return Database::executeRow($sql, $params);
    }
    public function deleteOpinion(){
		$sql = "DELETE FROM opinion WHERE id_opinion = ?;";
		$params = array($this->id_opinion);
		return Database::executeRow($sql, $params);
    }
    public function getOpinionesValoraciones(){
        $sql = "SELECT o.id_opinion, u.id_usuario, p.id_producto, 
		u.nombre_usuario, u.nombre, o.opinion, 
		DATE_FORMAT(o.fecha, '%d/%m/%Y') AS fecha, o.hora, o.valoracion
		FROM producto p 
		INNER JOIN opinion o ON p.id_producto = o.id_producto
        INNER JOIN usuario u on u.id_usuario = o.id_usuario 
        AND p.id_producto = ?";
		$params = array($this->id_producto);
        return Database::getRows($sql, $params);
    }
}
?> 