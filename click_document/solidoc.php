<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Click Document</title>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
<link href="estilos.css" rel="stylesheet" type="text/css">
<link rel="shortcut icon" href="img/queen.png">
<script src="../js/jquery.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>

<body>
	<br>
  <br><br><br><br><br><br>
	<center>
	

<?php

include 'conectar.php';


 $conexion = mysqli_connect("localhost", "root", "", "sdg_estudiantes");
  $codig_usuario = $_POST['codig_usuario'];
  $query = mysqli_query($conexion, ("SELECT * FROM registro_estudiantes WHERE cod_estudiantil='$codig_usuario'")) ;


  if (mysqli_num_rows($query) > 0) {

  while ($row = $query->fetch_assoc()) {
        $mostrar_nombres = $row['nombres_e'];
        $mostrar_apellidos = $row['apellidos_e'];
        $mostrar_fnacimiento = $row['f_nacimiento_e'];
        $mostrar_codestudiantil = $row['cod_estudiantil'];
        $mostrar_telefono = $row['telefono_e'];
        $mostrar_email = $row['email_e'];
        $mostrar_cttutorial = $row['ct_tutorial'];
        $mostrar_documento = $row['documento'];
        $mostrar_descripcion = $row['descripcion'];


        echo '
        <br>
        <br>
        <div id="contenedor">
		
  <div id="contenido1">
  <div id="columna1">Nombres</div>
  <div id="columna2">Apellidos</div>
  <div id="columna3">Codigo estudiantil</div>
  <div id="columna4">Descripción</div>
  <div id="columna6">Email</div>
  <div id="columna8">Documento</div>
 
  </div>
<div id="contenido2">
        <div id="columna1">'.$mostrar_nombres.'</div>
  <div id="columna2">'.$mostrar_apellidos.'</div>
  <div id="columna3">'.$mostrar_codestudiantil.'</div>
  <div id="columna4">'.$mostrar_descripcion.'</div>
  <div id="columna6">'.$mostrar_email.'</div>
  <div id="columna8"><a href="descargar.php?cod_estud='.$mostrar_codestudiantil.'" class="btn btn-primary">
                                  <i class="fas fa-download"></i></a> </div>

</div>
</div>
  <style>
#columna1, #columna2, #columna3, #columna4, #columna5, #columna6, #columna7, #columna8, #columna9, #columna10, #columna11{
    display: table-cell;
    border: 1px solid #000;
    vertical-align: middle;
    padding: 10px;
}


#contenido1{
				display: table-row;
				background-color: #0f6cbf;
        border-radius:10px;
        border: 2px solid #000;
			}
			#contenido2{
				display: table-row;
       border: 2px solid #000;
       border-radius:10px;
			}
</style>
  ';
    }
    $query->free();
  }

  


?>

<style type="text/css"> 
body{
  background-color: #3282b8;
}
#contenido2{
  background-color: #D6EAF8;
}

#ini{
	width:180px;
	padding:10px;
	border-radius:6px;
	background-color:#D6EAF8;
	margin-top: 10px;
	margin-left: 280px;
	margin-right: 0px;
	margin-bottom:50px;
	color: #0f6cbf;
	font-weight: 400;
    font-size: 17px;
    font-family: arial;
	}
	#ini:hover{
    color: #0f6cbf;
    background-color: white;
  }
</style>
<br><br><br>
<table width="1205px" height="40px">
		<td>
		<a href="pag_usuario.html"><button id="ini">Salir</button></a></td>
		</table>

	
</body>
</html>