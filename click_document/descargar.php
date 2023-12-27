<?php
include "conectar.php";

$cod_estudiantil = $_GET['cod_estud'];

// Buscar el archivo en la base de datos
$sql3 = "SELECT * FROM registro_estudiantes WHERE cod_estudiantil = '$cod_estudiantil'";
$resultado = mysqli_query($conexion, $sql3);

if (mysqli_num_rows($resultado) == 1) {
    $fila = mysqli_fetch_assoc($resultado);
    $file_name = $fila['documento'];
    $ruta_archivo = "img_db/" .$file_name;

    // Verificar que el archivo exista en el servidor
    if (file_exists($ruta_archivo)) {
        // Enviar el archivo al navegador
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' .$file_name. '"');
        readfile($ruta_archivo);
    } else {
        echo "El archivo no existe en el servidor.";
    }
} else {
    echo "El archivo no se encontró en la base de datos.";
}

?>