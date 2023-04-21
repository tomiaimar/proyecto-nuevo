<?php
	session_start();
	include 'conexion_be.php';
	
	$hum_min=$_POST['hum_min'];
	$hum_max=$_POST['hum_max'];


   
	$consulta = "UPDATE `sethumedad` SET `min` = '$hum_min', `max` = '$hum_max'  WHERE `sethumedad`.`id` = 1;";
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