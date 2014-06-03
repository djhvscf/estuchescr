<?php
/**
* Clase Anuncio -> Anuncios del sitio Estuches Costa Rica
*
* @package    classes
* @author     Dennis Hernández V <djhv92@hotmail.com>
*/
class Anuncio {
	var $idAnuncio;
	var $titulo;
	var $descripcion;
	var $esActivo;
	
	public function __construct() {}
	
	/**
	 * Devuelve el id del anuncio
	 * @return int $idAnuncio
	 */
	public function getIdAnuncio() {
		return $this->idAnuncio;
	}

	/**
	 * Devuelve el titulo del anuncio
	 * @return string $titulo
	 */
	public function getTitulo() {
		return $this->titulo;
	}

	/**
	 * Devuelve la descripcion del anuncio
	 * @return string $descripcion
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}

	/**
	 * Devuelve si el anuncio está activo
	 * @return boolean $esActivo
	 */
	public function getEsActivo() {
		return $this->esActivo;
	}

	/**
	 * @param field_type $idAnuncio
	 */
	public function setIdAnuncio($idAnuncio) {
		$this->idanuncio = $idAnuncio;
	}

	/**
	 * Setea el id del anuncio
	 * @param int $titulo
	 */
	public function setTitulo($titulo) {
		$this->titulo = $titulo;
	}

	/**
	 * Setea la descripción del anuncio
	 * @param string $descripcion
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	/**
	 * Setea si el anuncio está activo
	 * @param boolean $esActivo
	 */
	public function setEsActivo($esActivo) {
		$this->esActivo = $esActivo;
	}	
}
?>