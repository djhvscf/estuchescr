<?php
class Fotografia {
	var $idFotografia;
	var $fuente;
	var $descripcion;
	var $idModelo;
	var $idAlbum;
	var $tipo;
	
	public function __construct() {}
	
	/**
	 * @return the $idFotografia
	 */
	public function getIdFotografia() {
		return $this->idFotografia;
	}

	/**
	 * @return the $fuente
	 */
	public function getFuente() {
		return $this->fuente;
	}

	/**
	 * @return the $descripcion
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}

	/**
	 * @return the $idModelo
	 */
	public function getIdModelo() {
		return $this->idModelo;
	}

	/**
	 * @return the $idAlbum
	 */
	public function getIdAlbum() {
		return $this->idAlbum;
	}
	
	/**
	 * @return the $tipo
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * @param field_type $idFotografia
	 */
	public function setIdFotografia($idFotografia) {
		$this->idFotografia = $idFotografia;
	}

	/**
	 * @param field_type $fuente
	 */
	public function setFuente($fuente) {
		$this->fuente = $fuente;
	}

	/**
	 * @param field_type $descripcion
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	/**
	 * @param field_type $idModelo
	 */
	public function setIdModelo($idModelo) {
		$this->idModelo = $idModelo;
	}

	/**
	 * @param field_type $idAlbum
	 */
	public function setIdAlbum($idAlbum) {
		$this->idAlbum = $idAlbum;
	}

	/**
	 * @param field_type $tipo
	 */
	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}
}
?>