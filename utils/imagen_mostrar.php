<?php
########## imagen_mostrar.php ##########
# deve recibir el id de la imagen a mostrar
# http://www.lawebdelprogramador.com

#Conectamos con la base de datos
$enlace = mysql_connect("localhost:3306", "root","mtrlnk");
mysql_select_db("estuchescr", $enlace);

# Buscamos la imagen a mostrar
$result=mysql_query("SELECT fuente, tipo FROM `fotografia` WHERE idfotografia=".$_GET["id"],$enlace);
$row=mysql_fetch_array($result);

# Mostramos la imagen
header("Content-type:".$row["tipo"]);
echo $row["fuente"];
?>