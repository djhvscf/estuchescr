<?php
/**
 * Clase AccesoDatos-> Ayuda a conectarse a la base de datos y ejecutar consultas
 *
 * @package    bd
 * @author     Dennis Hernández V. <djhv92@hotmail.com>
 */
class AccesoDatos{	

	var $enlace;
	
	/**
	 * Establece la conexión a la base de datos
	 */
	public function AccesoDatos(){
		$enlace = mysql_connect("localhost:3306", "root", "mtrlnk");
		if  (!$enlace) {
			die('No pudo conectarse: ' . mysql_error());
		}
		mysql_select_db("estuchescr", $enlace);
	}
	
	/**
	 * Ejecuta una consulta a la base de datos
	 * @return resultSet resultado de la consulta
	 */
	public function ejecutarSQL($psql){	
		return mysql_query($psql);
	}
	
	/**
	 * Cierra la conexión con la base de datos
	 */
	public function cerrarConexion(){
		mysql_close($enlace);
	}
}
?>