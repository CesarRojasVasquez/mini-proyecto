<?php
$contraseña = "a3729e71";
$usuario = "b8db0fec49c9cf";
$nombre_base_de_datos = "heroku_29984a84559d459";
try{
	$base_de_datos = new PDO('mysql:host=us-cdbr-east-06.cleardb.net;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
}catch(Exception $e){
	echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
?>