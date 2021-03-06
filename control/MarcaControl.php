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
	
	/**
	 * Registra una nueva marca en la base de datos 
	 * @param $nombre Nombre de la marca
	 * @param $descripcion Descripci�n de la marca
	 * @return id de la marca recien registrada
	 */
	public function agregarMarca($marca)
	{
		$sql="INSERT INTO Marca(nombre, descripcion) VALUES ('".$marca->getNombre()."', '".$marca->getDescripcion()."')";
		$this->acceso->ejecutarSQL($sql);
		$this->acceso->cerrarConexion();
		return mysql_insert_id();
	}
	
	public function getMarcaById($idMarca)
	{
		$sql = "";
		$rs = false;
		$sql = "SELECT marca.idMarca, marca.nombre, marca.descripcion, fotografia.idfotografia
		FROM marca LEFT JOIN fotografia on fotografia.idMarca = marca.idMarca WHERE marca.idMarca = '".$idMarca."'";
		
		$rs = $this->acceso->ejecutarSQL($sql);
		
		$this->acceso->cerrarConexion();
		return $rs;
	}
	
	public function getNombreMarcaById($idMarca)
	{
		$sql = "";
		$rs = false;
		$sql = "SELECT marca.nombre FROM marca WHERE marca.idMarca = '".$idMarca."'";
		
		$rs = $this->acceso->ejecutarSQL($sql);
		$nombreMarca = "";
		
		while ($row = mysql_fetch_array($rs))
		{
			$nombreMarca = $row["nombre"];	
		}
		$this->acceso->cerrarConexion();
		return $nombreMarca;
	}
	
	public function updateMarca($marca)
	{
		$sql = "";
		$rs = false;
		$sql = "UPDATE marca SET marca.nombre = '".$marca->getNombre()."', marca.descripcion = '".$marca->getDescripcion()."' 
				WHERE marca.idMarca = ".$marca->getIdMarca()."";
		$rs = $this->acceso->ejecutarSQL($sql);
		$this->acceso->cerrarConexion();
	}
}
?>