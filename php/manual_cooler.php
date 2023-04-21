<?php 
include('./conexion_be.php');

mysqli_set_charset($conexion,"utf8");

if ($conexion) {
    $isChecked = $_POST['isChecked'];
    if ($isChecked == "true") {
        $cooler = 1;
        $consulta = "UPDATE control1 SET `cooler`=$cooler  WHERE `id`='1'";
        $mensaje = "Cooler Encendido Correctamente.";
    } else if ($isChecked == "false") {
        $cooler = 0;
        $consulta = "UPDATE control1 SET `cooler`=$cooler  WHERE `id`='1'";
        $mensaje = "Cooler Apagado Correctamente.";
    }
    
    $resultado = mysqli_query($conexion, $consulta);
    
    if ($resultado) {
        echo $mensaje;
    } else {
        echo "Error al Encender el Cooler, Intentelo de nuevo.";
    }
}

?>