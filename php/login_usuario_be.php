<?php
	session_start();
	include 'conexion_be.php';

	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	// Encriptar contraseña
	$contrasena = hash('sha512', $contrasena);

	$consulta = "SELECT * FROM usuarios WHERE usuario ='$usuario' AND contrasena ='$contrasena'";
	$validar_login = mysqli_query($conexion, $consulta);

	if (mysqli_num_rows($validar_login) > 0) {
		$_SESSION['usuario'] = $usuario;
		header("location: ../bienvenida.php?status=bienvenida");
		exit;
	} else {
		echo '
			<script>
				window.location = "../index.php?status=error"
			</script>
		';
		exit;
	}
?>