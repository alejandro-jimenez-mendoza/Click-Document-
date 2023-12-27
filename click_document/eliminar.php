<?php

include 'conectar.php';

$cod_estudiantil = $_GET['cod_estud']?? null;

$sql= "DELETE FROM registro_estudiantes WHERE cod_estudiantil = '$cod_estudiantil'";
$resultadoe= mysqli_query($conexion, $sql);

if ($resultadoe) {
	echo'<script>
     alert("Datos eliminados satisfactoriamente");
     window.location = "vista_usuario.php";
  </script>';
}
else{
	echo '
  <script>
     alert("Ha ocurrido un error");
     window.location = "vista_usuario.php";
  </script>
	';
}
?>