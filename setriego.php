<?php include_once("./header.php"); ?>
<head>
    <link rel="stylesheet" href="assets/css/estilos_vistas.css">
</head>
<main>
        <!--Formulario de registro de horas-->
        <div class="contenedor_formulario">
            <form action="php/registro_riego.php" method="POST">
                <h2><i class="fa-solid fa-shower"></i> Agregar Horas de Riego</h2>
                <h3>Días de Riego</h3>
                <div class="weekDays-selector">
                  <input type="checkbox" name="lunes" id="weekday-mon" class="weekday" />
                  <label for="weekday-mon">Lun</label>
                  <input type="checkbox" name="martes" id="weekday-tue" class="weekday" />
                  <label for="weekday-tue">Mar</label>
                  <input type="checkbox" name="miercoles" id="weekday-wed" class="weekday" />
                  <label for="weekday-wed">Mie</label>
                  <input type="checkbox" name="jueves" id="weekday-thu" class="weekday" />
                  <label for="weekday-thu">Jue</label>
                  <input type="checkbox" name="viernes" id="weekday-fri" class="weekday" />
                  <label for="weekday-fri">Vie</label>
                  <input type="checkbox" name="sabado" id="weekday-sat" class="weekday" />
                  <label for="weekday-sat">Sab</label>
                  <input type="checkbox" name="domingo" id="weekday-sun" class="weekday" />
                  <label for="weekday-sun">Dom</label>
                </div>
                <h3>Tiempo de Inicio de Riego:</h3>
                <input type="number" name="horaini" placeholder="Hora Inicio" onKeyDown="if(this.value.length==3 && event.keyCode!=8) return false;" min="0" max="23">
                <input type="number" name="minini" placeholder="Minuto Inicio" onKeyDown="if(this.value.length==3 && event.keyCode!=8) return false;" min="0" max="59">
                <h3>Segundos de Riego</h3>
                <input type="number" name="tiemporiego" placeholder="Segundos de Riego" onKeyDown="if(this.value.length==2 && event.keyCode!=8) return false;" min="0" max="59">
                <button>Guardar</button>
            </form>
        </div>
    </div>

</main>
<script src="assets/js/script_views.js"></script>
<?php
include_once("./footer.php"); 
?>