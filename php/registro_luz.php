<?php
	session_start();
	include 'conexion_be.php';

	$horaini=$_POST['horaini'];
	$minini=$_POST['minini'];
	$horafin=$_POST['horafin'];
	$minfin=$_POST['minfin'];
	$inicio=$horaini.$minini;
	$fin=$horafin.$minfin;
   
	$consulta = "UPDATE `setluz` SET `horaini` = '$inicio', `horafin` = '$fin' WHERE `setluz`.`id` = 1;";

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