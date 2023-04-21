<?php
	session_start();

	if (!isset($_SESSION['usuario'])) {
		echo '
			<script>
				window.location = "index.php?status=req-login"
			</script>
		';
		session_destroy();
		exit;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>IndoorFarm</title>
	<link rel="stylesheet" href="assets/css/estilos_home.css">
	<script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
</head>
<body>
	<header>
        <div class="header__superior">
            <div class="logo">
                <img src="assets/images/logo-indoorfarm.png" alt="">
            </div>
            <!-- <div class="search">
                <input type="search" placeholder="¿Qué deseas buscar?">
            </div> -->
        </div>

        <div class="container__menu">

            <div class="menu">
                <input type="checkbox" id="check__menu">
                <label for="check__menu" id="label__check">
                    <i class="fas fa-bars icon__menu"></i>
                </label>
                <nav>
                    <ul>
                        <li><a href="./bienvenida.php" id="selected"></a></li>
                        <li><a href="#">Servicios</a>
                            <ul>
                                <li><a href="./setluz.php"><i class="fa fa-lightbulb-o"></i>  Hora de Luz</a></li>
                                <li><a href="./setriego.php"><i class="fa-solid fa-shower"></i>  Hora de Riego</a></li>
                                <li><a href="./sethum.php"><i class="fa-solid fa-smog"></i>  Humedad</a></li>
                                <li><a href="./settemp.php"><i class="fa-solid fa-fan"></i>  Temperatura</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Tienda - WIP</a></li>
                        <li><a href="#">Politicas</a></li>
                        <li><a href="#">Contactos</a></li>
                        <li><a href="./php/cerrar_sesion.php"><i class="fa-solid fa-power-off"></i>&nbsp; Cerrar Session</a></li>
                    </ul>
                </nav>
            </div>

        </div>

    </header>
</body>
</html>