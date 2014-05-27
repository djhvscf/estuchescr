<?php
class Fotografia {
	var $idFotografia;
	var $fuente;
	var $descripcion;
	var $idModelo;
	var $idAlbum;
	
	function setIdFotografia($pIdFotografia)
	{
		$this->idFotografia = $pIdFotografia;
	}
	
	function setFuente($pFuente)
	{
		$this->fuente = $pFuente;
	}
	
	function setDescripcion($pDescripcion)
	{
		$this->descripcion = $pDescripcion;
	}
	
	function setIdModelo($pIdModelo)
	{
		$this->idModelo = $pIdModelo;
	}
	
	function setIdAlbum($pIdAlbum)
	{
		$this->idAlbum = $pIdAlbum;
	}
	
	function getIdFotografia()
	{
		return $this->idFotografia;
	}
	
	function getFuente()
	{
		return $this->fuente;
	}
	
	function getIdModelo()
	{
		return $this->idModelo;
	}
	
	function getIdAlbum()
	{
		return $this->idAlbum;
	}
	
	function getDescripcion()
	{
		return $this->descripcion;
	}
}
?>