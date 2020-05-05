<?php
#Salir si alguno de los datos no está presente
if(!isset($_POST["descripcionConvocatoria"]) || !isset($_POST["fechaInicio"]) || !isset($_POST["fechaFin"])) exit();

#Si todo va bien, se ejecuta esta parte del código...

include_once "conexion1.php";
$descripcionConvocatoria = $_POST["descripcionConvocatoria"];
$fechaInicio = $_POST["fechaInicio"];
$fechaFin = $_POST["fechaFin"];

/*
	Al incluir el archivo "base_de_datos.php", todas sus variables están
	a nuestra disposición. Por lo que podemos acceder a ellas tal como si hubiéramos
	copiado y pegado el código
*/
$sentencia = $base_de_datos->prepare("INSERT INTO convocatoria(descripcionConvocatoria, fechaInicio,fechaFin,estadoConvocatoria) VALUES (?,?,?,1);");
$resultado = $sentencia->execute([$descripcionConvocatoria, $fechaInicio, $fechaFin]); # Pasar en el mismo orden de los ?
#execute regresa un booleano. True en caso de que todo vaya bien, falso en caso contrario.
#Con eso podemos evaluar

if($resultado === TRUE) {
     echo "<script>alert('Registro Correcto'); window.location = './index.php';</script>";


    }else echo "Algo salió mal. Por favor verifica que la tabla exista";


?>

<
