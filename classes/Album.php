<?php
/**
* Clase Album -> Colección de fotos
*
* @package    classes
* @author     Dennis Hernández V <djhv92@hotmail.com>
*/
class Album {
	var $idAlbum;
	var $nombre;
	var $descripcion;
	
	public function __construct() {}
	
	/**
	 * Devuelve el id del album
	 * @return int $idAlbum
	 */
	public function getIdAlbum() {
		return $this->idAlbum;
	}

	/**
	 * Devuelve el nombre del album
	 * @return string $nombre
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * Devuelve la descripción del album
	 * @return string $descripcion
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}

	/**
	 * Setea el id del album
	 * @param int $idAlbum
	 */
	public function setIdAlbum($idAlbum) {
		$this->idAlbum = $idAlbum;
	}

	/**
	 * Setea el nombre del album
	 * @param string $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * Setea la descripción del album
	 * @param string $descripcion
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}	
}
?>