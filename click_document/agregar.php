<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Click Document</title>
	<link href="estilos.css" rel="stylesheet" type="text/css">
	 <link rel="shortcut icon" href="img/queen.png">
</head>

<?php
$cod_estudiantil = $_GET['cod_estud']?? null;

?>

<body>
	
<center>

		<br>
		<br>
		<br>
		<br>
		<br>
	
	<table width="800px" height="420px" id="table1">

	<tr>
		<td>
			<br>
		  <img id="icono" width="30px" src="img/logo_word.png">

		</td>
		<td>
			<br>
			<a href="img/plantilla.docx" id="descargar" download="descargar-plantilla">Plantilla_certificado.docx</a>
		</td>

	</tr>

	
		
       <td>
       	<form id="formsubir" data-toggle="validator" action="subir.php" action="descargar.php" method="post" role="form" enctype="multipart/form-data">
       		<br>
       	<p id="direccion">Codigo del estudiante a subir: <input type="number" name="codestudiantil" size="40" placeholder="Escriba el codigo del estudiante" required></p>


		
        <label>Subir archivo</label>
		<input id="subir" type="file" name="file">
		<br><br>
         
		<button id="button" type="submit">Subir</button>
		<br>
		<br>

	</form>
       </td> 

	
		</table>
	
		<style>

			#subir{
				background-color: #0f6cbf;
				font-family: arial;
			}

			#direccion{
				margin-right: 3px;

			}

			#button{
				margin-right: 300px;
				background-color: #0f6cbf;
				color: white;
				border-radius: 3px;
				font-size: 16px;
				font-family: arial;
			}

			#descargar{
				margin-right: 320px;
				margin-left: 5px;
				margin-top: 200px;
				font-family: arial;
				font-size: 17px;

			}

			#icono{
				margin-left: 390px;
			}

			#formsubir{
				margin-bottom: 35px;
				width: 400px;
				margin-right: 0px;
				margin-left: 50px;
				background-color: white;
				border-radius: 10px;
				text-align: center;
				font-family: arial;
				font-size: 16px;
			}
	     
	    .fcc-btn {
	     	text-decoration: none;
	     	text-align: center;
	     }
body{
	margin: 0 auto;
    background-color: #3282b8;
}

			
	
	#table1 {
  background: #D6EAF8 ;
  margin: 0 auto;
  border-radius:10px;
 
 
  
}
		</style>
		
		
		


	</center>
</body>
</html>