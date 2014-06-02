<?php
class AnuncioControl {
	
	var $acceso;
	
	function AnuncioControl(){
		$this->acceso=new AccesoDatos();
	}
	
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