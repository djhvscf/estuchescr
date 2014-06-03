<?php
/**
* Clase Usuario -> Administradores del sitio Estuches Costa Rica
*
* @package    classes
* @author     Dennis Hernández V <djhv92@hotmail.com>
*/
class Usuario {
	var $idUsuario;
	var $nombre;
	var $contrasenna;
	
	public function __construct() {}
	
	/**
	 * Devuelve el id del usuario
	 * @return int $idUsuario
	 */
	public function getIdUsuario() {
		return $this->idUsuario;
	}

	/**
	 * Devuelve el nombre del usuario
	 * @return string $nombre
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * Devuelve la contrasenna del usuario
	 * @return string $contrasenna
	 */
	public function getContrasenna() {
		return $this->contrasenna;
	}

	/**
	 * Setea el id del usuario
	 * @param int $idUsuario
	 */
	public function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
	}

	/**
	 * Setea el nombre del usuario
	 * @param string $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * Setea la contrasenna del usuario
	 * @param string $contrasenna
	 */
	public function setContrasenna($contrasenna) {
		$this->contrasenna = $contrasenna;
	}
}
?>