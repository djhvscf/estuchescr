<?php
/**
* Clase Fotografia -> Fotografia de los modelos, marcas, anuncios que pertenecen a un album
*
* @package    classes
* @author     Dennis Hernández V. <djhv92@hotmail.com>
*/
class Fotografia {
	var $idFotografia;
	var $fuente;
	var $descripcion;
	var $idModelo;
	var $idAlbum;
	var $idMarca;
	var $idAnuncio;
	var $idEstuche;
	var $tipo;
	
	public function __construct() {}
	
	/**
	 * Devuelve el id de la fotografia
	 * @return int $idFotografia
	 */
	public function getIdFotografia() {
		return $this->idFotografia;
	}

	/**
	 * Devuelve la fuente de la fotografia
	 * @return blob $fuente
	 */
	public function getFuente() {
		return $this->fuente;
	}

	/**
	 * Devuelve la descripción de la fotografia
	 * @return string $descripcion
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}

	/**
	 * Devuelve el id del modelo
	 * @return int $idModelo
	 */
	public function getIdModelo() {
		return $this->idModelo;
	}

	/**
	 * Devuelve el id del album
	 * @return int $idAlbum
	 */
	public function getIdAlbum() {
		return $this->idAlbum;
	}

	/**
	 * Devuelve el id de al marca
	 * @return int $idMarca
	 */
	public function getIdMarca() {
		return $this->idMarca;
	}

	/**
	 * Devuelve el id del anuncio
	 * @return int $idAnuncio
	 */
	public function getIdAnuncio() {
		return $this->idAnuncio;
	}

	/**
	 * Devuelve el id del estuche
	 * @return int $idEstuche
	 */
	public function getIdEstuche() {
		return $this->idEstuche;
	}

	/**
	 * Devuelve el tipo de la fotografia
	 * @return string $tipo
	 */
	public function getTipo() {
		return $this->tipo;
	}

	/**
	 * Setea el id de la fotografia
	 * @param int $idFotografia
	 */
	public function setIdFotografia($idFotografia) {
		$this->idFotografia = $idFotografia;
	}

	/**
	 * Setea la fuente de la fotografia
	 * @param string $fuente
	 */
	public function setFuente($fuente) {
		$this->fuente = $fuente;
	}

	/**
	 * Setea la descripción de la fotografia
	 * @param string $descripcion
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	/**
	 * Setea el id del modelo
	 * @param int $idModelo
	 */
	public function setIdModelo($idModelo) {
		$this->idModelo = $idModelo;
	}

	/**
	 * Setea el id del album
	 * @param int $idAlbum
	 */
	public function setIdAlbum($idAlbum) {
		$this->idAlbum = $idAlbum;
	}

	/**
	 * Setea el id de la marca
	 * @param int $idMarca
	 */
	public function setIdMarca($idMarca) {
		$this->idMarca = $idMarca;
	}

	/**
	 * Setea el id del anuncio
	 * @param int $idAnuncio
	 */
	public function setIdAnuncio($idAnuncio) {
		$this->idAnuncio = $idAnuncio;
	}

	/**
	 * Setea el id del estuche
	 * @param int $idEstuche
	 */
	public function setIdEstuche($idEstuche) {
		$this->idEstuche = $idEstuche;
	}

	/**
	 * Setea el tipo del modelo
	 * @param string $tipo
	 */
	public function setTipo($tipo) {
		$this->tipo = $tipo;
	}

	
	
}
?>