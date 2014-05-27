<?php
class Marca {
	var $idMarca;
	var $nombre;
	var $descripcion;
	
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