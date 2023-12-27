<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Click Document</title>
	<link href="estilos.css" rel="stylesheet" type="text/css">
	 <link rel="shortcut icon" href="img/queen.png">
</head>

<body>

	
	<center>
	<br>
	<br>
	<br>

  <?php
  	include('conectar.php');
      
      if(isset($_POST['enviar1'])){

  $nombres= $_POST['nombres_edit'];
  $apellidos= $_POST['ape_edit'];
  $f_nacimiento= $_POST['fnac_edit'];
  $codigo_estudiante= $_POST['cod_edit'];
  $telefono= $_POST['tel_edit'];
  $email= $_POST['email_edit'];
  $codigo_e= $_POST['codigo_e'];
  $ct_tutorial= $_POST['cttutorial'];
  $descripcion=$_POST['descripcion'];

  $sql_c= "UPDATE registro_estudiantes SET nombres_e = '$nombres', apellidos_e = '$apellidos', f_nacimiento_e = '$f_nacimiento', cod_estudiantil = '$codigo_estudiante', telefono_e = '$telefono', email_e = '$email', ct_tutorial = '$ct_tutorial', descripcion = '$descripcion' WHERE cod_estudiantil = '$codigo_e'";

  $resultado_c = mysqli_query($conexion, $sql_c);

  if ($resultado_c) {
  	echo "<script lenguaje= 'JavaScript'>
 alert('Datos actualizados correctamente');
 window.location = 'other_op.php';
</script>";
  }else{
    echo "<script lenguaje= 'JavaScript'>
 alert('ERROR datos no actualizados');
 window.location = 'editar.php';
</script>";
  }
  mysqli_close($conexion);

      }else{

   $cod_estudiantil = $_GET['cod_estud']?? null;
   $sql_e = "SELECT * FROM registro_estudiantes WHERE cod_estudiantil = '$cod_estudiantil'";
   $resultado = mysqli_query($conexion, $sql_e);

   $fila = mysqli_fetch_assoc($resultado);

   $nombres= $fila['nombres_e'];
   $apellidos= $fila['apellidos_e'];
   $f_nacimiento= $fila['f_nacimiento_e'];
   $codigo_estudiantil= $fila['cod_estudiantil'];
   $telefono= $fila['telefono_e'];
   $email= $fila['email_e'];
   $ct_tutorial_r= $fila['ct_tutorial'];
   $descripcion= $fila['descripcion'];

    ?>
	
	<table id="fr" width="1205px" height="80px">
		<td id="tabladeg">
		<div id="formlog">
	
		
		<form action="<?=$_SERVER['PHP_SELF']?>" method="POST" id="form_edit">
			<br>
			<center><h1>Editar registros</h1></center>
			
		<label>Nombres: </label>
		<input type="text" id="nombre" name="nombres_edit" value="<?php echo $nombres; ?>"><br><br>

		<label>Apellidos: </label>
		<input type="text" id="apellido" name="ape_edit" value="<?php echo $apellidos; ?>"><br><br>

		<label>Fecha de nacimiento: </label>
		<input type="date" id="fecha" name="fnac_edit" value="<?php echo $f_nacimiento; ?>"><br><br>

		<label>Codigo estudiantíl: </label>
		<input type="number" id="cod" name="cod_edit" value="<?php echo $codigo_estudiantil; ?>"><br><br>

		<label>Descripción: </label>
		<input type="text" id="apellido" name="descripcion" value="<?php echo $descripcion; ?>"><br><br>

		<label>Telefono: </label>
		<input type="number" id="telefono" name="tel_edit" value="<?php echo $telefono; ?>"><br><br>

		<label>Email: </label>
		<input type="email" id="email" name="email_edit" value="<?php echo $email; ?>">

		<input type="hidden" name="codigo_e" value="<?php echo $codigo_estudiantil; ?>">

		<p id="ciudad">Ct Tutorial: <select id="ciudad" name="cttutorial" value="<?php echo $ct_tutorial_r; ?>" required>
			<option>San Juan Nepomuceno</option><option>Carmen de Bolivar</option><option>Magangué</option><option>Mompox</option><option>Lorica</option><option>Cereté</option>
			</select></p>

		 <input type="submit" name="enviar1" value="Actualizar" id="ingresar">  
		</form>
		<input type="button" id="volver" onclick="history.back()" value="Volver" name="volver">
	</div>
		</td>
		

	
		<style>
      body{
      	background-color: #3282b8;
      }
      #tabladeg{
      	background-color: #3282b8;
      }

			#apellido{
				margin-right: 200px;
			}

			#nombre{
				margin-right: 200px;
			}
			#ciudad{
				margin-right: 85px;
			}
			#email{
				margin-right: 217px;
			}


			#telefono{
				margin-right: 200px;
			}
              
            #cod{
            	margin-right: 136px;
            }  

			#fecha{
				margin-right: 154px;
			}

			#form_edit{
				font-family: arial;
				font-size: 16px;
				text-align: center;
			}
	     
			#rol1{
				margin-left: 40px;
				text-align: 18px;
			}
			
			#usu1{
				margin-left: 40px;
				text-align: 18px;
				font-weight: bolder;
			}
			
			#contra1{
				margin-left: 40px;
				text-align: 18px;
				font-weight: bolder;
			}
			#apellido1{
				margin-left: 40px;
			}

			
		#formlog{
		width: 1300;
		height: 1300;
		background-color: #3282b8;
		margin-top: 0px;
		margin-bottom: 50px;
	}
	
	#ingresar{
		width:180px;
	padding:10px;
	border:2px solid #0016b0;
	border-radius:6px;
	background-color:#0f6cbf;
	margin-top: 10px;
	margin-left: 0px;
	margin-right: 0px;
	margin-bottom: 50px;
	color: #ffffff;
	font-weight: 400;
    font-size: 15px;
	}
	#ingresar:hover{
    color: #0f6cbf;
    background-color: white;
  }
  #volver{
		width:180px;
	padding:10px;
	border:2px solid #0016b0;
	border-radius:6px;
	background-color:#D6EAF8;
	margin-top: 10px;
	margin-left: 250px;
	margin-right: 0px;
	margin-bottom: 0px;
	color: #0f6cbf;
	font-weight: 400;
    font-size: 15px;
	}
	#volver:hover{
    color: #ffffff;
    background-color: #0f6cbf;
  }
	
	form {
  width: 700px;
  background: #D6EAF8 ;
  margin: 0 auto;
  border-radius: 10px;
 
  justify-content: center;
  <?php
}
  ?>
		</style>
		</table>
		
		
	</center>

</body>
</html>