<?php
    session_start();

    if (isset($_SESSION['usuario'])) {
        header("location: bienvenida.php");
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - IndoorFarm</title>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/estilos.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<?php
    if (isset($_GET['status']) && $_GET['status'] === "error") {
?>
<script type="text/javascript">
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El usuario o la contraseña son incorrectos, por favor vuelve a intentarlo.'
    });
</script>
<?php
    }
    if (isset($_GET['status']) && $_GET['status'] === "logout") {
?>
<script type="text/javascript">
    Swal.fire({
        icon: 'info',
        title: 'Sesión Cerrada',
        text: 'Sesión cerrada con éxito, gracias y hasta la próxima.'
    });
</script>
<?php
    }
    if (isset($_GET['status']) && $_GET['status'] === "req-login") {
?>
<script type="text/javascript">
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Debes iniciar sesión para poder navegar por la página.'
    });
</script>
<?php
    }
    if (isset($_GET['status']) && $_GET['status'] === "error-correo") {
?>
<script type="text/javascript">
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El correo ingresado ya está registrado, Intenta con otro correo.'
    });
</script>
<?php
    }
    if (isset($_GET['status']) && $_GET['status'] === "error-user") {
?>
<script type="text/javascript">
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'El usuario ingresado ya está registrado, Intenta con otro usuario.'
    });
</script>
<?php
    }
    if (isset($_GET['status']) && $_GET['status'] === "success-reg") {
?>
<script type="text/javascript">
    Swal.fire({
        icon: 'success',
        title: 'Felicitaciones!',
        text: 'Usuario Registrado Exitosamente.'
    });
</script>
<?php
    }
    if (isset($_GET['status']) && $_GET['status'] === "success-reg") {
?>
<script type="text/javascript">
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Error al Registrar el Usuario, Intentelo de nuevo.'
    });
</script>
<?php
    }
?>
    <main>
        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="php/login_usuario_be.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="contrasena" placeholder="Contraseña">
                    <button>Entrar</button>
                </form>

                <!--Register-->
                <form action="php/registro_usuario_be.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" name="nombre_completo" placeholder="Nombre completo">
                    <input type="text" name="correo" placeholder="Correo Electronico">
                    <input type="text" name="usuario" placeholder="Usuario">
                    <input type="password" name="contrasena" placeholder="Contraseña">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>
    </main>
    <script src="assets/js/script.js"></script>
</body>
</html>