<?php
if($_REQUEST["nombre"] != "Nombre" && $_REQUEST["correo"] != "Correo" && $_REQUEST["mensaje"] != "Mensaje")
{
 			$userName=$_REQUEST['nombre'];
			$userEmail=$_REQUEST['correo'];
			$userPhone="22585585";
			$userMsg=$_REQUEST['mensaje'];
			$subject = "Mensaje de: ".$userName; 
			$message = '<html>
							<head>
								<title>'.$subject.'</title>
							</head>
							<body>
								<table>
									<tr>
										<td>Correo :  </td>
										<td> '.$userEmail.'</td>
									</tr>
									<tr>
										<td>Nombre: </td>
										<td> '.$userName.'</td>
									</tr>
									<tr>
										<td>Mensaje: </td>
										<td> '.$userMsg.'</td>
									</tr>
								</table>
							</body>
						</html>';
			$to="djhv92@hotmail.com";
			$headers = "From: " . strip_tags($userEmail) . "\r\n";
			$headers .= "Reply-To: ". strip_tags($userEmail) . "\r\n";
			//$headers .= "CC: susan@example.com\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			if(!mail($to, $subject, $message, $headers)){
             	$mail_status='no';
             	$error = error_get_last();
				echo "Error ".$error[0] +  " Mensjae " .$error["message"];
				exit();
          }else{
          	  	$mail_status='yes';
          	  	echo "<script language='javascript'>
				alert('Mensaje enviado, muchas gracias.');
				window.location.href = 'inicio.php';
				</script>";
				exit();
         }
}else
{
	header("Location: contacto.php");
}
?>