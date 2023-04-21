<?php include_once("./header.php"); ?>
<head>
    <link rel="stylesheet" href="assets/css/estilos_vistas.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<main>
        <!--Formulario de registro de horas-->
        <div class="contenedor_formulario">
            <form action="php/registro_luz.php" method="POST">
                <h2><i class="fa fa-lightbulb-o"></i> Agregar Horas de Luz</h2>
                <h3>Inicio</h3>
                <input type="number" id="horaini" name="horaini" placeholder="Hora de Inicio" onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;" min="0" max="23">
                <input type="number" id="minini" name="minini" placeholder="Minutos de Inicio" onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;" min="0" max="59">
                <h3>Fin</h3>
                <input type="number" id="horafin" name="horafin" placeholder="Hora de Fin" onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;" min="0" max="23">
                <input type="number" id="minfin" name="minfin" placeholder="Minutos de Fin" onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;" min="0" max="59">
                <button id="submitSetLuz">Guardar</button>
            </form>
        </div>
    </div>

</main>
<script src="assets/js/script_views.js"></script>
<?php
include_once("./footer.php"); 
?>