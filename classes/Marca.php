<?php
class Marca {
	var $idMarca;
	var $nombre;
	var $descripcion;
	var $fotografia;
	
	public function __construct() {}
	
	/**
	 * @return the $idMarca
	 */
	public function getIdMarca() {
		return $this->idMarca;
	}

	/**
	 * @return the $nombre
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * @return the $descripcion
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}
	
	/**
	 * @return the $fotografia
	 */
	public function getFotografia() {
		return $this->fotografia;
	}

	/**
	 * @param field_type $idMarca
	 */
	public function setIdMarca($idMarca) {
		$this->idMarca = $idMarca;
	}

	/**
	 * @param field_type $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * @param field_type $descripcion
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	/**
	 * @param field_type $fotografia
	 */
	public function setFotografia($fotografia) {
		$this->fotografia = $fotografia;
	}


	
	
}
?>