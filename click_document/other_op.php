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

<script type="text/javascript">
function Confirmation() {
 
	if (confirm('Esta seguro de eliminar el registro?')==true) {
	    //alert('El registro ha sido eliminado correctamente!!!');
	    return true;
	}else{
	    //alert('Canceló la eliminacion');
	    return false;
	}
}
</script>

<body>
	
	<center>
	<br>
  <br>
	<br>

  <?php
   echo '
<html>
<br>
<form action="other_op.php" action="descargar.php" action="eliminar.php" method="POST">
			<br>
			
		<p id="consult">Digite codigo del estudiante a consultar: <input id="text1" type="number" name="cod_estudiantil" size="40"  placeholder="ejemplo: 7522120009" required></p>
		<br>
		<input id="ini3" type="submit" value="Consultar">  <input type="button" id="volver" onclick="history.back()" value="Volver" name="volver">
<br>
<br>

		
</form>
</html>

  ';

 
  $conexion = mysqli_connect("localhost", "root", "", "sdg_estudiantes");
  $cod_estudiantil = $_POST['cod_estudiantil']?? null;
  $query = mysqli_query($conexion, ("SELECT * FROM registro_estudiantes WHERE cod_estudiantil='$cod_estudiantil'"));




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
    

    echo'
<br>
        <br>
        <div id="contenedor">
		
  <div id="contenido1">
  <div id="columna1">Nombres</div>
  <div id="columna2">Apellidos</div>
  <div id="columna3">Fecha de nacimiento</div>
  <div id="columna4">Codigo estudiantil</div>
  <div id="columna4">Descripción</div>
  <div id="columna5">Telefono</div>
  <div id="columna6">Email</div>
  <div id="columna7">Centro tutorial</div>
  <div id="columna8">Documento</div>
  <div id="columna9">Opcion 1</div>
  <div id="columna10">Opcion 2</div>
  <div id="columna11">Opcion 3</div>
  </div>
<div id="contenido2">
        <div id="columna1">'.$mostrar_nombres.'</div>
  <div id="columna2">'.$mostrar_apellidos.'</div>
  <div id="columna3">'.$mostrar_fnacimiento.'</div>
  <div id="columna4">'.$mostrar_codestudiantil.'</div>
  <div id="columna4">'.$mostrar_descripcion.'</div>
  <div id="columna5">'.$mostrar_telefono.'</div>
  <div id="columna6">'.$mostrar_email.'</div>
  <div id="columna7">'.$mostrar_cttutorial.'</div>
  <div id="columna8"><a href="descargar.php?cod_estud='.$mostrar_codestudiantil.'" class="btn btn-primary">
                                  <i class="fas fa-download"></i></a> </div>

  <div id="columna9"><a class="fcc-btn" href="editar.php?cod_estud='.$mostrar_codestudiantil.'"><p id="ini1">Editar</p></a> </div>
  <div id="columna10"><a class="fcc-btn" onclick="return Confirmation()" href="eliminar.php?cod_estud='.$mostrar_codestudiantil.'"><p id="ini1">Eliminar</p></a></div>
  <div id="columna11"><a class="fcc-btn" href="agregar.php?cod_estud='.$mostrar_codestudiantil.'"><p id="ini1">Agregar documento</p></a> </div>
        </div>
    </div>	

    ';
  }
  $query->free();
}
   mysqli_close($conexion);
  
  ?>

	
	
	
		
		<style>
			#columna1, #columna2, #columna3, #columna4, #columna5, #columna6, #columna7, #columna8, #columna9, #columna10, #columna11{
    display: table-cell;
    border: 1px solid #000;
    vertical-align: middle;
    padding: 10px;
}
#contenido1{
				display: table-row;
				background-color: grey;

			}
			#contenido2{
				display: table-row;
				background: #D6EAF8 ;

			}

			#volver{
		width:180px;
	padding:9px;
	border:2px solid #0016b0;
	border-radius:6px;
	background-color:#3282b8;
	margin-top: 10px;
	margin-left: 50px;
	margin-right: 0px;
	margin-bottom: 0px;
	color: #ffffff;
	font-weight: 400;
    font-size: 17px;
    font-family:arial;
	}
	#volver:hover{
    color: #0f6cbf;
    background-color: white;
  }
		#consult{
		margin-left: 40px;
				font-size: 17px;
				font-weight: bolder;
				font-family:arial;
	}
#ini3{
	width:180px;
	padding:9px;
	border:2px solid #0016b0;
	border-radius:6px;
	background-color:#3282b8;
	margin-top: 0px;
	margin-left: 30px;
	margin-right: 0px;
	margin-bottom:50px;
	color: #ffffff;
	font-weight: 400;
    font-size: 17px;
    font-family:arial;
	}
	#ini3:hover{
    color: #0f6cbf;
    background-color: white;
  }

			#columna1, #columna2, #columna3, #columna4, #columna5, #columna6, #columna7, #columna8, #columna9, #columna10, #columna11{
    display: table-cell;
    border: 1px solid #000;
    vertical-align: middle;
    padding: 10px;
}
	     
			#contenedor{
    border-radius: 7px;
		display: table;
    border: 2px solid #000;
    width: 333px;
    text-align: center;
    margin: 0 auto;
    font-family: arial;
    font-size: 16px;
			}
			#contenido1{
				background-color: #0f6cbf;
				color: white;
			}
			
			#contenido{
				display: table-row;
			}
			
			#usuario1{
				margin-left: 40px;
				font-size: 18px;
				font-weight: bolder;
			}
			#contrasena1{
				margin-left: 40px;
				font-size: 18px;
				font-weight: bolder;
			}
		#formlog{
		width: 1300;
		height: 1300;
		background: #FFFFFF;
		margin-top: 50px;
		margin-bottom: 50px;
	}
	
	#guardar{
		width:180px;
	padding:10px;
	border:2px solid #0016b0;
	border-radius:6px;
	background-color:#1883ba;
	margin-top: 10px;
	margin-left: 250px;
	margin-right: 0px;
	margin-bottom: 50px;
	color: #ffffff;
	font-weight: 400;
    font-size: 15px;
	}
	#guardar:hover{
    color: #1883ba;
    background-color: #ffffff;
  }
	
	#ini{
	width:180px;
	padding:10px;
	border:2px solid #0016b0;
	border-radius:6px;
	background-color:#0f6cbf;
	margin-top: 10px;
	margin-left: 250px;
	margin-right: 0px;
	margin-bottom:50px;
	color: #ffffff;
	font-weight: 400;
    font-size: 18px;
	}
	#ini:hover{
    color: #0f6cbf;
    background-color: white;
  }
	
	form {
  width: 700px;
  background: #D6EAF8 ;
  margin: 0 auto;
  border-radius: 10px;
 
  justify-content: center;
  
}
body{
	background-color: #3282b8;
}
		</style>
		
		
	</center>
	
</body>
</html>