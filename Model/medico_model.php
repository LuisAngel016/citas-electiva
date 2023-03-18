<?php

class Medico {

    private $conn;
    private $table_name = "medicos";

    public $id;
    public $nombre;
    public $apellido;
    public $especialidad;

    public function __construct($db) {
        $this->conn = $db;
    }

    function obtenerTodos() {
        $query = "SELECT * FROM " . $this->table_name;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt;
    }

    function agregar() {
        $query = "INSERT INTO " . $this->table_name . " SET nombre=:nombre, apellido=:apellido, especialidad=:especialidad";
        $stmt = $this->conn->prepare($query);

        $this->nombre = htmlspecialchars(strip_tags($this->nombre));
        $this->apellido = htmlspecialchars(strip_tags($this->apellido));
        $this->especialidad = htmlspecialchars(strip_tags($this->especialidad));

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":apellido", $this->apellido);
        $stmt->bindParam(":especialidad", $this->especialidad);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }

    function actualizar() {
        $query = "UPDATE " . $this->table_name . " SET nombre=:nombre, apellido=:apellido, especialidad=:especialidad WHERE id=:id";
        $stmt = $this->conn->prepare($query);

        $this->nombre = htmlspecialchars(strip_tags($this->nombre));
        $this->apellido = htmlspecialchars(strip_tags($this->apellido));
        $this->especialidad = htmlspecialchars(strip_tags($this->especialidad));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $stmt->bindParam(":nombre", $this->nombre);
        $stmt->bindParam(":apellido", $this->apellido);
        $stmt->bindParam(":especialidad", $this->especialidad);
        $stmt->bindParam(":id", $this->id);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }

    function eliminar() {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }
}
