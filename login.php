<html>
<head>
	<title> Estuches Costa Rica </title>	
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/loginStyle.css" />
	<script type="text/javascript" src="js/loginValidation.js"></script>
</head>
<body id="login">
	<?php
		$estado = "";
		$redirect = "login.php";
		session_start();
		if(isset($_SESSION['idUsuario'])) {
			header ("Location: inicio.php");
		}
		if(array_key_exists('state',$_GET)){
			$estado = $_GET['state'];
			$mensaje = "Par�metros no v�lidos";
			$tipo = "alert-error";
			switch ($estado) {
				case "logout":
					$tipo = "alert-info";
					$mensaje = "La sesi�n ha sido cerrada con �xito";
				break;
				case "false":
					$mensaje = "Se requiere iniciar sesi�n para acceder al sistema";
					if(array_key_exists('redirect',$_GET))
						$redirect = $_GET['redirect'];
				break;
				case "invalidCredentials":
					$mensaje = "El usuario y/o la contrase�a son incorrectos";
				break;
			}
		}
	?>
	<div class = "login-wrap">
		<div>
		<img src="web/images/logo.png" alt="Estuches Costa Rica" style="max-width: 22%; min-height: 20%; max-height: 36%; min-width: 19%; margin-left: 40%;">
		</div>
		<div class="container">
			<div class="row">
				<div class="span8 offset2">
					<?php 
						if(array_key_exists('state',$_GET)){
							print "<div class='alert ".$tipo."'>".$mensaje."</div>";
						}
					?>
				</div>
			</div>
		</div>
		<form name="loginForm" id="loginForm" class="generic" action="classes/validarSesion.php<?php print "?redirect=$redirect"; ?>" method="post">
			<div class = "loginFormHeader">
				<h2> Iniciar sesi&oacute;n</h2>
			</div>
			<div id	="user" class="field">
				<label>Nombre de usuario</label>
				<input name="txtUsername" id="txtUsername" type="text" class="text" placeholder="Nombre de Usuario" tabindex="1" maxlength="50">
			</div>
			<div id="pass" class="field">
				<label>Contrase&ntilde;a</label>
				<input name="txtPassword" id="txtPassword" type="password" class="text" placeholder="Contrase&ntilde;a" tabindex="1" maxlength="20">
			</div>
			<br><br><br>
			<div class="loginButton">
				<input id="login-submit" type="submit" value="Ingresar">
			</div>
		</form>
	</div>
</body>
</html>