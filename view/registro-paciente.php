<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Registro de Paciente</title>
</head>
<body>
    <div class="container">

        <h1>Registro de Paciente</h1>
        <form class="formulario" id="registro-paciente">
            <label for="identificacion">Identificación:</label>
            <input type="number" id="identificacion" name="identificacion" required>
    
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
    
            <label for="apellido">Apellido:</label>
            <input type="text" id="apellido" name="apellido" required>
    
            
            <label for="regimen">Régimen:</label>
            <select id="regimen" name="regimen">
                <option value="contributivo">Contributivo</option>
                <option value="subsidiado">Subsidiado</option>
            </select>
    
            <input type="submit" value="Registrar" onclick="agregarPaciente(event)">
        </form>
    </div>

    <script src="../controller/paciente.js"></script>
</body>
</html>
