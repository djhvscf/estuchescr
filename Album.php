<?php
class Album {
	var $idAlbum;
	var $nombre;
	var $descripcion;
	
	public function __construct() {}
	
	/**
	 * @return the $idAlbum
	 */
	public function getIdAlbum() {
		return $this->idAlbum;
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
	 * @param field_type $idAlbum
	 */
	public function setIdAlbum($idAlbum) {
		$this->idAlbum = $idAlbum;
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

	
	
}
?>