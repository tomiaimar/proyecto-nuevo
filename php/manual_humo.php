<?php 
include('./conexion_be.php');

mysqli_set_charset($conexion,"utf8");

if ($conexion) {
    $isChecked = $_POST['isChecked'];
    if ($isChecked == "true") {
        $humo = 1;
        $consulta = "UPDATE control1 SET `hume`=$humo  WHERE `id`='1'";
        $mensaje = "Humificador Encendido Correctamente.";
    } else if ($isChecked == "false") {
        $humo = 0;
        $consulta = "UPDATE control1 SET `hume`=$humo  WHERE `id`='1'";
        $mensaje = "Humificador Apagado Correctamente.";
    }
    
    $resultado = mysqli_query($conexion, $consulta);

    if ($resultado) {
        echo $mensaje;
    } else {
        echo "Error al Encender el Humificador, Intentelo de nuevo.";
    }
}

?>