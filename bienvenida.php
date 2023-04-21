<?php
include_once("./header.php");
include("./php/conexion_be.php");

$consValActual = "SELECT * FROM temp ORDER BY id DESC LIMIT 1;";
$consulta1 = "SELECT * FROM control1 ORDER BY id DESC LIMIT 1;";
$consLuzAuto = "SELECT * FROM setluz ORDER BY id DESC LIMIT 1;";
$consHumAuto = "SELECT * FROM sethumedad ORDER BY id DESC LIMIT 1;";
$consTempAuto = "SELECT * FROM settemp ORDER BY id DESC LIMIT 1;";
$consRiegoAuto = "SELECT * FROM setriego ORDER BY id DESC LIMIT 1;";
?>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/estilos_vistas.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<?php 
    if (isset($_GET['status']) && $_GET['status'] === "success") {
?>
<script type="text/javascript">
    Swal.fire({
        icon: 'success',
        title: 'Felicidades!',
        text: 'La carga de datos se realizó con exito!.'
    });
</script>
<?php
    }
    if (isset($_GET['status']) && $_GET['status'] === "error") {
?>
<script type="text/javascript">
    Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Algo salió mal en la carga de datos, por favor vuelve a intentarlo.'
    });
</script>
<?php
    }
    if (isset($_GET['status']) && $_GET['status'] === "bienvenida") {
?>
<script type="text/javascript">
    Swal.fire({
        icon: 'info',
        title: 'Bienvenid@',
        text: 'Felicitaciones y que lo disfrutes.'
    });
</script>
<?php
    }
?>
<main>
    <article>
        <!--Formulario de registro de horas-->
        <div class="contenedor_formulario">
            <form>
                <h3>ESTADO ACTUAL:</h3>
                <?php 
                    $resultadoValActual = mysqli_query($conexion,$consValActual);
 
                    while ($row=mysqli_fetch_assoc($resultadoValActual)) {
                ?>
                <p>
                    <div class="planta-container">
                      <p></p><i class="fa-solid fa-cannabis icono-planta"></i><p class="mensaje-planta"> El estado es óptimo</p>
                    </div>
                </p>
                <p class="temperatura"><i class="fa-solid fa-temperature-three-quarters fa-xl"></i>  Temperatura: <?php echo $row["Temp"];?>°C</p>
                <p class="humedadA"><i class="fa-sharp fa-solid fa-droplet fa-xl"></i>  Humedad en Ambiente: <?php echo $row["hum"];?>%</p>
                <p class="humedadT"><i class="fa-solid fa-earth-americas fa-xl"></i>  Humedad en Tierra: <?php echo $row["humt"];?>%</p>
                <?php } ?>
            </form>
             <form>
                <h3>AUTOMATICO:</h3>
                <?php 
                    $resultadoLuzAuto = mysqli_query($conexion, $consLuzAuto);
                    while ($row=mysqli_fetch_assoc($resultadoLuzAuto)) {
                ?>
                <p><i class="fa fa-lightbulb-o"></i>  Luz se enciende: <?php echo "{$row["horaini"][0]}";echo "{$row["horaini"][1]}"; ?>:<?php echo "{$row["horaini"][2]}";echo "{$row["horaini"][3]}"; ?> hs</p>
                <p><i class="fa fa-lightbulb-o"></i>  Luz se apaga: <?php echo "{$row["horafin"][0]}"; echo "{$row["horafin"][1]}"; ?>:<?php echo "{$row["horafin"][2]}"; echo "{$row["horafin"][3]}"; ?> hs</p>
                <?php
                    }
                    $resultadoTempAuto= mysqli_query($conexion, $consTempAuto);
                    while($row=mysqli_fetch_assoc($resultadoTempAuto))  {?>
                <p><i class="fa-solid fa-fan"></i> Temperatura Máx.: <?php echo "{$row["tempmax"]}";?>°C</p>
                <?php 
                    }
                    $resultadoHumAuto= mysqli_query($conexion, $consHumAuto);
                    while($row=mysqli_fetch_assoc($resultadoHumAuto))  {
                ?>
                <p><i class="fa-solid fa-smog"></i> Humedad Mín.: <?php echo "{$row["min"]}";?>%   Máx.: <?php echo "{$row["max"]}"; ?>%</p>
                <?php
                    }
                    $resultadoRiegoAuto= mysqli_query($conexion, $consRiegoAuto);
                                                
                    while($row=mysqli_fetch_assoc($resultadoRiegoAuto))  {
                        $lunes=$row["lunes"];
                        $martes=$row["martes"];
                        $miercoles=$row["miercoles"];
                        $jueves=$row["jueves"];
                        $viernes=$row["viernes"];
                        $sabado=$row["sabado"];
                        $domingo=$row["domingo"];
                        if ($lunes=="on") $lunes="Lun";
                        if ($martes=="on") $martes="Mar";
                        if ($miercoles=="on") $miercoles="Mie";
                        if ($jueves=="on") $jueves="Jue";
                        if ($viernes=="on") $viernes="Vie";
                        if ($sabado=="on") $sabado="Sab";
                        if ($domingo=="on") $domingo="Dom";
                ?>
                <p><i class="fa-solid fa-shower"></i>  Riego se enciende:  <?php echo "{$row["HoraInicio"][0]}"; echo "{$row["HoraInicio"][1]}"; ?>:<?php echo "{$row["HoraInicio"][2]}"; echo "{$row["HoraInicio"][3]}"; ?> hs  durante <?php echo "{$row["SegundosRiego"]}";?> seg.</p>
                <p><i class="fa-solid fa-shower"></i>  Días Riego: <?php echo "$lunes";?>  <?php echo "$martes"; ?>  <?php echo "$miercoles"; ?>  <?php echo "$jueves"; ?>  <?php echo "$viernes"; ?>  <?php echo "$sabado"; ?>  <?php echo "$domingo"; ?></p>
                <?php
                    }
                ?>
            </form>
            <form id="form-manual" action="php/manual_cooler.php" method="POST">
                <h3>MANUAL:</h3>
                <p>
                    <div class="container">
                        <label class="toggle">
                            <input id="cooler-manual" class="toggle-checkbox" type="checkbox">
                            <div class="toggle-switch"></div>
                            <span class="toggle-label" id="cooler-manual-msj"><i class="fa-solid fa-fan fa-xl"></i>  Encender Cooler</span>
                        </label>
                    </div>
                </p>
                <p>
                    <div class="container">
                        <label class="toggle">
                            <input id="humo-manual" class="toggle-checkbox" type="checkbox">
                            <div class="toggle-switch"></div>
                            <span class="toggle-label" id="humo-manual-msj"><i class="fa-solid fa-smog fa-xl"></i>  Encender Humificador</span>
                        </label>
                    </div>
                </p>
                <p>
                    <div class="container">
                        <label class="toggle">
                            <input id="riego-manual" class="toggle-checkbox" type="checkbox">
                            <div class="toggle-switch"></div>
                            <span class="toggle-label" id="riego-manual-msj"><i class="fa-solid fa-shower fa-xl"></i>  Encender Riego</span>
                        </label>
                    </div>
                </p>
            </form>
        </div>
    </article>
</main>
<script src="assets/js/script_home.js"></script>
<?php
include_once("./footer.php"); 
?>