<?php
	session_start();
	include 'conexion_be.php';

	$temp_max=$_POST['temp_max'];
   
	$consulta = "UPDATE `settemp` SET `tempmax` = '$temp_max'  WHERE `settemp`.`id` = 1;";
	$validar_carga = mysqli_query($conexion, $consulta);

	if ($validar_carga) {

		header("location: ../bienvenida.php?status=success");
		exit;
	} else {
		echo '
			<script>
				window.location = "../bienvenida.php?status=error"
			</script>
		';
		exit;
	}
?>