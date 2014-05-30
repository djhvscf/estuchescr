<?php
class Usuario {
	var $idUsuario;
	var $nombre;
	var $contrasenna;
	
	public function __construct() {}
	
	/**
	 * @return the $idUsuario
	 */
	public function getIdUsuario() {
		return $this->idUsuario;
	}

	/**
	 * @return the $nombre
	 */
	public function getNombre() {
		return $this->nombre;
	}

	/**
	 * @return the $contrasenna
	 */
	public function getContrasenna() {
		return $this->contrasenna;
	}

	/**
	 * @param field_type $idUsuario
	 */
	public function setIdUsuario($idUsuario) {
		$this->idUsuario = $idUsuario;
	}

	/**
	 * @param field_type $nombre
	 */
	public function setNombre($nombre) {
		$this->nombre = $nombre;
	}

	/**
	 * @param field_type $contrasenna
	 */
	public function setContrasenna($contrasenna) {
		$this->contrasenna = $contrasenna;
	}

	
}
?>