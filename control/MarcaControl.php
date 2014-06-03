<?php
/**
* Include de la clase que se conecta a la base de datos
*/
include "bd/AccesoDatos.php";

/**
* Clase MarcaControl-> Controlador de la clase Marca
*
* @package    control
* @author     Dennis Hernández V. <djhv92@hotmail.com>
*/
class MarcaControl {
	
	var $acceso;
	
	/**
	 * Contructor que inicializa la conexion a la base de datos
	 */
	function MarcaControl(){	
		$this->acceso=new AccesoDatos();
	}
	
	/**
	 * Hace una consulta a la base de datos a la tabla Marca
	 * @return resulset $rs
	 */	
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