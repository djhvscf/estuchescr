<?php
include "AccesoDatos.php";
include "Usuario.php";
class UsuarioControl {
	
	var $acceso;
	
	function UsuarioControl(){	
		$this->acceso=new AccesoDatos();	
	}
		
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