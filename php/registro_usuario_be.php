<?php

	include 'conexion_be.php';

	$nombre_completo = $_POST['nombre_completo'];
	$correo = $_POST['correo'];
	$usuario = $_POST['usuario'];
	$contrasena = $_POST['contrasena'];

	// Encriptar contraseña
	$contrasena = hash('sha512', $contrasena);

	$consulta = "INSERT INTO usuarios(nombre_completo, correo, usuario, contrasena) 
			VALUES ('$nombre_completo', '$correo', '$usuario', '$contrasena')";

	// Verificar que el correo no se repita en la db
	$validar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo ='$correo' ");
	if (mysqli_num_rows($validar_correo) > 0) {
		echo '
			<script>
				window.location = "../index.php?error-correo"
			</script>
		';
		exit();
	}

	// Verificar que el usuario no se repita en la db
	$validar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario ='$usuario' ");
	if (mysqli_num_rows($validar_usuario) > 0) {
		echo '
			<script>
				window.location = "../index.php?error-user"
			</script>
		';
		exit();
	}

	$ejecutar = mysqli_query($conexion, $consulta);

	if ($ejecutar) {
		echo '
			<script>
				window.location = "../index.php?status=success-reg"
			</script>
		';
	} else {
		echo '
			<script>
				window.location = "../index.php?status=error-reg"
			</script>
		';
	}

	mysqli_close($conexion);	

?>