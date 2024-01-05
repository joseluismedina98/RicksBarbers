var fechaHoraActual='';
function mostrarFechaHora() {
  var now = new Date();
  var fecha = now.toLocaleDateString('es-ES', { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' });
  var horas = now.getHours();
  var minutos = now.getMinutes();
  var segundos = now.getSeconds();

  // Obtener el período (AM o PM)
  var periodo = (horas >= 12) ? 'PM' : 'AM';

  // Convertir a formato de 12 horas
  horas = (horas % 12) || 12;

  // Formatear la hora para que tenga dos dígitos
  horas = horas < 10 ? '0' + horas : horas;
  minutos = minutos < 10 ? '0' + minutos : minutos;
  segundos = segundos < 10 ? '0' + segundos : segundos;

   fechaHoraActual = fecha + ' ' + horas + ':' + minutos + ':' + segundos + ' ' + periodo;

  // Mostrar la fecha y hora en el elemento con id "fecha-hora"
  
  var elementoFechaHora = document.getElementById('fecha-hora');
  if (elementoFechaHora !== null) {
    // Tu código para mostrar la fecha y hora
    elementoFechaHora.innerHTML = fechaHoraActual;
  } else {
    console.error('El elemento fecha-hora no ha sido encontrado en el DOM.');
  }}

// Actualizar la fecha y hora cada segundo
setInterval(mostrarFechaHora, 1000);

// Mostrar la fecha y hora actual al cargar la página
document.addEventListener('DOMContentLoaded', function() {
  // Tu código aquí
  mostrarFechaHora();
});


document.addEventListener('DOMContentLoaded', function() {
  if (document.getElementById('personal') !== null) {
  document.getElementById('personal').onclick = prueba;
  }
});
document.addEventListener('DOMContentLoaded', function() {
  if (document.getElementById('Cortes') !== null) {
    document.getElementById('Cortes').onclick = prueba;
    }
  
});
document.addEventListener('DOMContentLoaded', function() {
  if (document.getElementById('Productos') !== null) {
    document.getElementById('Productos').onclick = prueba;
    }
});
function prueba(){
  alert("sad");
}