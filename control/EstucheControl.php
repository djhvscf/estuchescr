<?php
/**
* Include de la clase que se conecta a la base de datos
*/
include "bd/AccesoDatos.php";

/**
* Clase EstucheControl-> Controlador de la clase Estuche
*
* @package    control
* @author     Dennis Hernández V. <djhv92@hotmail.com>
*/
class EstucheControl {
	
	var $acceso;
	
	/**
	 * Contructor que inicializa la conexion a la base de datos
	 */
	function EstucheControl(){
		$this->acceso=new AccesoDatos();
	}
	
	/**
	 * Hace una consulta a la base de datos a la tabla Estuche
	 * @param int $idModelo Id del modelo que se desea obtener los estuches
	 * @return resulset $rs
	 */
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