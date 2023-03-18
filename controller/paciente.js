// Función para obtener todos los pacientes de la base de datos
function obtenerPacientes() {
    fetch('obtener_pacientes.php')
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al obtener pacientes:', error);
      });
  }
  
  // Función para agregar un nuevo paciente a la base de datos
  function agregarPaciente(identificacion, nombre, apellido, activo, regimen) {
    fetch('agregar_paciente.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        identificacion: identificacion,
        nombre: nombre,
        apellido: apellido,
        activo: activo,
        regimen: regimen
      })
    })
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al agregar paciente:', error);
      });
  }
  
  // Función para actualizar un paciente existente en la base de datos
  function actualizarPaciente(identificacion, nombre, apellido, activo, regimen) {
    fetch('actualizar_paciente.php', {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        identificacion: identificacion,
        nombre: nombre,
        apellido: apellido,
        activo: activo,
        regimen: regimen
      })
    })
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al actualizar paciente:', error);
      });
  }
  
  // Función para eliminar un paciente de la base de datos
  function eliminarPaciente(identificacion) {
    fetch('eliminar_paciente.php', {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        identificacion: identificacion
      })
    })
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al eliminar paciente:', error);
      });
  }
  