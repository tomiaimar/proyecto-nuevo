<?php 
include('./conexion_be.php');

mysqli_set_charset($conexion,"utf8");

if ($conexion) {
    $isChecked = $_POST['isChecked'];
    if ($isChecked == "true") {
        $riego = 1;
        $consulta = "UPDATE control1 SET `riego`=$riego  WHERE `id`='1'";
        $mensaje = "Riego Encendido Correctamente.";
    } else if ($isChecked == "false") {
        $riego = 0;
        $consulta = "UPDATE control1 SET `riego`=$riego  WHERE `id`='1'";
        $mensaje = "Riego Apagado Correctamente.";
    }

    $resultado = mysqli_query($conexion, $consulta);
    
    if ($resultado) {
        echo $mensaje;
    } else {
        echo "Error al Encender el Riego, Intentelo de nuevo.";
    }
}

?>