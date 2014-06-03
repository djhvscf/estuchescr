<?php
/**
* Include de la clase que se conecta a la base de datos
*/
include "bd/AccesoDatos.php";

/**
* Clase ModeloControl-> Controlador de la clase Modelo
*
* @package    control
* @author     Dennis Hernández V. <djhv92@hotmail.com>
*/
class ModeloControl {
	
	var $acceso;
	
	/**
	 * Contructor que inicializa la conexion a la base de datos
	 */
	function ModeloControl(){
		$this->acceso=new AccesoDatos();
	}
	
	/**
	 * Hace una consulta a la base de datos a la tabla Modelo
	 * @param int $idMarca Id de la marca que se desea obtener los modelos
	 * @return resulset $rs
	 */
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