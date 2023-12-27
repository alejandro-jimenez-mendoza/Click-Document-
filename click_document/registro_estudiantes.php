<?php  

require_once 'conectar.php';

$nombres_r =$_POST['nombres_r'];
$ape_r =$_POST['ape_r'];
$f_naci_r =$_POST['f_naci_r'];
$cod_estu_r =$_POST['cod_estu_r'];
$descripcion_r =$_POST['descripcion_r'];
$telefono_r =$_POST['telefono_r'];
$email_r =$_POST['email_r'];
$cttutorial =$_POST['cttutorial'];

$query_r = "INSERT INTO registro_estudiantes(nombres_e, apellidos_e, f_nacimiento_e, cod_estudiantil, descripcion, telefono_e, email_e, ct_tutorial) VALUES('$nombres_r','$ape_r','$f_naci_r', '$cod_estu_r', '$descripcion_r', '$telefono_r', '$email_r','$cttutorial') ";	
$ejecutar = mysqli_query($conexion, $query_r);

if($ejecutar){

echo '<script>
alert("Datos almacenados exitosamente");
window.location = "menu_admin.html";
</script>';	
}
else {
	
echo '<script>
alert("Ha ocurrido un error, intente nuevamente");
window.location = "admin.php";
</script>';	
}




?>