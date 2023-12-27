<?php 


$conexion = mysqli_connect("localhost", "root", "", "sdg_estudiantes");

if($conexion){
 //echo "Conectado a la base de datos";
}else{
	echo"No se pudo conectar la base de datos";
}


?>