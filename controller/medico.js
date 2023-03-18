// Función para obtener todos los médicos de la base de datos
function obtenerMedicos() {
    fetch('obtener_medicos.php')
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al obtener médicos:', error);
      });
  }
  
  // Función para agregar un nuevo médico a la base de datos
  function agregarMedico(identificacion, nombre, apellido, especialidad) {
    
    fetch('agregar_medico.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        identificacion: identificacion,
        nombre: nombre,
        apellido: apellido,
        especialidad: especialidad
      })
    })
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al agregar médico:', error);
      });
  }
  
  // Función para actualizar un médico existente en la base de datos
  function actualizarMedico(identificacion, nombre, apellido, especialidad) {
    fetch('actualizar_medico.php', {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        identificacion: identificacion,
        nombre: nombre,
        apellido: apellido,
        especialidad: especialidad
      })
    })
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al actualizar médico:', error);
      });
  }
  
  // Función para eliminar un médico de la base de datos
  function eliminarMedico(identificacion) {
    fetch('eliminar_medico.php', {
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
        console.error('Error al eliminar médico:', error);
      });
  }
  