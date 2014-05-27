<?php

class AccesoDatos{	

	var $enlace;

	public function AccesoDatos(){
		$enlace = mysql_connect("localhost:3306", "root","mtrlnk");
		if  (!$enlace) {
			die('No pudo conectarse: ' . mysql_error());
		}
		mysql_select_db("estuchescr", $enlace);
	}
	
	public function ejecutarSQL($psql){	
		$resultado = mysql_query($psql);
		//echo "el rs es: ".$resultado;
		return $resultado;
	}
	
	public function cerrarConexion(){
		mysql_close($enlace);
	}
}
?>