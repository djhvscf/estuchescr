<?php
class Modelo {
	var $idModelo;
	var $nombre;
	var $descripcion;
	var $idMarca;
	
	function setIdModelo($pIdModelo)
	{
		$this->idModelo = $pIdModelo;
	}
	
	function setIdMarca($pIdMarca)
	{
		$this->idMarca = $pIdMarca;
	}
	
	function setNombre($pNombre)
	{
		$this->nombre = $pNombre;
	}
	
	function setDescripcion($pDescripcion)
	{
		$this->descripcion = $pDescripcion;
	}
	
	function getIdModelo()
	{
		return $this->idModelo;
	}
	
	function getIdMarca()
	{
		return $this->idMarca;
	}
	
	function getNombre()
	{
		return $this->nombre;
	}
	
	function getDescripcion()
	{
		return $this->descripcion;
	}
}
?>