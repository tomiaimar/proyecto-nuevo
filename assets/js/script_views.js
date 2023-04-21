$(document).ready(function() { 
  $('#submitSetLuz').click(function() {
    var horaIni = document.getElementById("horaini").value;
    var horaFin = document.getElementById("horafin").value;
    var minIni = document.getElementById("minini").value;
    var minFin = document.getElementById("minfin").value;
     
     if (horaIni === horaFin && minIni === minFin) {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Los horarios son iguales, por favor vuelve a ingresar datos validos.'
      });
      event.preventDefault();
    }
  });
});