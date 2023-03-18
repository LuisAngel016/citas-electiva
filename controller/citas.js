// Función para obtener todas las citas de la base de datos
function obtenerCitas() {
    fetch('obtener_citas.php')
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al obtener citas:', error);
      });
  }
  
  // Función para agregar una nueva cita a la base de datos
  function agregarCita(event) {
    
    event.preventDefault();

    const fecha = document.getElementById("fecha").value;
    const hora = document.getElementById("hora").value;
    const paciente_id = document.getElementById("paciente").value;
    const medico_identificacion = document.getElementById("medico").value;
    const atentida = false

    const datos = {
        fecha,
        hora,
        atentida,
        paciente_id,
        medico_identificacion
    }

    console.log("datos")

    fetch('http://localhost/citas-electiva/Model/citas_model.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        datos
      })
    })
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al agregar cita:', error);
      });
  }
  
  // Función para actualizar una cita existente en la base de datos
  function actualizarCita(id, fecha, hora, paciente, medico) {
    fetch('actualizar_cita.php', {
      method: 'PUT',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        id: id,
        fecha: fecha,
        hora: hora,
        paciente: paciente,
        medico: medico
      })
    })
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al actualizar cita:', error);
      });
  }
  
  // Función para eliminar una cita de la base de datos
  function eliminarCita(id) {
    fetch('eliminar_cita.php', {
      method: 'DELETE',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        id: id
      })
    })
      .then(response => response.json())
      .then(data => {
        // Aquí puedes manipular los datos obtenidos y actualizar la vista
        console.log(data);
      })
      .catch(error => {
        console.error('Error al eliminar cita:', error);
      });
  }
  