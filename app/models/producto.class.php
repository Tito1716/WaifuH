<?php
class Producto extends Validator{
    private $id_producto = null;
    private $nombre_producto = null;
    private $precio = null;
    private $descripcion = null;
    private $foto1 = null;
    private $foto2 = null;
    private $foto3 = null;
    private $foto4 = null;
    private $id_tipop = null;
    private $id_tag = null;

    // get y set
    public function setId($value){
		if($this->validateId($value)){
			$this->id_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getId(){
		return $this->id_producto;
    }
    public function setNombre($value){
		if($this->validateAlphanumeric($value, 1, 50)){
			$this->nombre_producto = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getNombre(){
		return $this->nombre_producto;
    }
    public function setPrecio($value){
		if($this->validateMoney($value)){
			$this->precio = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getPrecio(){
		return $this->precio;
	}
    public function setDescripcion($value){
		if($this->validateAlphanumeric($value, 1, 200)){
			$this->descripcion = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getDescripcion(){
		return $this->descripcion;
    }
    public function setFoto1($file){
		if($this->validateImage($file, $this->foto1, "../../web/img/productos/", 500, 500)){
			$this->foto1 = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getFoto1(){
		return $this->foto1;
	}
	public function unsetFoto1(){
		if(unlink("../../web/img/productos/".$this->foto1)){
			$this->foto1 = null;
			return true;
		}else{
			return false;
		}
    }
    public function setFoto2($file){
		if($this->validateImage($file, $this->foto2, "../../web/img/productos/", 500, 500)){
			$this->foto2 = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getFoto2(){
		return $this->foto2;
	}
	public function unsetFoto2(){
		if(unlink("../../web/img/productos/".$this->foto2)){
			$this->foto2 = null;
			return true;
		}else{
			return false;
		}
	}
    public function setfoto3($file){
		if($this->validateImage($file, $this->foto3, "../../web/img/productos/", 500, 500)){
			$this->foto3 = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getfoto3(){
		return $this->foto3;
	}
	public function unsetfoto3(){
		if(unlink("../../web/img/productos/".$this->foto3)){
			$this->foto3 = null;
			return true;
		}else{
			return false;
		}
    }
    public function setfoto4($file){
		if($this->validateImage($file, $this->foto4, "../../web/img/productos/", 500, 500)){
			$this->foto4 = $this->getImageName();
			return true;
		}else{
			return false;
		}
	}
	public function getfoto4(){
		return $this->foto4;
	}
	public function unsetfoto4(){
		if(unlink("../../web/img/productos/".$this->foto4)){
			$this->foto4 = null;
			return true;
		}else{
			return false;
		}
    }
    public function setTipop($value){
		if($this->validateId($value)){
			$this->id_tipop = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTipop(){
		return $this->id_tipop;
    }
    public function setTag($value){
		if($this->validateId($value)){
			$this->id_tag = $value;
			return true;
		}else{
			return false;
		}
	}
	public function getTag(){
		return $this->id_tag;
    }
    	//Metodos para el manejo del CRUD
	public function getTipoProductos(){
		$sql = "SELECT tipo_producton, id_producto, nombre_producto, precio, descripcion, foto1, foto2, foto3, foto4, id_tag FROM producto INNER JOIN tipo_producto USING(id_tipoproducto) WHERE id_tipoproducto = ? AND INNER JOIN tags USING(id_tag) WHERE id_tag = ? ORDER BY nombre_producto";
		$params = array($this->id_tipop);
		return Database::getRows($sql, $params);
	}
	public function getProductos_x_Tipop(){
		$sql = "SELECT TP.tipo_producto, TP.id_tipoproducto, P.id_producto, P.nombre_producto, P.precio, P.descripcion, P.foto1, P.foto2, P.foto3, P.foto4, P.id_tag FROM producto P, tipo_producto TP WHERE TP.id_tipoproducto = P.id_tipoproducto AND TP.id_tipoproducto = ?;";
		$params = array($this->id_tipop);
		return Database::getRows($sql, $params);
	}
	public function getTagProducto(){
		$sql = "SELECT tag, id_producto, nombre_producto, precio, descripcion, foto1, foto2, foto3, foto4, id_tipoproducto FROM producto INNER JOIN tags USING(id_tag) WHERE id_tag = ? AND INNER JOIN tipo_producto USING(id_tipoproducto) WHERE id_tipoproducto = ? ORDER BY nombre_producto";
		$params = array($this->id_tag);
		return Database::getRows($sql, $params);
	}
	public function getProductos(){
		$sql = "SELECT P.id_producto, P.nombre_producto, P.precio, P.descripcion, P.foto1, P.foto2, P.foto3, P.foto4, P.id_tipoproducto, TP.tipo_producto, P.id_tag, T.tag FROM producto P, tags T, tipo_producto TP  WHERE P.id_tag = T.id_tag AND P.id_tipoproducto = TP.id_tipoproducto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function searchProducto($value){
		$sql = "SELECT P.id_producto, P.nombre_producto, P.precio, P.descripcion, P.foto1, P.foto2, P.foto3, P.foto4, P.id_tipoproducto, TP.tipo_producto, P.id_tag, T.tag FROM producto P, tags T, tipo_producto TP  WHERE nombre_producto LIKE ? ORDER BY nombre_producto";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
	public function getTipopf(){
		$sql = "SELECT id_tipoproducto, tipo_producto FROM tipo_producto";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function getTagf(){
		$sql = "SELECT id_tag, tag FROM tags";
		$params = array(null);
		return Database::getRows($sql, $params);
	}
	public function createProducto(){
		$sql = "INSERT INTO producto(nombre_producto, precio, descripcion, foto1, foto2, foto3, foto4, id_tipoproducto, id_tag) VALUES(?, ?, ?, ?, ?, ?, ?, ? ,?)";
		$params = array($this->nombre_producto, $this->precio, $this->descripcion, $this->foto1, $this->foto2, $this->foto3, $this->foto4, $this->id_tipop, $this->id_tag);
		return Database::executeRow($sql, $params);
	}
	public function readProducto(){
		$sql = "SELECT nombre_producto, precio, descripcion, foto1, foto2, foto3, foto4, id_tipoproducto, id_tag FROM producto WHERE id_producto = ?";
		$params = array($this->id_producto);
		$producto = Database::getRow($sql, $params);
		if($producto){
			$this->nombre_producto = $producto['nombre_producto'];
			$this->precio = $producto['precio'];
			$this->descripcion = $producto['descripcion'];
			$this->foto1 = $producto['foto1'];
			$this->foto2 = $producto['foto2'];
			$this->foto3 = $producto['foto3'];
			$this->foto4 = $producto['foto4'];
			$this->id_tipop = $producto['id_tipoproducto'];
			$this->id_tag = $producto['id_tag'];
			return true;
		}else{
			return null;
		}
	}
	public function updateProducto(){
		$sql = "UPDATE producto SET nombre_producto = ?, precio =?, descripcion =?, foto1 =?, foto2 =?, foto3 =?, foto4 =?, id_tipoproducto =?, id_tag =? WHERE id_producto = ?";
		$params = array($this->nombre_producto, $this->precio, $this->descripcion, $this->foto1, $this->foto2, $this->foto3, $this->foto4, $this->id_tipop, $this->id_tag, $this->id_producto);
		return Database::executeRow($sql, $params);
	}
	public function deleteProducto(){
		$sql = "DELETE FROM producto WHERE id_producto = ?";
		$params = array($this->id_producto);
		return Database::executeRow($sql, $params);
	}
	public function searchProducto2($value){
		$sql = "SELECT P.id_producto, P.nombre_producto, P.precio, P.descripcion, P.foto1 FROM producto P  WHERE nombre_producto LIKE ?";
		$params = array("%$value%");
		return Database::getRows($sql, $params);
	}
    
}
?>