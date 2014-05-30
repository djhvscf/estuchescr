<?php
include "bd/AccesoDatos.php";
//include "Marca.php";
class MarcaControl {
	
	var $acceso;
	//$marca = new Marca();
	
	function MarcaControl(){	
		$this->acceso=new AccesoDatos();
	}
		
	public function getMarcas()
	{
		$sql = "";
		$rs = false;
		$sql = "SELECT marca.idMarca, marca.nombre, marca.descripcion
		FROM marca";
		$rs = $this->acceso->ejecutarSQL($sql);
		$this->acceso->cerrarConexion();
		return $rs;
	}
}
?>