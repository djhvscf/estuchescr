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
		$sql = "SELECT marca.idMarca, marca.nombre, marca.descripcion, fotografia.idfotografia
		FROM marca LEFT JOIN fotografia ON fotografia.idMarca = marca.idMarca";
		$rs = $this->acceso->ejecutarSQL($sql);
		$this->acceso->cerrarConexion();
		return $rs;
	}
}
?>