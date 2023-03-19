<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Citas</title>
</head>

<body onload="obtenerMedicos()">
  <div class="container">
    <h1>Agendar Cita</h1>
    <form class="formulario" id="formulario-cita">
      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" name="fecha" required>

      <label for="hora">Hora:</label>
      <input type="time" id="hora" name="hora" required>

      <label for="medico">Médico:</label>
      <select id="medico" name="medico" required>
        <option value="">Seleccione un médico</option>
        <option value="1100402605">Dr. Juan Pérez</option>
        <option value="456">Dra. María Rodríguez</option>
        <option value="789">Dr. Luis Gómez</option>
      </select>

      <label for="paciente">Identificacion del paciente:</label>
      <input type="number" id="paciente" name="paciente" required>
      
      <label for="paciente">Nombre del paciente:</label>
      <input type="text" id="N_paciente" name="paciente" required>

      <input id = "btn-agregar-cita" type="submit" value="Agendar" onclick="agregarCita(event)">
    </form>
  </div>
  <script src="../controller/citas.js"></script>
  <script src="../controller/medico.js"></script>
  
</body>

</html>