<?php
date_default_timezone_set("America/Argentina/Buenos_Aires");
$current_time = date('d/m/Y H:i:s');
?>
<head>
  <link rel="stylesheet" href="assets/css/estilos_home.css">
</head>
<footer>
  <div class="footer">
  <?php
    include("./php/conexion_be.php");
    $consulta = "SELECT * FROM temp ORDER BY id DESC LIMIT 1;";
    $resultado = mysqli_query($conexion, $consulta);
    while($row=mysqli_fetch_assoc($resultado)) {
  ?>
    <div>Última actualización: <?php echo "{$row["fecha"]}   "; echo $row["hora"]?> </div>
  <?php } ?>
  <div>&copy; IndoorFarm | <?php echo 'DIA Y HORA ACTUAL: '. $current_time; ?> <span id="current-time"></span></div>
</div>
</footer>