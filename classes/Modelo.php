<?php
class Modelo {
	var $idModelo;
	var $nombre;
	var $descripcion;
	var $idMarca;
	
	public function __construct() {}
	
	/**
	 * @return the $idModelo
	 */
	public function getIdModelo() {
		return $this->idModelo;
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
	 * @return the $idMarca
	 */
	public function getIdMarca() {
		return $this->idMarca;
	}

	/**
	 * @param field_type $idModelo
	 */
	public function setIdModelo($idModelo) {
		$this->idModelo = $idModelo;
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
	 * @param field_type $idMarca
	 */
	public function setIdMarca($idMarca) {
		$this->idMarca = $idMarca;
	}
}
?>