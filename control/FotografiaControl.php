<?php
/**
* Clase FotografiaControl-> Controlador de la clase Fotografia
*
* @package    control
* @author     Dennis Hernández V. <djhv92@hotmail.com>
*/
class FotografiaControl {
	
	var $acceso;
	
	/**
	 * Contructor que inicializa la conexion a la base de datos
	 */
	function FotografiaControl(){
		$this->acceso=new AccesoDatos();
	}
	
	/**
	 * Hace una consulta a la base de datos a la tabla Anuncio
	 * @return resulset $rs
	 */
	public function subirFotografia($fotografia, $id, $campo)
	{
		if ($fotografia["type"]=="image/jpeg" || 
			$fotografia["type"]=="image/pjpeg" || 
			$fotografia["type"]=="image/gif" || 
			$fotografia["type"]=="image/bmp" || 
			$fotografia["type"]=="image/png")
		{
			$info=getimagesize($fotografia["tmp_name"]);
	
			# Escapa caracteres especiales
			$imagenEscapes=mysql_real_escape_string(file_get_contents($fotografia["tmp_name"]));
			$sql = "";
			$sql = "INSERT INTO fotografia 
					(descripcion,tipo,fuente,".$campo.")
					VALUES (".$info[0].",'".$fotografia["type"]."','".$imagenEscapes."', '".$id."')";
			
			$this->acceso->ejecutarSQL($sql);
			$this->acceso->cerrarConexion();
			return true;
		}else{
			return false;
		}
	}
}
?>