<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Tabla de citas del médico</title>
    <style>
		body {
			font-family: Arial, sans-serif;
			background-color: #f2f2f2;
		}

		.container {
			width: 80%;
			margin: 0 auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 5px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
		}

		h1 {
			font-size: 28px;
			margin-bottom: 20px;
			color: #333;
			text-align: center;
		}

		label {
			display: block;
			margin-bottom: 10px;
			font-size: 16px;
			color: #333;
			font-weight: bold;
		}

		input[type="text"] {
			display: block;
			width: 100%;
			padding: 10px;
			border-radius: 5px;
			border: none;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
			margin-bottom: 20px;
		}

		table {
			width: 100%;
			border-collapse: collapse;
			margin-bottom: 20px;
			box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
		}

		th, td {
			padding: 10px;
			text-align: left;
			border-bottom: 1px solid #ddd;
		}

		th {
			background-color: #f2f2f2;
			font-weight: bold;
			color: #333;
		}

		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #333;
			color: #fff;
			border-radius: 5px;
			text-decoration: none;
			transition: background-color 0.3s ease-in-out;
		}

		.btn:hover {
			background-color: #555;
		}

        .input-container{
            margin-bottom: 50px;
            max-width: 25%;
        }

	</style>
  </head>

  <body>
    <h1>Tabla de citas del médico</h1>

    <div class="input-container">
      <form>
        <label for="medico_identificacion">Identificación del médico:</label>
        <input type="text" id="medico_identificacion" name="medico_identificacion" required>
        <input class="btn" type="submit" value="Buscar" onclick="obtenerCitas(event)">
      </form>
    </div>

    <table>
      <thead>
        <tr>
          <th>Fecha de la cita</th>
          <th>Hora de la cita</th>
          <th>Identificacion del paciente</th>
          <th>Nombre del paciente</th>
          <th>Valor de la consulta</th>
        </tr>
      </thead>
      <tbody>
        <!-- Aquí se mostrarán las citas del médico -->
      </tbody>
    </table>
  </body>
  <script type="module" src="../controller/citas.js"></script>
</html>
