<?php

include 'conectar.php';

$file_name = basename($_FILES['file']['name']);
$file_tmp = $_FILES['file']['tmp_name'];
$route =  "img_db/";
$codestudiantil = $_POST['codestudiantil']?? null;
$extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
if ($extension == "pdf" || $extension == "doc" || $extension == "docx" || $extension == "jpg" || $extension == "png" || $extension == "jpeg") {
    
if (move_uploaded_file($_FILES["file"]["tmp_name"], $route . $file_name)) {
     include "conectar.php";

     $sql = "UPDATE registro_estudiantes SET documento = ('$file_name') WHERE cod_estudiantil = '$codestudiantil'";
 $result = mysqli_query($conexion, $sql);

 if ($result) {
      echo "<script lenguaje= 'JavaScript'>
 alert('Archivo subido');
 window.location = 'other_op.php';
</script>";
 } else{
     echo "<script lenguaje= 'JavaScript'>
alert('Error al subir el archivo');
window.location = 'agregar.php';
</script>";
 }

} else{
     echo "<script lenguaje= 'JavaScript'>
alert('Error al subir el archivo)';
window.location = 'agregar.php';
</script>";
}

} else{
     echo "<script lenguaje= 'JavaScript'>
alert('Solo se permiten archivos PDF, DOC, DOCX JPG, JPEG, PNG');
window.location = 'agregar.php';
</script>";
}



?>