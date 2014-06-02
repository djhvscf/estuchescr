<?php
include "bd/AccesoDatos.php";
//include "Marca.php";
class ModeloControl {
	
	var $acceso;
	//$marca = new Marca();
	
	function ModeloControl(){
		$this->acceso=new AccesoDatos();
	}
		
	public function getModeloByIdMarca($idMarca)
	{
		$sql = "";
		$rs = false;
		$sql = "SELECT modelo.idModelo, modelo.nombre, modelo.descripcion, modelo.precio, fotografia.idfotografia
		FROM modelo LEFT JOIN fotografia on fotografia.idModelo = modelo.idModelo WHERE modelo.idMarca = '".$idMarca."'";
		
		$rs = $this->acceso->ejecutarSQL($sql);

		$this->acceso->cerrarConexion();
		return $rs;
	}
}
?>