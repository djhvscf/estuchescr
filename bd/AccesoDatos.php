<?php

class AccesoDatos{	

	var $enlace;
	var $server = "localhost:3306";
	var $user = "root";
	var $password = "mtrlnk"; 
	var $database = "estuchescr";
	
	public function AccesoDatos(){
		$enlace = mysql_connect($server, $user, $password);
		if  (!$enlace) {
			die('No pudo conectarse: ' . mysql_error());
		}
		mysql_select_db($database, $enlace);
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