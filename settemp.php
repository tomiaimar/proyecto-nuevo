<?php include_once("./header.php"); ?>
<head>
    <link rel="stylesheet" href="assets/css/estilos_vistas.css">
</head>
<main>
        <!--Formulario de registro de horas-->
        <div class="contenedor_formulario">
            <form action="php/registro_temp.php" method="POST">
                <h2><i class="fa-solid fa-fan"></i> Agregar Temperatura Ambiente</h2>
                <h3>Temperatura Maxima en %</h3>
                <input type="number" name="temp_max" placeholder="Temp Max %" onKeyDown="if(this.value.length==3 && event.keyCode!=8) return false;" min="0" max="100">
                <button>Guardar</button>
            </form>
        </div>
    </div>

</main>
<script src="assets/js/script_views.js"></script>
<?php
include_once("./footer.php"); 
?>