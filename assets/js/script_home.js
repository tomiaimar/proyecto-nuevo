$(document).ready(function() {

    // Obtener los valores
    const temperaturaElement = document.querySelector('.temperatura');
    const temperatura = temperaturaElement.textContent.split(':')[1].trim();
    const temperaturaSinC = temperatura.replace('°C', ''); // Remueve el símbolo de grados Celsius

    const humedadAElement = document.querySelector('.humedadA');
    const humedadA = humedadAElement.textContent.split(':')[1].trim();
    const humedadASinP = humedadA.replace('%', ''); // Remueve el símbolo de grados Celsius

    const humedadTElement = document.querySelector('.humedadT');
    const humedadT = humedadTElement.textContent.split(':')[1].trim();
    const humedadTSinP = humedadT.replace('%', ''); // Remueve el símbolo de grados Celsius


    // Obtener el elemento del icono de la planta
    const iconoPlanta = document.querySelector('.icono-planta');
    const mensajePlanta = document.querySelector('.mensaje-planta');

    // Cambiar el color del icono según los valores
    if (temperaturaSinC > 55 || temperaturaSinC < 25) {
      iconoPlanta.style.color = 'red'; // cambiar a rojo si algún valor es mayor que cierto número
      mensajePlanta.style.color = 'red';
      mensajePlanta.textContent = '¡La temperatura está mal!';
    } else {
      iconoPlanta.style.color = 'green'; // cambiar a verde si todos los valores son menores que cierto número
      mensajePlanta.textContent = '¡El estado es óptimo!';
    }

    // Get the value of the checkbox from local storage
    const isCheckedCooler = localStorage.getItem('cooler-manual') === 'true';

    // Set the checked state of the checkbox
    document.getElementById('cooler-manual').checked = isCheckedCooler;
    const manualCoolerMsj = document.getElementById('cooler-manual-msj');

    if (isCheckedCooler === 'true') {
      manualCoolerMsj.style.color = 'green';
    } else {
      manualCoolerMsj.style.color = 'red';
    }

    // Add an event listener to the checkbox to save its state to local storage when it is clicked
    document.getElementById('cooler-manual').addEventListener('click', () => {
        localStorage.setItem('cooler-manual', document.getElementById('cooler-manual').checked);
        if (document.getElementById('cooler-manual').checked === true) {
          manualCoolerMsj.style.color = 'green';
        } else {
          manualCoolerMsj.style.color = 'red';
        }
    });

    // Get the value of the checkbox from local storage
    const isCheckedHumo = localStorage.getItem('humo-manual') === 'true';

    // Set the checked state of the checkbox
    document.getElementById('humo-manual').checked = isCheckedHumo;
    const manualHumoMsj = document.getElementById('humo-manual-msj');

    if (isCheckedHumo === 'true') {
      manualHumoMsj.style.color = 'green';
    } else {
      manualHumoMsj.style.color = 'red';
    }

    // Add an event listener to the checkbox to save its state to local storage when it is clicked
    document.getElementById('humo-manual').addEventListener('click', () => {
        localStorage.setItem('humo-manual', document.getElementById('humo-manual').checked);
        if (document.getElementById('humo-manual').checked === true) {
          manualHumoMsj.style.color = 'green';
        } else {
          manualHumoMsj.style.color = 'red';
        }
    });

    // Get the value of the checkbox from local storage
    const isCheckedRiego = localStorage.getItem('riego-manual') === 'true';

    // Set the checked state of the checkbox
    document.getElementById('riego-manual').checked = isCheckedRiego;
    const manualRiegoMsj = document.getElementById('riego-manual-msj');

    if (isCheckedRiego === 'true') {
      manualRiegoMsj.style.color = 'green';
    } else {
      manualRiegoMsj.style.color = 'red';
    }

    // Add an event listener to the checkbox to save its state to local storage when it is clicked
    document.getElementById('riego-manual').addEventListener('click', () => {
        localStorage.setItem('riego-manual', document.getElementById('riego-manual').checked);
        if (document.getElementById('riego-manual').checked === true) {
          manualRiegoMsj.style.color = 'green';
        } else {
          manualRiegoMsj.style.color = 'red';
        }
    });

    $('#cooler-manual').click(function() {
        var isCoolerChecked = document.getElementById("cooler-manual").checked;
        $.ajax({
          url: 'http://localhost/proyecto-nuevo/php/manual_cooler.php',
          type: 'POST',
          data: { isChecked: isCoolerChecked },
          success: function(response) {
            Swal.fire({
              icon: 'success',
              title: 'Felicidades!',
              text: response
            });
          },
          error: function(xhr, status, error) {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: xhr.responseText
            });
          }
        });
    });

    $('#humo-manual').click(function() {
        var isHumoChecked = document.getElementById("humo-manual").checked;
        $.ajax({
          url: 'http://localhost/proyecto-nuevo/php/manual_humo.php',
          type: 'POST',
          data: { isChecked: isHumoChecked },
          success: function(response) {
            Swal.fire({
              icon: 'success',
              title: 'Felicidades!',
              text: response
            });
          },
          error: function(xhr, status, error) {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: xhr.responseText
            });
          }
        });
    });

    $('#riego-manual').click(function() {
        var isRiegoChecked = document.getElementById("riego-manual").checked;
        $.ajax({
          url: 'http://localhost/proyecto-nuevo/php/manual_riego.php',
          type: 'POST',
          data: { isChecked: isRiegoChecked },
          success: function(response) {
            Swal.fire({
              icon: 'success',
              title: 'Felicidades!',
              text: response
            });
          },
          error: function(xhr, status, error) {
            Swal.fire({
              icon: 'error',
              title: 'Oops...',
              text: xhr.responseText
            });
          }
        });
    });
});
