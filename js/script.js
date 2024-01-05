var url = 'php/CaseMenu.php';

// Función que se ejecutará cuando se haga clic en el botón
function VerificarLogin() {

    var user = document.getElementById('username').value;
    var pass = document.getElementById('password').value;
    
    var datos = {
        iOpcion: 1,
        sUsuario: user,
        sPassword: pass
      };
    
      // Configurar la solicitud Fetch
      fetch(url, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify(datos),
      })
      .then(response => response.json())
      .then(data => {
        // La respuesta desde el servidor (PHP) estará en data
        console.log('Respuesta desde PHP:', data.codigoRespuesta);
        
        if(data.codigoRespuesta==1){
          window.location.href = 'index.html';

        }else{
          
          Swal.fire({
            title: 'Rick´s Barber',
            text: 'Contraseña o usuario Incorrecto.',
            icon: 'error', // Puedes cambiar esto según tu necesidad (success, error, warning, info)
          });
        }

      })
      .catch(error => {
        console.error('Error en la solicitud:', error);
      });


   
  }
  
  // Asignar la función al evento clic del botón cuando se carga la página
  document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('miBoton').onclick = VerificarLogin;
  });


 
