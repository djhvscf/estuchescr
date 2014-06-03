<?php
/**
* Include de la clase que se conecta a la base de datos
*/
include "../bd/AccesoDatos.php";

/**
* Clase UsuarioControl-> Controlador de la clase Usuario
*
* @package    control
* @author     Dennis Hernández V. <djhv92@hotmail.com>
*/
class UsuarioControl {
	
	var $acceso;
	
	/**
	 * Contructor que inicializa la conexion a la base de datos
	 */
	function UsuarioControl(){	
		$this->acceso=new AccesoDatos();	
	}
		
	/**
	 * Hace una consulta a la base de datos a la tabla Usuario para saber si el usuario existe
	 * @param string $nombre_usuario Nombre del usuario
	 * @param string $contrasena Contrasena del usuario
	 * @return Array $consulta
	 */
	public function buscarUsuario($nombre_usuario, $contrasena){
		$sql = "";
		$rs = false;
		$sql = "
			SELECT usuario.idUsuario, usuario.nombre
			FROM usuario
			WHERE nombre = '".$nombre_usuario."' AND contrasenna = '".$contrasena."';
		";
		
		$rs = $this->acceso->ejecutarSQL($sql);

		$consulta = array(); // creo el array
		
		while ($fila = mysql_fetch_assoc($rs)) {
			$nombre = $fila['nombre'];
			$idUsuario = $fila['idUsuario'];
			array_push($consulta, $nombre, $idUsuario);
		}
		
		$this->acceso->cerrarConexion();
		return $consulta;
	}
}
?>