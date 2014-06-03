<?php
/**
* Clase Modelo -> Modelos de Marca de teléfono celular
*
* @package    classes
* @author     Dennis Hernández V. <djhv92@hotmail.com>
*/
class Modelo {
	var $idModelo;
	var $nombre;
	var $descripcion;
	var $idMarca;
	
	public function __construct() {}
	
	/**
	 * Devuelve el id del modelo
	 * @return int $idModelo
	 */
	public function getIdModelo() {
		return $this->idModelo;
	}

	/**
	 * Devuelve el nombre del modelo
	 * @return string $nombre
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * Devuelve la descripción del modelo
	 * @return string $descripcion
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}

	/**
	 * Devuelve el id de la marca del modelo
	 * @return int $idMarca
	 */
	public function getIdMarca() {
		return $this->idMarca;
	}

	/**
	 * Setea el id del modelo
	 * @param int $idModelo
	 */
	public function setIdModelo($idModelo) {
		$this->idModelo = $idModelo;
	}

	/**
	 * Setea el nombre del modelo
	 * @param string $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * Setea la descripción del modelo
	 * @param string $descripcion
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	/**
	 * Setea el id de la marca del modelo
	 * @param int $idMarca
	 */
	public function setIdMarca($idMarca) {
		$this->idMarca = $idMarca;
	}
}
?>