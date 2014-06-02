<?php
class Anuncio {
	var $idanuncio;
	var $titulo;
	var $descripcion;
	var $esActivo;
	
	public function __construct() {}
	
	/**
	 * @return the $idanuncio
	 */
	public function getIdanuncio() {
		return $this->idanuncio;
	}

	/**
	 * @return the $titulo
	 */
	public function getTitulo() {
		return $this->titulo;
	}

	/**
	 * @return the $descripcion
	 */
	public function getDescripcion() {
		return $this->descripcion;
	}

	/**
	 * @return the $esActivo
	 */
	public function getEsActivo() {
		return $this->esActivo;
	}

	/**
	 * @param field_type $idanuncio
	 */
	public function setIdanuncio($idanuncio) {
		$this->idanuncio = $idanuncio;
	}

	/**
	 * @param field_type $titulo
	 */
	public function setTitulo($titulo) {
		$this->titulo = $titulo;
	}

	/**
	 * @param field_type $descripcion
	 */
	public function setDescripcion($descripcion) {
		$this->descripcion = $descripcion;
	}

	/**
	 * @param field_type $esActivo
	 */
	public function setEsActivo($esActivo) {
		$this->esActivo = $esActivo;
	}	
}
?>