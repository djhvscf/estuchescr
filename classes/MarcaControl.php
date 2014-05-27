<?php
include "AccesoDatos.php";
//include "Marca.php";
class MarcaControl {
	
	var $acceso;
	//$marca = new Marca();
	
	function MarcaControl(){	
		$this->acceso=new AccesoDatos();	
	}
		
	public function getMarcas()
	{
		$sql = "";
		$rs = false;
		$sql = "SELECT marca.idMarca, marca.nombre, marca.descripcion
		FROM marca";
		
		$rs = $this->acceso->ejecutarSQL($sql);
		
		$consulta = array(); // creo el array
		
		/*while ($fila = mysql_fetch_assoc($rs)) {
			$idMarca = $fila['idMarca'];
			$nombre = $fila['nombre'];
			$descripcion = $fila['descripcion'];
			array_push($consulta, $idMarca, $nombre, $descripcion);
			$consulta[] = $fila['idMarca'];
			$consulta[] = $fila['nombre'];
			$consulta[] = $fila['descripcion'];
			/*echo $fila['idMarca'];
			echo $fila['nombre'];
			echo $fila['descripcion'];
		}*/
								
		$this->acceso->cerrarConexion();
		return $rs;
	}
}
?>