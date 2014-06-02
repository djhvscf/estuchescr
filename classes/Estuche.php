<?php
class Estuche {
	var $idEstuche;
	var $idModelo;

	public function __construct() {}
	
	/**
	 * @return the $idEstuche
	 */
	public function getIdEstuche() {
		return $this->idEstuche;
	}

	/**
	 * @return the $idModelo
	 */
	public function getIdModelo() {
		return $this->idModelo;
	}

	/**
	 * @param field_type $idEstuche
	 */
	public function setIdEstuche($idEstuche) {
		$this->idEstuche = $idEstuche;
	}

	/**
	 * @param field_type $idModelo
	 */
	public function setIdModelo($idModelo) {
		$this->idModelo = $idModelo;
	}	
}
?>