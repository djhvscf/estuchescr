<?php
/**
* Clase AnuncioControl-> Controlador de la clase Anuncio
*
* @package    control
* @author     Dennis Hernández V. <djhv92@hotmail.com>
*/
class AnuncioControl {
	
	var $acceso;
	
	/**
	 * Contructor que inicializa la conexion a la base de datos
	 */
	function AnuncioControl(){
		$this->acceso=new AccesoDatos();
	}
	
	/**
	 * Hace una consulta a la base de datos a la tabla Anuncio
	 * @return resulset $rs
	 */
	public function getAnuncios()
	{
		$sql = "";
		$rs = false;
		$sql = "SELECT anuncio.idanuncio, anuncio.titulo, anuncio.descripcion, anuncio.esActivo, fotografia.idfotografia 
		FROM anuncio LEFT JOIN fotografia ON fotografia.idAnuncio = anuncio.idanuncio WHERE anuncio.esActivo = 1";
		$rs = $this->acceso->ejecutarSQL($sql);
		$this->acceso->cerrarConexion();
		return $rs;
	}
}
?>