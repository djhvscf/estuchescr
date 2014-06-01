<?php
include "bd/AccesoDatos.php";
class EstucheControl {
	
	var $acceso;
	//$marca = new Marca();
	
	function EstucheControl(){
		$this->acceso=new AccesoDatos();
	}
		
	public function getEstucheByModelo($idModelo)
	{
		$sql = "";
		$rs = false;
		$sql = "SELECT estuche.idestuche, estuche.idModelo, fotografia.idfotografia
		FROM estuche LEFT JOIN fotografia on fotografia.idEstuche = estuche.idEstuche WHERE estuche.idModelo = '".$idModelo."'";
		
		$rs = $this->acceso->ejecutarSQL($sql);

		$this->acceso->cerrarConexion();
		return $rs;
	}
}
?>