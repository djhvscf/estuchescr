<?php
	//session_start();
	include "UsuarioControl.php";
	$usuarioControl = new UsuarioControl();
	
	$usuario = $_POST['txtUsername'];
	$clave = $_POST['txtPassword'];
	$redirect = $_GET['redirect'];
	$consulta = $usuarioControl->buscarUsuario($usuario, $clave);

	if (count($consulta)==0){
		header("location:login.php?state=invalidCredentials");
	}
	else{
		session_start();
		$_SESSION['idUsuario'] = $consulta[0];
		header("location:$redirect");
	}
?>