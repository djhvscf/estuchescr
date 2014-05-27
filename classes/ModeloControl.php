<?php
//include "AccesoDatos.php";
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
		$sql = "SELECT modelo.idMarca, modelo.nombre, modelo.descripcion
		FROM modelo WHERE modelo.idMarca = '".$idMarca."'";
		
		$rs = $this->acceso->ejecutarSQL($sql);

		$this->acceso->cerrarConexion();
		return $rs;
	}
}
?>