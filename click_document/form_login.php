<?php

session_start();

include 'conectar.php';

$correo_g= $_POST['correo_g'];
$contrasena_g = $_POST['contrasena_g'];
$dependencia_g = $_POST['dependencia_g'];

date_default_timezone_set("America/Bogota");
$fyh_ingreso= date("y-m-d h:i:s:a");

if($dependencia_g == ("Administrador")) {

$validar_login = mysqli_query($conexion, "SELECT * FROM  r_admin WHERE correo_electronico = '$correo_g' and contrasena_a = '$contrasena_g'");
$ingresar_bitacora = mysqli_query($conexion, "INSERT INTO bitacora_ingreso (correo_electronico_b, dependencia_b, hora_b) VALUES ('$correo_g', '$dependencia_g', '$fyh_ingreso') ");

   if(mysqli_num_rows($validar_login) > 0){ 
   //$_SESSION['correo_electronico'] = $log_correo;
   echo '
  <script>
     alert("Datos correctos");
     window.location = "menu_admin.html";
  </script>
   ';
   exit;
}else{
   echo '
  <script>
     alert("Usuario o contraseña incorrectos");
     window.location = "index.html";
  </script>
   ';
   exit;
}
exit;

} else if ($dependencia_g == ("Estudiante")) {

$validar_login = mysqli_query($conexion, "SELECT * FROM  registro_estudiantes WHERE email_e = '$correo_g' and cod_estudiantil = '$contrasena_g'");
$ingresar_bitacora = mysqli_query($conexion, "INSERT INTO bitacora_ingreso (correo_electronico_b, dependencia_b, hora_b) VALUES ('$correo_g', '$dependencia_g', '$fyh_ingreso') ");

            if(mysqli_num_rows($validar_login) > 0){ 
               echo '
            <script>
             alert("Datos correctos");
             window.location = "pag_usuario.html";
            </script>
                     ';
            exit;
            }else{
             echo '
            <script>
             alert("Usuario o contraseña incorrectos");
             window.location = "index.html";
            </script>
                ';
                exit;
                }
                exit;

} 


?>