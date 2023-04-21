<?php include_once("./header.php"); ?>
<head>
    <link rel="stylesheet" href="assets/css/estilos_vistas.css">
</head>
<main>
        <!--Formulario de registro de horas-->
        <div class="contenedor_formulario">
            <form action="php/registro_hum.php" method="POST">
                <h2><i class="fa-solid fa-smog"></i> Agregar Humedad</h2>
                <input type="number" name="hum_min" placeholder="Humedad Mínima en %" onKeyDown="if(this.value.length==3 && event.keyCode!=8) return false;" min="0" max="100">
                <input type="number" name="hum_max" placeholder="Humedad Máxima en %" onKeyDown="if(this.value.length==3 && event.keyCode!=8) return false;" min="0" max="100">
                <button>Guardar</button>
            </form>
        </div>
    </div>

</main>
<script src="assets/js/script_views.js"></script>
<?php
include_once("./footer.php"); 
?>