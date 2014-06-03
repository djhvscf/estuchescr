<?php
/**
* Clase Estuche -> Estuches de un modelo
*
* @package    classes
* @author     Dennis Hernández V <djhv92@hotmail.com>
*/
class Estuche {
	var $idEstuche;
	var $idModelo;

	public function __construct() {}
	
	/**
	 * Devuelve el id del estuche
	 * @return int $idEstuche
	 */
	public function getIdEstuche() {
		return $this->idEstuche;
	}

	/**
	 * Devuelve el id del modelo
	 * @return int $idModelo
	 */
	public function getIdModelo() {
		return $this->idModelo;
	}

	/**
	 * Setea el id del estuche
	 * @param int $idEstuche
	 */
	public function setIdEstuche($idEstuche) {
		$this->idEstuche = $idEstuche;
	}

	/**
	 * Setea el id del modelo
	 * @param int $idModelo
	 */
	public function setIdModelo($idModelo) {
		$this->idModelo = $idModelo;
	}	
}
?>