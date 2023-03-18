<?php

// Datos de conexión a la base de datos
$host = "localhost";
$user = "usuario";
$password = "contraseña";
$dbname = "citas";

// Conexión a la base de datos
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificar si hay errores en la conexión
if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Función para obtener todos los pacientes de la base de datos
function obtenerPacientes() {
    global $conn;
    $sql = "SELECT * FROM pacientes";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $pacientes = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $pacientes[] = $row;
        }
        return $pacientes;
    } else {
        return null;
    }
}

// Función para agregar un nuevo paciente a la base de datos
function agregarPaciente($identificacion, $nombre, $apellido, $activo, $regimen) {
    global $conn;
    $sql = "INSERT INTO pacientes (identificacion, nombre, apellido, activo, regimen) VALUES ('$identificacion', '$nombre', '$apellido', '$activo', '$regimen')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Función para actualizar un paciente existente en la base de datos
function actualizarPaciente($id, $identificacion, $nombre, $apellido, $activo, $regimen) {
    global $conn;
    $sql = "UPDATE pacientes SET identificacion='$identificacion', nombre='$nombre', apellido='$apellido', activo='$activo', regimen='$regimen' WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Función para eliminar un paciente de la base de datos
function eliminarPaciente($id) {
    global $conn;
    $sql = "DELETE FROM pacientes WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        return true;
    } else {
        return false;
    }
}

// Cerrar conexión a la base de datos
mysqli_close($conn);

?>
