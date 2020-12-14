<?php

/**
 *
 */
class Producto
{
	private $id;
  private $categoria_id;
	private $nombre;
	private $descripcion;
	private $precio;
	private $stock;
	private $oferta;
	private $fecha;
	private $imagen;

	public function __construct() {
		$this->db = Database::connect();
	}

	function getId() {
		return $this->id;
	}



	function getCategoria_id() {
		return $this->categoria_id;
	}
	function getNombre() {
		return $this->nombre;
	}

	function getDescripcion() {
		return $this->descripcion;
	}

	function getPrecio() {
		return $this->precio;
	}

	function getStock() {
		return $this->stock;
	}

	function getOferta() {
		return $this->oferta;
	}

	function getFecha() {
		$this->fecha;
	}
	function getImagen() {
		return $this->imagen;
	}
	function setId($id) {
		$this->id = $id;
	}
	function setCategoria_id($categoria_id) {
		$this->categoria_id = $categoria_id;
	}
	function setNombre($nombre) {
		$this->nombre = $this->db->real_escape_string($nombre);
	}

	function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}
	function setPrecio($precio) {
		$this->precio = $precio;
	}


	function setStock($stock) {
		$this->stock = $stock;
	}


	function setOferta($oferta) {
		$this->oferta = $oferta;
	}

	function setfecha($fecha) {
		$this->fecha = $fecha;
	}
	function setImagen($imagen) {
		$this->imagen = $imagen;
	}
	public function getall(){
		$sql = "SELECT * FROM productos ORDER BY id DESC";
		$productos = $this->db->query($sql);


		return $productos;
	}
	public function getByName()
	{
		$sql="SELECT * FROM productos WHERE nombre LIKE '%{$this->getNombre()}%';";
		// $sql = "SELECT * FROM productos WHERE nombre='{$this->getNombre()}';";
		$productos = $this->db->query($sql);


		 return $productos;
	}
	public function getAllCategory(){
	$sql = "SELECT p.*, c.nombre AS 'catnombre' FROM productos p "
			. "INNER JOIN categorias c ON c.id = p.categoria_id "
			. "WHERE p.categoria_id = {$this->getCategoria_id()} "
			. "ORDER BY id DESC";
	$productos = $this->db->query($sql);
	return $productos;
}
	public function getRandom($limit)
	{
		$sql = "SELECT * FROM productos ORDER BY RAND() LIMIT $limit";
		$productos = $this->db->query($sql);
		return $productos;
	}
	public function getOne()
	{
		$sql="SELECT * FROM productos WHERE id='{$this->getId()}';";
		$productos=$this->db->query($sql);
		if ($productos) 	return $productos->fetch_object();
			else 	return false;

	}
	public function save()
	{

			$sql = "INSERT INTO productos VALUES(NULL,'{$this->getCategoria_id()}','{$this->getNombre()}','{$this->getDescripcion()}','{$this->getPrecio()}','{$this->getStock()}','si',CURDATE(),'{$this->getImagen()}');";
			$save = $this->db->query($sql);

			if($save) return true;
			else return false;
		}


			public function edit(){
				$sql = "UPDATE productos SET nombre='{$this->getNombre()}', descripcion='{$this->getDescripcion()}', precio={$this->getPrecio()}, stock={$this->getStock()}, categoria_id={$this->getCategoria_id()}  ";

				if($this->getImagen() != null){
					$sql .= ", imagen='{$this->getImagen()}'";
				}

				$sql .= " WHERE id={$this->id};";

				$save = $this->db->query($sql);

				$result = false;
				if($save){
					$result = true;
				}
				return $result;
		}

	public function delete()
	{

			$sql = "DELETE FROM productos WHERE id='{$this->getId()}';";
			$save = $this->db->query($sql);

			if($save) return true;
			else return false;
		}
	}



/**
 *
 */











 ?>
