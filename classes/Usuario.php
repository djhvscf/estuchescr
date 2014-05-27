<?php
class Usuario {
	var $idUsuario;
	var $nombre;
	var $contrasenna;
	
	function setIdUsuario($pIdUsuario)
	{
		$this->idUsuario = $pIdUsuario;
	}
	
	function setNombre($pNombre)
	{
		$this->nombre = $pNombre;
	}
	
	function setContrasenna($pContrasenna)
	{
		$this->contrasenna = $pContrasenna;
	}
	
	function getIdUsuario()
	{
		return $this->idUsuario;
	}
	
	function getNombre()
	{
		return $this->nombre;
	}
	
	function getContrasenna()
	{
		return $this->contrasenna;
	}
}
?>