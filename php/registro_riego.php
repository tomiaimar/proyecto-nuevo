<?php
	session_start();
	include 'conexion_be.php';
	
	$lunes=$_POST['lunes'];
	$martes=$_POST['martes'];
	$miercoles=$_POST['miercoles'];
	$jueves=$_POST['jueves'];
	$viernes=$_POST['viernes'];
	$sabado=$_POST['sabado'];
	$domingo=$_POST['domingo'];
	$tiemporiego=$_POST['tiemporiego'];
	$horaini=$_POST['horaini'];
	$minini=$_POST['minini'];
	$dias=$_POST['Days'];
	$horainicio=$horaini.$minini;




	$consulta = "UPDATE `setriego` SET `lunes` = '$lunes', `martes` = '$martes', `miercoles` = '$miercoles', `jueves` = '$jueves' ,
		`viernes` = '$viernes' , `sabado` = '$sabado' , `domingo` = '$domingo' , `HoraInicio` = '$horainicio' , `HoraFin` = '$riegofin', 
		`SegundosRiego` = '$tiemporiego' WHERE `setriego`.`id` = 1;";
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