<?php
class Album {
	var $idAlbum;
	var $nombre;
	var $descripcion;
	
	function setIdAlbum($pIdAlbum)
	{
		$this->idAlbum = $pIdAlbum;
	}
	
	function setNombre($pNombre)
	{
		$this->nombre = $pNombre;
	}
	
	function setDescripcion($pDescripcion)
	{
		$this->descripcion = $pDescripcion;
	}
	
	function getIdAlbum()
	{
		return $this->idAlbum;
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