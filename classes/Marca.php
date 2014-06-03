<?php
/**
* Clase Marca -> Marca de teléfono celular
*
* @package    classes
* @author     Dennis Hernández V <djhv92@hotmail.com>
*/
class Marca {
	var $idMarca;
	var $nombre;
	var $descripcion;
	
	public function __construct() {}
	
	/**
	 * Devuelve el id de la marca
	 * @return int $idMarca
	 */
	public function getIdMarca() {
		return $this->idMarca;
	}

	/**
	 * Devuelve el nombre de la marca
	 * @return string $nombre
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * Devuelve la descripción de la marca
	 * @return string $descripcion
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}

	/**
	 * Setea el id de la marca
	 * @param int $idMarca
	 */
	public function setIdMarca($idMarca) {
		$this->idMarca = $idMarca;
	}

	/**
	 * Setea el nombre de la marca
	 * @param string $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * Setea la descripción de la marca
	 * @param string $descripcion
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}	
}
?>